<?php
/**
 * Provides the markup for any text field
 *
 * @since      1.0.1
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/admin/partials
 */

if (!empty($atts['label']))
{
	?><th><label for="<?php echo esc_attr( $atts['id'] ); ?>"><?php esc_html_e( $atts['label'], 'minitek-slider' ); ?>: </label></th><?php
}

$pro = isset($atts['pro']) ? true : false;

if ($pro)
{
	?><td><div class="update-to-pro zero-margin notice inline notice-warning notice-alt">
		<p><span class="dashicons dashicons-lock"></span>
		<a href="https://www.minitek.gr/wordpress/plugins/minitek-slider#subscriptionPlans" target="_blank">
			<?php echo __('Upgrade to Pro', 'minitek-slider'); ?>
		</a></p>
	</div></td><?php
}
else
{
	?><td>
		<input
			class="<?php isset($atts['class']) ? esc_attr($atts['class']) : ''; ?>"
			id="<?php echo esc_attr( $atts['id'] ); ?>"
			name="<?php echo esc_attr( $atts['name'] ); ?>"
			placeholder="<?php echo esc_attr( $atts['placeholder'] ); ?>"
			type="<?php echo esc_attr( $atts['type'] ); ?>"
			value="<?php echo esc_attr( $atts['value'] ); ?>" 
		/><?php

		if (!empty($atts['description']))
		{
			?><p class="description"><?php
				if (array_key_exists('desc_link', $atts)) 
				{
					?><a href="<?php echo esc_url($atts['desc_link']); ?>" target="_blank"><?php
				}

				esc_html_e($atts['description'], 'minitek-slider');
				
				if (array_key_exists('desc_link', $atts))
				{
					?></a><?php 
				} 
			?></p><?php
		} 
	?></td><?php 
}