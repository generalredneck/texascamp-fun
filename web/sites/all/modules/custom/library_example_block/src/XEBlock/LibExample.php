<?php

namespace Drupal\library_example_block\XEBlock;

use Drupal\xautoload_example\XEBlockBase;
use joshtronic\LoremIpsum;

/**
 * A less Dum Dum block.
 */
class LibExample extends XEBlockBase {
  public function getInfo() {
    return array(
      'info' => 'Lorem Ipsum Block',
    );
  }

  public function getMachineName() {
    return 'lorem_ipsum_block';
  }

  public function getSubject() {
    return 'Lorem Ipsum Block';
  }

  public function render() {
    library_example_block_load_library();
    $lipsum = new LoremIpsum();
    return array(
      '#markup' => $lipsum->paragraph('p'),
    );
  }
}
