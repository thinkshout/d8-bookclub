## Content Type Module

After Creating your content type and configuring it as you like, the easy way to make a module is to

 - Add the module folder and `.info.yml` file (In my case, `d8demo_blog.info.yml`).
 - Add `config/install` folders.
 - Export the full site config: `/admin/config/development/configuration/full/export`
 - Delete your content type.
 - Import the full site you just downloaded: `/admin/config/development/configuration/full/import`

This will give you a list of files. Unzip the full install, copy the files, and place them in the modules' `config/install` folder. Chmod them 644, then remove the uuid (first line) from each of the files.

You should then be able to enable the module and all of your content type settings will return.

Note: at this point, you should again make a full export, so any aditional changes will be from this point forward.
