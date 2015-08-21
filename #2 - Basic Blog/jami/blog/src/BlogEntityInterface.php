<?php

/**
 * @file
 * Contains Drupal\blog\BlogEntityInterface.
 */

namespace Drupal\blog;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Blog entity entities.
 *
 * @ingroup blog
 */
interface BlogEntityInterface extends ContentEntityInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
