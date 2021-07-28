<?php

namespace Drupal\vue_two\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class VueController.
 */
class VueController extends ControllerBase {

  /**
   * Hello.
   *
   * @return array
   *   Return Hello string.
   */
  public function index() {
    return [
      '#theme' => 'vue_two'
    ];
  }
}
