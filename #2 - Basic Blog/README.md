## Instructions

Create a content type called with blog with (at least) the following fields:
- Title
- Body
- Author
- Updated (timestamp)

Create a teaser view of the blog content type.

Export both the content type and view into the configuration of a custom module.

## Meeting notes

### Gabe
- Did things the “familiar way"
- Problem getting hook_node_view to work
- Copied pieces of the export one at a time to construct the config file
 
### Amy
- Inlcuded images, tags, and pull quote field
- Felt similar to D7
- Did a full export from the configuration screen
- Struggled to update module configuration after a field

### Eric
- Used Drupal Console to generate a `post` entity type
- Provided a full scaffold for managing post entities
- Went back to just creating a content type and then did a full export

### Nancy
- Had no problem building out the content types and views
- Used Drupal Console to generate an empty module
- Used the contrib module Config Devel
- Used Drush command `drush config-list`
- The command that was suppoed to export the config, `drush ` did not work. Greg concurs, and they filed an issue.
- Ended up cherry picking from full export

### Jaymz
- Drupal site building is very geared towards making a "blog"
- Hard part was exporting
- Ran `drush config-export`
- Core CMI will not work with our current workflow. Drupal 8 configuration is "owned" by the site, not the module

### Jami
- Also used Drupal console to setup basic infrastructure
- Grabbing individual settings very tedious
- Also experiminted with creating a custom entity type
- When exporting, issue with Drupal core that no way to distinguish between fields with the same label

### Greg
- First enabled file based configuration storage
- Moves the config directory up a level to `/sites`
- Display suite is built into core, used a contrib module called "rel", renderable elements, to control the display of the node meta info.

### Joe
- Site building step all good
- Pointed out "Visually Hidden" display option
- To find what files he needed, he first exported the entire config, then added his content types, views, etc, then was able to see a "diff" with the original export.

### Tauno
- Used Features! Also installed config update, which gives you reports on what needs updating.
- Helped determine what to export.
