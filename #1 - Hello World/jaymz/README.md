Set up your local environment (optional):
```
brew install php55-twig
brew install php55-uploadprogress

apachectl restart
```

Install Drupal 8:
```
composer create-project drupal-composer/drupal-project:8.x-dev my-project --stability dev --no-interaction

cd my-project/web

drush si --db-url=mysql://my-project:my-project@localhost/my-project
```

Add new dependencies to composer.json, then run:
```
composer update
```

