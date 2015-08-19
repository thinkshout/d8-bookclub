Clone ts_build and checkout Dan’s experimental_drupal_8 branch. I added and removed some modules with and without D8 versions.

The install profile doesn’t work yet. When I tried to manually install as a ThinkShout project, I got:
Fatal error: Call to a member function getPath() on a non-object in /Users/toto/Sites/d8testtheme/core/includes/install.inc on line 931

Some possible leads on that, as yet uninvestigated:
https://www.drupal.org/node/2425015
https://www.drupal.org/node/2210443

So I installed the plain profile and ended up with no theme for some reason. I manually enabled Seven, and that worked out.

Fix .htaccess.

The status page gave a max nesting level 256 error. To fix, I used `locate` to find /usr/local/etc/php/5.5/conf.d/ext-xdebug.ini and set `xdebug.max_nesting_level = 256`. I restarted apache, but I’m not sure that was needed.

Turn on a theme.

To build a module, I tried drupal console:
https://www.drupal.org/project/console

To install:
curl -LSs http://drupalconsole.com/installer | php
mv console.phar /usr/local/bin/drupal

Then in your d8 folder:
`drupal generate:module`

I used the defaults, though adding a composer file might be wise.

To make a module, first I grabbed the code here:
https://www.drupal.org/node/2101565

Save it to src/Plugin/Block/HelloBlock.php.

This did not work. I needed a router and controller, which weren’t added by drupal console.

Add controller:
https://www.drupal.org/node/2464199

Add router:
https://www.drupal.org/node/2464207

And after I added those, I needed to change the namespace within the router and controller to match the machine name of the module I created with drupal console.

I’d also somehow missed adding the src folder when I created the Plugin.

Finally, when I visited admin/structure/block, I was able to place the block.
