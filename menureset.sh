rm -rf var/cache
bin/console pim:install:asset 
yarn run webpack
bin/console cache:clear -e dev
