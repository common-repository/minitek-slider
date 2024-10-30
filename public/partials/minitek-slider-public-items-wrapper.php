<?php
/**
 * This file is used to markup the items wrapper.
 *
 * @since      1.0.1
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/public/partials
 */

$horizontal_padding = (isset($slider_options['slider-overlay-arrows']) && $slider_options['slider-overlay-arrows'][0] == 'no');

?><div class="mslider-wrapper-inner <?php
	echo $horizontal_padding ? 'mslider-horizontal-padding' : ''; ?>"><?php

  $class = 'mslider mslider-main mslider-'.$slider_options['slider-theme'][0];
  $class .= ($slider_options['slider-pagination-bullets'][0] == 'yes') ? ' with-bullets' : '';
  $class .= ($slider_options['slider-progress-bar'][0] == 'yes') ? ' with-progressbar' : '';
  $class .= ($slider_options['slider-pagination-bullets'][0] == 'yes') ? ' '.$slider_options['slider-bullets-style'][0].'-bullets' : '';

  // Main slider
  ?><div id="mslider_<?php echo $slider_id; ?>" class="<?php echo $class; ?>"><?php
    include( plugin_dir_path( __FILE__ ) . 'minitek-slider-public-items.php' );
  ?></div><?php 
  
  // Progress bar
  if ($slider_options['slider-progress-bar'][0] == 'yes') 
  {
    ?><div id="mslider_progressbar_<?php echo $slider_id; ?>" class="mslider-progressbar <?php
      echo ($slider_options['slider-pagination-bullets'][0] == 'yes') ? 'with-bullets' : ''; 
    ?>"></div><?php
  }

?></div><?php