<?php

namespace Drupal\myrisk\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CustomBlock' block.
 *
 * @Block(
 *  id = "myrisk_custom_block",
 *  admin_label = @Translation("Simple Text Block Mygrid"),
 * )
 */
class Myrisk extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Add custom CSS.
    $build['#attached']['library'][] = 'myrisk/myrisk_css';

    // Add JavaScript.
    $build['#attached']['library'][] = 'myrisk/myrisk_js';

    // Add HTML content.
    $build['content'] = [
      '#markup' => '
<div class="grid-container">
<div class="grid-item yel" data-value="31" id="1"></div>
<div class="grid-item orng" data-value="97" id="2"></div>
<div class="grid-item redish" data-value="214" id="3"></div>
<div class="grid-item redish" data-value="260" id="4"></div>
<div class="grid-item grn" data-value="10" id="5"></div>
<div class="grid-item yel" data-value="70" id="6"></div>
<div class="grid-item orng" data-value="156" id="7"></div>
<div class="grid-item redish" data-value="185" id="8"></div>
<div class="grid-item grn" data-value="6" id="9"></div>
<div class="grid-item grn" data-value="14" id="10"></div>
<div class="grid-item yel" data-value="54" id="11"></div>
<div class="grid-item orng" data-value="115" id="12"></div>
<div class="grid-item grn" data-value="5" id="13"></div>
<div class="grid-item grn" data-value="7" id="14"></div>
<div class="grid-item grn" data-value="20" id="15"></div>
<div class="grid-item yel" data-value="42" id="16"></div>

<div class="labels-container">

<div class="severity-label">
    <span>Severity</span>
</div>

<div class="probability-label">
    <span>Probability</span>
</div>
</div>

<div class="score-container">
      <span class="score">Score: <span id="score"></span></span>
      <button type="submit" "class="reset-button">Reset</button>
    </div>
</div>
</div>
</div>	
     ',
    ];

    return $build;
  }
}


