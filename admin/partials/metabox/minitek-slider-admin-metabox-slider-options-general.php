<?php
/**
 * Provide the view for the metabox parameters: slider-options/general
 *
 * @since 		  1.1.0
 * @package 	  Minitek-Slider
 * @subpackage 	Minitek-Slider/admin/partials
 */

 // Grid class
 $atts = array();
 $atts['description'] = 'An optional class to be applied to the slider container.';
 $atts['id'] = 'slider-class';
 $atts['label'] = 'Slider class';
 $atts['name'] = 'slider-class';
 $atts['placeholder'] = '';
 $atts['type'] = 'text';
 $atts['value'] = '';

 if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
   $atts['value'] = get_post_meta($post_id, $atts['id'], true);
 }

 apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

 ?><tr><?php
 include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
 ?></tr><?php

 ?><tr><th colspan="2"><hr /></th></tr><?php

 // Load FontAwesome
 $atts = array();
 $atts['description'] = 'Disable if you are already using the FontAwesome library in your template.';
 $atts['id'] = 'slider-font-awesome';
 $atts['label'] = 'Load FontAwesome';
 $atts['name'] = 'slider-font-awesome';
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