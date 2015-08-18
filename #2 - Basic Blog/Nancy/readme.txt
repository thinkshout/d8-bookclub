Creating the blog content type and the view were easy. Exporting it into a module, not so
much.

After talking with Greg about the options, I decided to try the Configuration Development
module. https://www.drupal.org/project/config_devel I had some trouble installing it, but
finally got it installed. 

I used the Drupal console to generate and empty module called 'blog' in /modules/custom.
Then ran drush config-list | grep blog to get a list of any configurations that pertained
to the blog. 

I added that list of files to my blog.info.yml file:
name: blog
type: module
description: Blog module
core: 8.x
package: Other
config_devel:
  - core.entity_form_display.node.blog.default
  - core.entity_view_display.node.blog.default
  - core.entity_view_display.node.blog.teaser
  - field.field.node.blog.body
  - node.type.blog
  - views.view.blog_teasers
  
According to the Configuration Development module, once you have done that, you can run
drush cd-em blog from the command line and it is supposed to create files for each of the 
configs and write them to the config/install directory with your module. The command 
appeared to run without error, but did not put any files into the directory. 

I manually copied them into the install directory myself to include them in the module, 
but this could cause problems with the uuid's. The Configuration Development module was 
supposed to take care of this when it wrote them to the folder. 

I have submitted a ticket to the Configuration Development module issue queue. Hopefully 
there is an easy answer. https://www.drupal.org/node/2553405. Greg commented on the issue
that he was not able to get the command to work properly either. 
 
  