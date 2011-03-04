# =============================================================================
# CHANGE THIS PER CONFIGURATION
# =============================================================================

set :env, "alpha"                                                                                       # alpha, beta, prod
set :deploy_to, "/sites/alpha.abundantharvestorganics.com/blog"                                                                 # CHANGE THIS LINE TO POINT TO THE CORRECT PATH
set :user, "root"                                                                                   # CHANGE THIS LINE TO USE YOUR OCS USERNAME

# =============================================================================
# MAIN CONFIG
# =============================================================================

role :web, "alpha.abundantharvestorganics.com"                                                                            # Your HTTP server, Apache/etc
role :app, "alpha.abundantharvestorganics.com"                                                                            # This may be the same as your `Web` server
role :db,  "alpha.abundantharvestorganics.com", :primary => true                                                          # This is where Rails migrations will run
