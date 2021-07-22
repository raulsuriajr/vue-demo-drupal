<?php

namespace Drupal\vue_test\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class VueTestController.
 */
class VueTestController extends ControllerBase {
  public function index() {
    return [
      '#theme' => 'vue_test',
    ];
  }
}
