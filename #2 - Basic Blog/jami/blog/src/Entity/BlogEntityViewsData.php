<?php

/**
 * @file
 * Contains Drupal\blog\Entity\BlogEntity.
 */

namespace Drupal\blog\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Blog entity entities.
 */
class BlogEntityViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['blog']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Blog entity'),
      'help' => $this->t('The Blog entity ID.'),
    );

    return $data;
  }

}
