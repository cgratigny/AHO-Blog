set :stages, %w(alpha beta production)
# require 'railsless-deploy'
require 'capistrano/ext/multistage'

set :application, "ibssm.org"                                                                           # the name of the application that is in subversion
set :keep_releases, "2"

# =============================================================================
# SOURCE CONTROL
# =============================================================================
set :user, "root"
set :scm, :git
set :repository,  "git@github.com:cgratigny/AHO-Blog"

# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

# =============================================================================
# OPTIONAL VARIABLES
# =============================================================================
set :use_sudo, true                                                                                     # may as well use sudo in case we run into permission problems
set :deploy_via, :remote_cache                                                                               # it didn't work without export, I want to use remote_cache

# =============================================================================
# TASKS
# =============================================================================

namespace :deploy do
	
  task :start, :roles => :app do
    run "cd #{deploy_to}/current; mongrel_rails start -e production -p #{port_number} -d"
  end
  task :stop, :roles => :app do
    run "cd #{deploy_to}/current; mongrel_rails stop"
  end
  task :restart, :roles => :app do
    run "cd #{deploy_to}/current; mongrel_rails stop; mongrel_rails start -e production -p #{port_number} -d"
    run "echo \"WEBSITE HAS BEEN DEPLOYED\""
  end

end

# Override default tasks which are not relevant to a non-rails app.
namespace :deploy do
  task :migrate do
    puts "    not doing migrate because not a Rails application."
  end
  task :finalize_update do
    puts "    not doing finalize_update because not a Rails application."
  end
  task :link_production_db do
    puts "    not doing finalize_update because not a Rails application."
  end
  task :start do
    puts "    not doing start because not a Rails application."
  end
  task :stop do 
    puts "    not doing stop because not a Rails application."                                            
  end
  task :restart do

    run "ln -s #{deploy_to}/static/uploads #{deploy_to}/current/www/wp-content/uploads"

    run "chmod 777 #{deploy_to}/static/uploads"
    
    run "rsync -avz #{deploy_to}/current/env/#{env}/ #{deploy_to}/current/www"

  end
	task :after_deploy do
    	cleanup
  	end	
end