# Amy's Subtheme Homework (week 3)
---

## Process:
First, I watched a Drupalize.me video about what's new in Drupal 8 theming. This helped provide a guideline of features and tools at my disposal and roughly how they would operate. Then, I looked at Drupal.org resources and found a guideline for setting up a subtheme.

I chose to work with the new Drupal 8 "Classy" theme option, created a "custom" directory, added my "classy_amy" subtheme directory, and included my `classy_amy.info.yml` and `classy_amy.libraries.yml` files. Greg mentioned changes in theming wouldn't register locally unless changes were made to my `example.settings.local.php` file. So, I googled "d8 theming example.settings.local.php" and found an excellent and thorough [article](http://savaslabs.com/2015/06/10/d8-theming-basics.html) by Anne Tomasevich that touches upon the changes that need to take place to this and other files.

After creating the subtheme, I enabled it via the `admin/appearance` path in the UI. Afterwards, I created a "templates" directory and included a `node--blog-post.html.twig` file to allow for changes in the way blog posts are displayed. Here, I ran into troubles trying to get PHPstorm to debug. So, I was used the `{{ dump ()}}` method and threw the available variables in there to see what got rendered. This was frustrating, as it seemed I would either render an object with little known way to get inside it, the list of Twig file name suggestions, or a null value. I was, however, able to add a pretty line image to blog posts when the `view_mode` equals `teaser`. Hooray!

## Resources:
* [Theming Drupal 8](https://www.drupal.org/theme-guide/8): Drupal.org.
* [Adding stylesheets and JavaScript to a Drupal 8 theme](https://www.drupal.org/node/2216195): Drupal.org.
* [Adding Regions to a Theme](https://www.drupal.org/node/2469113): Drupal.org.
* [Twig in Drupal 8](https://www.drupal.org/theme-guide/8/twig) Drupal.org.
* [Drupalize Me](https://drupalize.me/videos/whats-new-drupal-8-theming): What's New in Drupal 8 Theming.
* [The Drupal 8 Theming Guide](http://d8.sqndr.com/) by [sqndr](https://www.drupal.org/u/sqndr).
* [Drupal 8 Theming Basics](http://savaslabs.com/2015/06/10/d8-theming-basics.html) by Anne Tomasevich

Nancy found these gems:
* [Drupal 8 Theming Fundamentals, Part 1](https://www.lullabot.com/articles/drupal-8-theming-fundamentals-part-1) by John Hannah from Lullabot
* [Drupal 8 Theming Fundamentals, Part 2](https://www.lullabot.com/articles/drupal-8-theming-fundamentals-part-2) by John Hannah from Lullabot