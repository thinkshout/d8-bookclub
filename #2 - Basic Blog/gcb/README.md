http://nuvole.org/blog/2014/jul/15/packaging-and-reusing-configuration-drupal-8

Used various other links that I lost track of. Crux was:

- Exporting configuration isn't like Features (and that's probably good)
- Using the configuration managament tool in the config menu could do the job: especially if you export the entire site configuration and just dig through it for your content type.
- It's easy to export without exporting form and display configuration: and that's not useful.
- configuration goes into modulename/config/install/ and as that name implies, is ignored after initial installation!!

It appears that this strategy is not a good one long term for site building, though it may be useful for modules.
