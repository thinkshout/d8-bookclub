<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */

namespace Drupal\d8demo_hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('Hello, World!'),
    );
  }
}
?>
