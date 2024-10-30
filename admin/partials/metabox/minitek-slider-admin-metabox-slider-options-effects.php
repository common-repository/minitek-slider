<?php
/**
 * Provide the view for the metabox parameters: slider-options/effects
 *
 * @since 		  1.1.0
 * @package 	  Minitek-Slider
 * @subpackage 	Minitek-Slider/admin/partials
 */

// Fade effect
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-fade';
$atts['label'] = 'Fade effect';
$atts['name'] = 'slider-fade';
$atts['type'] = 'text';
$atts['value'] = '';
$atts['pro'] = true;

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Drag and scroll
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-drag';
$atts['label'] = 'Drag and scroll';
$atts['name'] = 'slider-drag';
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

// Drag threshold
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-drag-threshold';
$atts['label'] = 'Drag threshold';
$atts['name'] = 'slider-drag-threshold';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '3';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Selected attraction
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-selected-attraction';
$atts['label'] = 'Selected attraction';
$atts['name'] = 'slider-selected-attraction';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0.025';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Friction
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-friction';
$atts['label'] = 'Friction';
$atts['name'] = 'slider-friction';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0.28';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Free scroll
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-free-scroll';
$atts['label'] = 'Free scroll';
$atts['name'] = 'slider-free-scroll';
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
?></tr><?php

// Free scroll friction
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-free-scroll-friction';
$atts['label'] = 'Free scroll friction';
$atts['name'] = 'slider-free-scroll-friction';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0.075';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Rewind to start
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-rewind';
$atts['label'] = 'Rewind to start';
$atts['name'] = 'slider-rewind';
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
?></tr><?php

// Contain
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-contain';
$atts['label'] = 'Contain';
$atts['name'] = 'slider-contain';
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
?></tr><?php

// Group items
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-group-items';
$atts['label'] = 'Group items';
$atts['name'] = 'slider-group-items';
$atts['type'] = 'text';
$atts['value'] = '';
$atts['pro'] = true;

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Autoplay
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-autoplay';
$atts['label'] = 'Autoplay';
$atts['name'] = 'slider-autoplay';
$atts['type'] = 'text';
$atts['value'] = '';
$atts['pro'] = true;

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Autoplay speed
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-autoplay-speed';
$atts['label'] = 'Autoplay speed';
$atts['name'] = 'slider-autoplay-speed';
$atts['type'] = 'text';
$atts['value'] = '';
$atts['pro'] = true;

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Adaptive height
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-adaptive-height';
$atts['label'] = 'Adaptive height';
$atts['name'] = 'slider-adaptive-height';
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