How to enable config in files.

https://www.drupal.org/node/2416555

To store configuration in version control, you should change the path to the active configuration in settings.php to somewhere outside of the .gitignore paths. Ideally above the Drupal root.
