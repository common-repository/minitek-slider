<?php
/**
 * Provide the view for the metabox parameters: slider-options/hover-box
 *
 * @since 		  1.1.0
 * @package 	  Minitek-Slider
 * @subpackage 	Minitek-Slider/admin/partials
 */

// Show hover box
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-hover-box';
$atts['label'] = 'Show hover box';
$atts['name'] = 'slider-hover-box';
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

// Background color
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-hover-box-bg-color';
$atts['label'] = 'Background color';
$atts['name'] = 'slider-hover-box-bg-color';
$atts['placeholder'] = '';
$atts['type'] = 'color';
$atts['value'] = '#eb885e';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-color.php' );
?></tr><?php

// Background color opacity
$atts = array();
$atts['description'] = 'Accepts values from 0 up to 1 with 2 decimals (e.g., 0.75).';
$atts['id'] = 'slider-hover-box-opacity';
$atts['label'] = 'Background color opacity';
$atts['name'] = 'slider-hover-box-opacity';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0.75';

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
$atts['id'] = 'slider-hover-box-text-color';
$atts['label'] = 'Text color';
$atts['name'] = 'slider-hover-box-text-color';
$atts['placeholder'] = '';
$atts['type'] = 'color';
$atts['value'] = '#ffffff';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-color.php' );
?></tr><?php

// Effect type
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-hover-box-effect';
$atts['label'] = 'Effect type';
$atts['name'] = 'slider-hover-box-effect';
$atts['type'] = 'select';
$atts['value'] = 'no';
$atts['selections'] = array(
  array(
    'value' => 'no',
    'label' => 'Simple toggle, no effects'
  ),
  array(
    'value' => '1',
    'label' => 'Fade in'
  ),
  array(
    'value' => '2',
    'label' => 'Flip Y'
  ),
  array(
    'value' => '3',
    'label' => 'Flip X'
  ),
  array(
    'value' => '4',
    'label' => 'Slide in left'
  ),
  array(
    'value' => '5',
    'label' => 'Slide in right'
  ),
  array(
    'value' => '6',
    'label' => 'Slide in top'
  ),
  array(
    'value' => '7',
    'label' => 'Slide in bottom'
  ),
  array(
    'value' => '8',
    'label' => 'Zoom in'
  )
);

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-select.php' );
?></tr><?php

// Effect speed
$atts = array();
$atts['description'] = 'In seconds (e.g., 0.4 or 1.2).';
$atts['id'] = 'slider-hover-box-speed';
$atts['label'] = 'Effect speed';
$atts['name'] = 'slider-hover-box-speed';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '0.4';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Effect easing
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-hover-box-easing';
$atts['label'] = 'Effect easing';
$atts['name'] = 'slider-hover-box-easing';
$atts['type'] = 'select';
$atts['value'] = 'cubic-bezier(0.445, 0.05, 0.55, 0.95)';
$atts['selections'] = array(
  array(
    'value' => 'cubic-bezier(0.47, 0, 0.745, 0.715)',
    'label' => 'easeInSine'
  ),
  array(
    'value' => 'cubic-bezier(0.39, 0.575, 0.565, 1)',
    'label' => 'easeOutSine'
  ),
  array(
    'value' => 'cubic-bezier(0.445, 0.05, 0.55, 0.95)',
    'label' => 'easeInOutSine'
  ),
  array(
    'value' => 'cubic-bezier(0.55, 0.085, 0.68, 0.53)',
    'label' => 'easeInQuad'
  ),
  array(
    'value' => 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
    'label' => 'easeOutQuad'
  ),
  array(
    'value' => 'cubic-bezier(0.455, 0.03, 0.515, 0.955)',
    'label' => 'easeInOutQuad'
  ),
  array(
    'value' => 'cubic-bezier(0.55, 0.055, 0.675, 0.19)',
    'label' => 'easeInCubic'
  ),
  array(
    'value' => 'cubic-bezier(0.215, 0.61, 0.355, 1)',
    'label' => 'easeOutCubic'
  ),
  array(
    'value' => 'cubic-bezier(0.645, 0.045, 0.355, 1)',
    'label' => 'easeInOutCubic'
  ),
  array(
    'value' => 'cubic-bezier(0.895, 0.03, 0.685, 0.22)',
    'label' => 'easeInQuart'
  ),
  array(
    'value' => 'cubic-bezier(0.165, 0.84, 0.44, 1)',
    'label' => 'easeOutQuart'
  ),
  array(
    'value' => 'cubic-bezier(0.77, 0, 0.175, 1)',
    'label' => 'easeInOutQuart'
  ),
  array(
    'value' => 'cubic-bezier(0.755, 0.05, 0.855, 0.06)',
    'label' => 'easeInQuint'
  ),
  array(
    'value' => 'cubic-bezier(0.23, 1, 0.32, 1)',
    'label' => 'easeOutQuint'
  ),
  array(
    'value' => 'cubic-bezier(0.86, 0, 0.07, 1)',
    'label' => 'easeInOutQuint'
  ),
  array(
    'value' => 'cubic-bezier(0.95, 0.05, 0.795, 0.035)',
    'label' => 'easeInExpo'
  ),
  array(
    'value' => 'cubic-bezier(0.19, 1, 0.22, 1)',
    'label' => 'easeOutExpo'
  ),
  array(
    'value' => 'cubic-bezier(1, 0, 0, 1)',
    'label' => 'easeInOutExpo'
  ),
  array(
    'value' => 'cubic-bezier(0.6, 0.04, 0.98, 0.335)',
    'label' => 'easeInCirc'
  ),
  array(
    'value' => 'cubic-bezier(0.075, 0.82, 0.165, 1)',
    'label' => 'easeOutCirc'
  ),
  array(
    'value' => 'cubic-bezier(0.785, 0.135, 0.15, 0.86)',
    'label' => 'easeInOutCirc'
  ),
  array(
    'value' => 'cubic-bezier(0.6, -0.28, 0.735, 0.045)',
    'label' => 'easeInBack'
  ),
  array(
    'value' => 'cubic-bezier(0.175, 0.885, 0.32, 1.275)',
    'label' => 'easeOutBack'
  ),
  array(
    'value' => 'cubic-bezier(0.68, -0.55, 0.265, 1.55)',
    'label' => 'easeInOutBack'
  )
);

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-select.php' );
?></tr><?php

