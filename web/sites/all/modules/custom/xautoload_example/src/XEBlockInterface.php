<?php

namespace Drupal\xautoload_example;

interface XEBlockInterface {

  public function getInfo();
  public function getMachineName();
  public function getSubject();
  public function render();

}
