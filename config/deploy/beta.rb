# =============================================================================
# CHANGE THIS PER CONFIGURATION
# =============================================================================

set :env, "beta"                                                                                       # alpha, beta, prod
set :deploy_to, "/sites/beta.abundantharvestorganics.com/blog"                                                                 # CHANGE THIS LINE TO POINT TO THE CORRECT PATH
set :user, "root"                                                                                   # CHANGE THIS LINE TO USE YOUR OCS USERNAME

# =============================================================================
# MAIN CONFIG
# =============================================================================

role :web, "beta.abundantharvestorganics.com"                                                                            # Your HTTP server, Apache/etc
role :app, "beta.abundantharvestorganics.com"                                                                            # This may be the same as your `Web` server
role :db,  "beta.abundantharvestorganics.com", :primary => true                                                          # This is where Rails migrations will run
