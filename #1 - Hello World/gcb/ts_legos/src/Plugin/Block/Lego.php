<?php

/**
 * @file
 * Contains \Drupal\ts_legos\Plugin\Block\Lego.
 */

namespace Drupal\ts_legos\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Creates a custom block, like Legos.
 *
 * @Block(
 *   id = "ts_legos_basic",
 *   admin_label = @Translation("A Basic Lego"),
 *   category = @Translation("Blocks")
 * )
 */
class Lego extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => t('This Lego is <strong>@color</strong>', array('@color' => $this->configuration['color'])),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['color'] = array(
      '#type' => 'select',
      '#title' => t('Color'),
      '#options' => array(
        'yellow' => t('Yellow'),
        'blue' => t('Blue'),
        'white' => t('White'),
        'black' => t('Black'),
        'red' => t('Red'),
        'green' => t('Green'),
      ),
      '#default_value' => $this->configuration['color'],
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['color'] = $form_state->getValue('color');
  }

}
