# =============================================================================
# CHANGE THIS PER CONFIGURATION
# =============================================================================

set :env, "production"                                                                                       # alpha, beta, prod
set :deploy_to, "/sites/abundantharvestorganics.com/blog"                                                                 # CHANGE THIS LINE TO POINT TO THE CORRECT PATH
set :user, "root"                                                                                   # CHANGE THIS LINE TO USE YOUR OCS USERNAME

# =============================================================================
# MAIN CONFIG
# =============================================================================

role :web, "www.abundantharvestorganics.com"                                                                            # Your HTTP server, Apache/etc
role :app, "www.abundantharvestorganics.com"                                                                            # This may be the same as your `Web` server
role :db,  "www.abundantharvestorganics.com", :primary => true                                                          # This is where Rails migrations will run
