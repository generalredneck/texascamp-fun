<?php

namespace Drupal\xautoload_example;

class SimpleObject {
  public function render() {
    return array(
      '#markup' => "<p>Hello World</p>",
    );
  }
}
