<?php

/**
 * @file
 * Contains Drupal\blog\Entity\Controller\BlogEntityListController.
 */

namespace Drupal\blog\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for the Blog entity entity.
 *
 * @ingroup blog
 */
class BlogEntityListController extends EntityListBuilder {
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Blog entity ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\blog\Entity\BlogEntity */
    $row['id'] = $entity->id();
    $row['name'] = \Drupal::l(
      $this->getLabel($entity),
      new Url(
        'entity.blog.edit_form', array(
          'blog' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
