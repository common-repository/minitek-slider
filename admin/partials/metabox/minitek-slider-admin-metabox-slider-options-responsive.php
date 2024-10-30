<?php
/**
 * Provide the view for the metabox parameters: slider-options/responsive
 *
 * @since 		  1.1.0
 * @package 	  Minitek-Slider
 * @subpackage 	Minitek-Slider/admin/partials
 */

?><tr><th colspan="2"><h4><?php esc_html_e( 'Large screen', 'minitek-slider' ); ?></h4></th></tr><?php

// Size limit
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-l-size';
$atts['label'] = 'Size limit';
$atts['name'] = 'slider-l-size';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '1139';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Items per page
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-l-items';
$atts['label'] = 'Items per page';
$atts['name'] = 'slider-l-items';
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

// Show detail box
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-l-db';
$atts['label'] = 'Show detail box';
$atts['name'] = 'slider-l-db';
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

// Show only title
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-l-db-title';
$atts['label'] = 'Show only title';
$atts['name'] = 'slider-l-db-title';
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

// Min height
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-l-min-height';
$atts['label'] = 'Min height';
$atts['name'] = 'slider-l-min-height';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '400';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

?><tr><th colspan="2"><h4><?php esc_html_e( 'Medium screen', 'minitek-slider' ); ?></h4></th></tr><?php

// Size limit
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-m-size';
$atts['label'] = 'Size limit';
$atts['name'] = 'slider-m-size';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '939';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Items per page
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-m-items';
$atts['label'] = 'Items per page';
$atts['name'] = 'slider-m-items';
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

// Show detail box
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-m-db';
$atts['label'] = 'Show detail box';
$atts['name'] = 'slider-m-db';
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

// Show only title
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-m-db-title';
$atts['label'] = 'Show only title';
$atts['name'] = 'slider-m-db-title';
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

// Min height
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-m-min-height';
$atts['label'] = 'Min height';
$atts['name'] = 'slider-m-min-height';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '400';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

?><tr><th colspan="2"><h4><?php esc_html_e( 'Small screen', 'minitek-slider' ); ?></h4></th></tr><?php

// Size limit
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-s-size';
$atts['label'] = 'Size limit';
$atts['name'] = 'slider-s-size';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '719';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Items per page
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-s-items';
$atts['label'] = 'Items per page';
$atts['name'] = 'slider-s-items';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '2';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Show detail box
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-s-db';
$atts['label'] = 'Show detail box';
$atts['name'] = 'slider-s-db';
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

// Show only title
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-s-db-title';
$atts['label'] = 'Show only title';
$atts['name'] = 'slider-s-db-title';
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

// Min height
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-s-min-height';
$atts['label'] = 'Min height';
$atts['name'] = 'slider-s-min-height';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '400';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

?><tr><th colspan="2"><h4><?php esc_html_e( 'Extra small screen', 'minitek-slider' ); ?></h4></th></tr><?php

// Size limit
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-xs-size';
$atts['label'] = 'Size limit';
$atts['name'] = 'slider-xs-size';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '479';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Items per page
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-xs-items';
$atts['label'] = 'Items per page';
$atts['name'] = 'slider-xs-items';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '1';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Show detail box
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-xs-db';
$atts['label'] = 'Show detail box';
$atts['name'] = 'slider-xs-db';
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

// Show only title
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-xs-db-title';
$atts['label'] = 'Show only title';
$atts['name'] = 'slider-xs-db-title';
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

// Min height
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-xs-min-height';
$atts['label'] = 'Min height';
$atts['name'] = 'slider-xs-min-height';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '350';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

?><tr><th colspan="2"><h4><?php esc_html_e( 'Extra extra small screen', 'minitek-slider' ); ?></h4></th></tr><?php

// Items per page
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-xxs-items';
$atts['label'] = 'Items per page';
$atts['name'] = 'slider-xxs-items';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '1';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Show detail box
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-xxs-db';
$atts['label'] = 'Show detail box';
$atts['name'] = 'slider-xxs-db';
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

// Show only title
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-xxs-db-title';
$atts['label'] = 'Show only title';
$atts['name'] = 'slider-xxs-db-title';
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

// Min height
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-xxs-min-height';
$atts['label'] = 'Min height';
$atts['name'] = 'slider-xxs-min-height';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '350';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php
