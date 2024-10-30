<?php
/**
 * Provide the view for the metabox parameters: slider-options/detail-box
 *
 * @since 		  1.1.0
 * @package 	  Minitek-Slider
 * @subpackage 	Minitek-Slider/admin/partials
 */
?>

<div id="mslider-admin-metabox-detail-box-general">
	<table class="form-table">
		<tbody>
		<?php

			// Show detail box
			$atts = array();
			$atts['description'] = '';
			$atts['id'] = 'slider-detail-box';
			$atts['label'] = 'Show detail box';
			$atts['name'] = 'slider-detail-box';
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
			$atts['id'] = 'slider-detail-box-bg-color';
			$atts['label'] = 'Background color';
			$atts['name'] = 'slider-detail-box-bg-color';
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

			// Background color opacity
			$atts = array();
			$atts['description'] = 'Accepts values from 0 up to 1 with 2 decimals (e.g., 0.75).';
			$atts['id'] = 'slider-detail-box-opacity';
			$atts['label'] = 'Background color opacity';
			$atts['name'] = 'slider-detail-box-opacity';
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
			$atts['id'] = 'slider-detail-box-text-color';
			$atts['label'] = 'Text color';
			$atts['name'] = 'slider-detail-box-text-color';
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

			?><tr><th colspan="2"><hr /></th></tr><?php

			// Show title
			$atts = array();
			$atts['description'] = '';
			$atts['id'] = 'slider-detail-box-title';
			$atts['label'] = 'Show title';
			$atts['name'] = 'slider-detail-box-title';
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
			$atts['description'] 	= 'Word limit for title.';
			$atts['id'] = 'slider-detail-box-title-limit';
			$atts['label'] = 'Title limit';
			$atts['name'] = 'slider-detail-box-title-limit';
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

			// Enable title link
			$atts = array();
			$atts['description'] = '';
			$atts['id'] = 'slider-detail-box-title-link';
			$atts['label'] = 'Enable title link';
			$atts['name'] = 'slider-detail-box-title-link';
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

			// Show introtext
			$atts = array();
			$atts['description'] = '';
			$atts['id'] = 'slider-detail-box-introtext';
			$atts['label'] = 'Show introtext';
			$atts['name'] = 'slider-detail-box-introtext';
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

			// Introtext limit
			$atts = array();
			$atts['description'] = 'Word limit for introtext.';
			$atts['id'] = 'slider-detail-box-introtext-limit';
			$atts['label'] = 'Introtext limit';
			$atts['name'] = 'slider-detail-box-introtext-limit';
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
			$atts['id'] = 'slider-detail-box-strip-html';
			$atts['label'] = 'Strip introtext html';
			$atts['name'] = 'slider-detail-box-strip-html';
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
			$atts['id'] = 'slider-detail-box-date';
			$atts['label'] = 'Show date';
			$atts['name'] = 'slider-detail-box-date';
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
			$atts['id'] = 'slider-detail-box-date-format';
			$atts['label'] = 'Date format';
			$atts['name'] = 'slider-detail-box-date-format';
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
			$atts['id'] = 'slider-detail-box-category';
			$atts['label'] = 'Show category';
			$atts['name'] = 'slider-detail-box-category';
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

			// Show tags
			$atts = array();
			$atts['description'] = '';
			$atts['id'] = 'slider-detail-box-tags';
			$atts['label'] = 'Show tags';
			$atts['name'] = 'slider-detail-box-tags';
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

			// Show author
			$atts = array();
			$atts['description'] = '';
			$atts['id'] = 'slider-detail-box-author';
			$atts['label'] = 'Show author';
			$atts['name'] = 'slider-detail-box-author';
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

			// Show comments count
			$atts = array();
			$atts['description'] = '';
			$atts['id'] = 'slider-detail-box-comments';
			$atts['label'] = 'Show comments count';
			$atts['name'] = 'slider-detail-box-comments';
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

			// Show Read more button
			$atts = array();
			$atts['description'] = '';
			$atts['id'] = 'slider-detail-box-readmore';
			$atts['label'] = 'Show Read more button';
			$atts['name'] = 'slider-detail-box-readmore';
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

		?>
		</tbody>
	</table>
</div>