?><tr><th colspan="2"><hr /></th></tr><?php

// Show title
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-hover-box-title';
$atts['label'] = 'Show title';
$atts['name'] = 'slider-hover-box-title';
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

// Title limit
$atts = array();
$atts['description'] = 'Word limit for title.';
$atts['id'] = 'slider-hover-box-title-limit';
$atts['label'] = 'Title limit';
$atts['name'] = 'slider-hover-box-title-limit';
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

// Show introtext
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-hover-box-introtext';
$atts['label'] = 'Show introtext';
$atts['name'] = 'slider-hover-box-introtext';
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

// Introtext limit
$atts = array();
$atts['description'] = 'Word limit for introtext.';
$atts['id'] = 'slider-hover-box-introtext-limit';
$atts['label'] = 'Introtext limit';
$atts['name'] = 'slider-hover-box-introtext-limit';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = '15';

if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
  $atts['value'] = get_post_meta($post_id, $atts['id'], true);
}

apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

?><tr><?php
include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
?></tr><?php

// Strip introtext html
$atts = array();
$atts['description'] = 'If disabled, the introtext limit will be ignored.';
$atts['id'] = 'slider-hover-box-strip-html';
$atts['label'] = 'Strip introtext html';
$atts['name'] = 'slider-hover-box-strip-html';
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

// Show date
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-hover-box-date';
$atts['label'] = 'Show date';
$atts['name'] = 'slider-hover-box-date';
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

// Date format
$atts = array();
$atts['description'] = 'Documentation on date and time formatting.';
$atts['id'] = 'slider-hover-box-date-format';
$atts['label'] = 'Date format';
$atts['name'] = 'slider-hover-box-date-format';
$atts['placeholder'] = '';
$atts['type'] = 'text';
$atts['value'] = 'l F d';
$atts['desc_link'] = 'https://codex.wordpress.org/Formatting_Date_and_Time';

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
$atts['id'] = 'slider-hover-box-category';
$atts['label'] = 'Show category';
$atts['name'] = 'slider-hover-box-category';
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

// Show tags
$atts = array();
$atts['description'] 	= '';
$atts['id'] = 'slider-hover-box-tags';
$atts['label'] = 'Show tags';
$atts['name'] = 'slider-hover-box-tags';
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

// Show author
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-hover-box-author';
$atts['label'] = 'Show author';
$atts['name'] = 'slider-hover-box-author';
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

// Show comments count
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-hover-box-comments';
$atts['label'] = 'Show comments count';
$atts['name'] = 'slider-hover-box-comments';
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

// Show link icon
$atts = array();
$atts['description'] = '';
$atts['id'] = 'slider-hover-box-link';
$atts['label'] = 'Show link icon';
$atts['name'] = 'slider-hover-box-link';
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
?></tr>