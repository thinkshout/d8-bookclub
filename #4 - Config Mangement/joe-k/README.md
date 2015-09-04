For my demo, I used my composer-based installer to build out seperate d8demo-live and d8demo-dev sites.

I then did full exports of the base site configs: `/admin/config/development/configuration/full/export`
and immediately imported them again.

I then set about matching the UUIDs for my dev and live sites, with help here:
http://enzolutions.com/articles/2014/08/27/understanding-configuration-management-in-drupal-8/

```drush cget system.site```

This will show you the UUID for your site, which you can then sync with an editor:

```drush cedit system.site```

I therefore took the UUID from my live site, and replaced my dev site UUID. You can then import the live config using the interface: `/admin/config/development/configuration/full/import`

Full sync fails however, due to mismatched entities.

This can be circumvented by using a command to explicitly sync updates and new configs:

```drush config-import staging --partial```

At this point, your local dev site and live sites can exchange site configs, and will only reflect changes.

Note: following any export, you should also import locally, so that you can easily review future changes.

