<?php
/**
 * Provide the view for the metabox parameters: slider-options/layout
 *
 * @since 		  1.1.0
 * @package 	  Minitek-Slider
 * @subpackage 	Minitek-Slider/admin/partials
 */

// Τheme
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-theme';
$atts['label'] = 'Τheme';
$atts['name'] = 'slider-theme';
$atts['type'] = 'radio';
$atts['value'] = 'image-slider';
$atts['selections'] = array(
  array(
    'value' => 'image-slider',
    'label' => 'Image Slider',
    'image' => 'theme/image_slider.jpg',
  ),
  array(
    'value' => 'article-slider-1',
    'label' => 'Article Slider 1',
    'image' => 'theme/article_slider_1.jpg',
  ),
  array(
    'value' => 'article-slider-2',
    'label' => 'Article Slider 2',
    'image' => 'theme/article_slider_2.jpg',
  ),
  array(
    'value' => 'article-slider-3',
    'label' => 'Article Slider 3',
    'image' => 'theme/article_slider_3.jpg',
  ),
  array(
    'value' => 'article-slider-4',
    'label' => 'Article Slider 4',
    'image' => 'theme/article_slider_4.jpg',
  ),
  array(
    'value' => 'article-slider-5',
    'label' => 'Article Slider 5',
    'image' => 'theme/article_slider_5.jpg',
  ),
  array(
    'value' => 'media-slider',
    'label' => 'Media Slider',
    'image' => 'theme/media_slider.jpg',
  )
);

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-slider-themes.php' );
?></tr><?php

?><tr><th colspan="2"><hr /></th></tr><?php

// Container background color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-bg-color';
$atts['label'] = 'Container background color';
$atts['name'] = 'slider-bg-color';
$atts['placeholder'] = '';
$atts['type'] = 'color';
$atts['value'] = '#FFFFFF';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-color.php' );
?></tr><?php

// Container background image
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-bg-image';
$atts['label'] = 'Container background image';
$atts['name'] = 'slider-bg-image';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-image.php' );
?></tr><?php

// Enable Fullscreen
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-fs';
$atts['label'] = 'Enable fullscreen';
$atts['name'] = 'slider-fs';
$atts['type'] = 'radio';
$atts['value'] = 'yes';
$atts['selections'] = array(
  array(
    'value' => 'yes',
    'label' => 'Yes'
  ),
  array(
    'value' => 'no',
    'label' => 'No'
  )
);

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-radio.php' );
?></tr><?php

// Fullscreen background color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-fs-color';
$atts['label'] = 'Fullscreen background color';
$atts['name'] = 'slider-fs-color';
$atts['placeholder'] = '';
$atts['type'] = 'color';
$atts['value'] = '#222222';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-color.php' );
?></tr><?php

// Fullscreen background image
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-fs-image';
$atts['label'] = 'Fullscreen background image';
$atts['name'] = 'slider-fs-image';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-image.php' );
?></tr><?php

// Container padding
$atts = array();
$atts['description'] = 'In pixels.';
$atts['id'] = 'slider-padding';
$atts['label'] = 'Container padding';
$atts['name'] = 'slider-padding';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Items spacing
$atts = array();
$atts['description'] = 'In pixels.';
$atts['id'] = 'slider-spacing';
$atts['label'] = 'Items spacing';
$atts['name'] = 'slider-spacing';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}
else if ( !metadata_exists( 'post', $post_id, $atts['id'] ) ) {
  $atts['value'] = '10';
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Items border radius
$atts = array();
$atts['description'] = 'In pixels.';
$atts['id'] = 'slider-border-radius';
$atts['label'] = 'Items border radius';
$atts['name'] = 'slider-border-radius';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Items border size
$atts = array();
$atts['description'] = 'In pixels.';
$atts['id'] = 'slider-border-size';
$atts['label'] = 'Items border size';
$atts['name'] = 'slider-border-size';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Items border color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-border-color';
$atts['label'] = 'Border color';
$atts['name'] = 'slider-border-color';
$atts['placeholder'] = '';
$atts['type'] = 'color';
$atts['value'] = '#CCCCCC';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-color.php' );
?></tr><?php

// Items alignment
$atts = array();
$atts['description'] = 'The items alignment in the slider.';
$atts['id'] = 'slider-align';
$atts['label'] = 'Items alignment';
$atts['name'] = 'slider-align';
$atts['type'] = 'select';
$atts['value'] = 'center';
$atts['selections'] = array(
  array(
    'value' => 'left',
    'label' => 'Left'
  ),
  array(
    'value' => 'center',
    'label' => 'Center'
  ),
  array(
    'value' => 'right',
    'label' => 'Right'
  )
);

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-select.php' );
?></tr><?php

// RTL layout
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-rtl';
$atts['label'] = 'Right-to-left layout';
$atts['name'] = 'slider-rtl';
$atts['type'] = 'radio';
$atts['value'] = 'no';
$atts['selections'] = array(
  array(
    'value' => 'yes',
    'label' => 'Yes'
  ),
  array(
    'value' => 'no',
    'label' => 'No'
  )
);

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-radio.php' );
?></tr>