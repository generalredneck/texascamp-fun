<?php

namespace Drupal\xautoload_example;

class XEBlockBase implements XEBlockInterface {

  public function getInfo() {
    return array(
      'info' => 'Dummy Block',
    );
  }

  public function getMachineName() {
    return 'dummmy_block';
  }

  public function getSubject() {
    return 'Dummy Block';
  }

  public function render() {
    return array(
      '#markup' => '<em>What a Dum Dum.</em>',
    );
  }

}
