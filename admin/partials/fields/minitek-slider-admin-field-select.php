<?php
/**
 * Provides the markup for a select field
 *
 * @since      1.0.1
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/admin/partials
 */

if (!empty($atts['label']))
{
	?><th><label for="<?php echo esc_attr( $atts['id'] ); ?>"><?php esc_html_e( $atts['label'], 'minitek-slider' ); ?>: </label></th><?php
}

if (empty($atts['value']))
{
	$atts['value'] = '0';
}

?><td>
	<select
		aria-label="<?php isset($atts['aria']) ? esc_attr(_e($atts['aria'], 'minitek-slider')) : ''; ?>"
		class="<?php isset($atts['class']) ? esc_attr($atts['class']) : ''; ?>"
		id="<?php echo esc_attr( $atts['id'] ); ?>"
		name="<?php echo esc_attr( $atts['name'] ); ?>"
	><?php

		if (!empty($atts['blank'])) 
		{
			?><option value><?php esc_html_e( $atts['blank'], 'minitek-slider' ); ?></option><?php
		}

		foreach ($atts['selections'] as $selection)
		{
			$disabled = false;

			if (is_array($selection))
			{
				$label = $selection['label'];
				$value = $selection['value'];
				$disabled = isset($selection['disabled']) ? true : false;
			} 
			else 
			{
				$label = strtolower( $selection );
				$value = strtolower( $selection );
			}

			?><option value="<?php echo esc_attr( $value ); ?>" <?php
				if ($disabled)
					echo 'disabled ';
				selected( $atts['value'], $value ); ?>><?php
				esc_html_e( $label, 'minitek-slider' );
				if ($disabled)
					echo ' ['.__( 'Pro', 'minitek-slider' ).']';
			?></option><?php
		}

	?></select>

	<p class="description"><?php esc_html_e( $atts['description'], 'minitek-slider' ); ?></p>
</td>