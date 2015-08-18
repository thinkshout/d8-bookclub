echo "First, we'll unzip the composer build files."
read -p ": unzip -o d8demo.zip"
unzip -o d8demo.zip
echo
echo "Now we cd to that directory"
read -p ": cd d8demo"
cd d8demo
echo
echo "Drupal 8 requires Drush 8 - let's do a quick install!"
read -p "d8demo: composer global require drush/drush:dev-master"
composer global require drush/drush:dev-master
echo
echo "Run the Composer install!"
read -p "d8demo: composer install"
composer install
echo
echo "Now we unzip the 'Hello World' module"
read -p "d8demo: unzip -vo ../d8demo_module.zip -d web/modules"
unzip -o ../d8demo_module.zip -d web/modules
echo
echo "Now we just enable the module and clear the cache."
read -p "d8demo: cd web;drush en d8demo_hello_world -y;drush cr"
cd web;drush en d8demo_hello_world -y;drush cr
echo
echo "Done!"
