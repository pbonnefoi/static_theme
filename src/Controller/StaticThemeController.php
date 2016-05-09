<?php

/**
 * @file
 * Contains \Drupal\static_theme\Controller\StaticThemeController.
 */

namespace Drupal\static_theme\Controller;

use Drupal\Core\Controller\ControllerBase;

class StaticThemeController extends ControllerBase {

  /**
   * @param $theme_type
   * @param $theme_name
   * @return array
   */
  public function content($theme_type, $theme_name) {

    $node_types = $this->entityTypeManager()
      ->getStorage('node_type')
      ->loadMultiple();

    return [
      '#theme' => 'static_page',
      '#theme_type' => $theme_type,
      '#theme_name' => $theme_name,
      '#node_types' => $node_types,
    ];
  }

}
