For my demo, I built a small shell script that walked through the site installation and module setup steps: 

First, we'll unzip the composer build files.

```unzip -o d8demo.zip```

Now we cd to that directory

```cd d8demo```

Drupal 8 requires Drush 8 - let's do a quick install.

```composer global require drush/drush:dev-master```

Run the Composer install!

```composer install```

Now we unzip the 'Hello World' module

```unzip -o ../d8demo_module.zip -d web/modules```

Now we just enable the module and clear the cache.

```cd web;drush en d8demo_hello_world -y;drush cr```

