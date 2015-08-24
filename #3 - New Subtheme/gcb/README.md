Create a directory with a themename.info.yml file in it in themes/custom/

Override the node.html.twig by creating your own in "templates".

Copy the existing file for a baseline. When working with it, you must constantly rebuild your cache to see changes.

PHPstorm won't debug properly, but ```{{ dump(content) }}``` can give you an idea what you are working with.

Useful links:

Let's Debug Twig in Drupal 8! [https://drupalize.me/blog/201405/lets-debug-twig-drupal-8]

Debugging compiled Twig templates [https://www.drupal.org/node/1903374]

Drupal 8 custom page template [http://drupal.stackexchange.com/questions/141373/drupal-8-custom-page-template]

Building a theme in Drupal 8 [http://agile.coop/blog/building-theme-drupal-8]

Define a theme with an info.yml file [https://www.drupal.org/node/2349827

Creating a Drupal 8 sub-theme [https://www.drupal.org/node/2165673]