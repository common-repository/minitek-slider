<?php
/**
 * Provide the view for the metabox parameters: slider-options/navigation
 *
 * @since 		  1.1.0
 * @package 	  Minitek-Slider
 * @subpackage 	Minitek-Slider/admin/partials
 */

?><tr><th colspan="2"><h4><?php esc_html_e( 'Main Slider', 'minitek-slider' ); ?></h4></th></tr><?php

// Total items
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-total-items';
$atts['label'] = 'Total items';
$atts['name'] = 'slider-total-items';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '8';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Load more items
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-load-more';
$atts['label'] = 'Load more items';
$atts['name'] = 'slider-load-more';
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

// Start limit
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-start-limit';
$atts['label'] = 'Start limit';
$atts['name'] = 'slider-start-limit';
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

// Dynamic limit
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-dynamic-limit';
$atts['label'] = 'Dynamic limit';
$atts['name'] = 'slider-dynamic-limit';
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

?><tr><th colspan="2"><hr /></th></tr><?php

// Navigation arrows
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigation-arrows';
$atts['label'] = 'Navigation arrows';
$atts['name'] = 'slider-navigation-arrows';
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

// Overlay arrows
$atts = array();
$atts['description'] = 'Display arrows on top of the items or add horizontal padding to slider.';
$atts['id'] = 'slider-overlay-arrows';
$atts['label'] = 'Overlay arrows';
$atts['name'] = 'slider-overlay-arrows';
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

// Arrows color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-arrows-color';
$atts['label'] = 'Arrows color';
$atts['name'] = 'slider-arrows-color';
$atts['placeholder'] = '';
$atts['type'] = 'color';
$atts['value'] = '#525a80';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-color.php' );
?></tr><?php

?><tr><th colspan="2"><hr /></th></tr><?php

// Pagination bullets
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-pagination-bullets';
$atts['label'] = 'Pagination bullets';
$atts['name'] = 'slider-pagination-bullets';
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

// Bullets style
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-bullets-style';
$atts['label'] = 'Bullets style';
$atts['name'] = 'slider-bullets-style';
$atts['type'] = 'select';
$atts['value'] = 'circle';
$atts['selections'] = array(
  array(
    'value' => 'circle',
    'label' => 'Circles'
  ),
  array(
    'value' => 'square',
    'label' => 'Squares'
  ),
  array(
    'value' => 'line',
    'label' => 'Lines'
  )
);

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-select.php' );
?></tr><?php

// Bullets color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-bullets-color';
$atts['label'] = 'Bullets color';
$atts['name'] = 'slider-bullets-color';
$atts['placeholder'] = '';
$atts['type'] = 'color';
$atts['value'] = '#525a80';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-color.php' );
?></tr><?php

?><tr><th colspan="2"><hr /></th></tr><?php

// Progress bar
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-progress-bar';
$atts['label'] = 'Progress bar';
$atts['name'] = 'slider-progress-bar';
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

// Progress bar color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-progress-bar-color';
$atts['label'] = 'Progress bar color';
$atts['name'] = 'slider-progress-bar-color';
$atts['placeholder'] = '';
$atts['type'] = 'color';
$atts['value'] = '#525a80';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-color.php' );
?></tr><?php

?><tr><th colspan="2"><h4><?php esc_html_e( 'Navigator', 'minitek-slider' ); ?></h4></th></tr><?php

// Show navigator
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator';
$atts['label'] = 'Show navigator';
$atts['name'] = 'slider-navigator';
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

// Position
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-position';
$atts['label'] = 'Position';
$atts['name'] = 'slider-navigator-position';
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

// Item width
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-width';
$atts['label'] = 'Item width';
$atts['name'] = 'slider-navigator-width';
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

// Item height
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-height';
$atts['label'] = 'Item height';
$atts['name'] = 'slider-navigator-height';
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

// Items spacing
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-spacing';
$atts['label'] = 'Items spacing';
$atts['name'] = 'slider-navigator-spacing';
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

// Show images
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-images';
$atts['label'] = 'Show images';
$atts['name'] = 'slider-navigator-images';
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

// Border size
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-border';
$atts['label'] = 'Border size';
$atts['name'] = 'slider-navigator-border';
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

// Selected border color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-selected-color';
$atts['label'] = 'Selected border color';
$atts['name'] = 'slider-navigator-selected-color';
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

// Active border color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-active-color';
$atts['label'] = 'Active border color';
$atts['name'] = 'slider-navigator-active-color';
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

// Navigator arrows
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-arrows';
$atts['label'] = 'Navigator arrows';
$atts['name'] = 'slider-navigator-arrows';
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

?><tr><th colspan="2"><hr /></th></tr><?php

// Show detail box
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-db';
$atts['label'] = 'Show detail box';
$atts['name'] = 'slider-navigator-db';
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

// Background color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-db-color';
$atts['label'] = 'Background color';
$atts['name'] = 'slider-navigator-db-color';
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

// Background color opacity
$atts = array();
$atts['description'] = 'Accepts values from 0 up to 1 with 2 decimals (e.g., 0.75).';
$atts['id'] = 'slider-navigator-db-opacity';
$atts['label'] = 'Background color opacity';
$atts['name'] = 'slider-navigator-db-opacity';
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

// Text color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-text-color';
$atts['label'] = 'Text color';
$atts['name'] = 'slider-navigator-text-color';
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

// Show date
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-date';
$atts['label'] = 'Show date';
$atts['name'] = 'slider-navigator-date';
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

// Show title
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-title';
$atts['label'] = 'Show title';
$atts['name'] = 'slider-navigator-title';
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

// Show category
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-category';
$atts['label'] = 'Show category';
$atts['name'] = 'slider-navigator-category';
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

// Show author
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-author';
$atts['label'] = 'Show author';
$atts['name'] = 'slider-navigator-author';
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

// Show price
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-navigator-price';
$atts['label'] = 'Show price';
$atts['name'] = 'slider-navigator-price';
$atts['type'] = 'text';
$atts['value'] = '';
$atts['pro'] = true;

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr>