<?php

/**
 * @file
 * Contains Drupal\blog\BlogEntityAccessControlHandler.
 */

namespace Drupal\blog;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Blog entity entity.
 *
 * @see \Drupal\blog\Entity\BlogEntity.
 */
class BlogEntityAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, $langcode, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view blog entity entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit blog entity entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete blog entity entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add blog entity entities');
  }

}
