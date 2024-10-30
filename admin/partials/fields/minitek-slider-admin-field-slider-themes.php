<?php
/**
 * Provides the markup for a radio field
 *
 * @since      1.0.1
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/admin/partials
 */

if ( ! empty( $atts['label'] ) ) {

	?><th><label for="<?php echo esc_attr( $atts['id'] ); ?>"><?php esc_html_e( $atts['label'], 'minitek-slider' ); ?>: </label></th><?php

}

if ( empty( $atts['value'] ) ) {

	$atts['value'] = '0';

}

?>
<td>

<fieldset>
<?php
foreach ( $atts['selections'] as $selection ) {

	if ( is_array( $selection ) ) {

		$label = $selection['label'];
		$value = $selection['value'];
		$image = $selection['image'];

	} else {

		$label = strtolower( $selection );
		$value = strtolower( $selection );
		$image = strtolower( $selection );

	}

	?><div class="theme-radio">

		<label>

			<p><?php echo $label; ?></p>

			<div class="theme-radio-demo-cont">
				<div class="theme-radio-demo">
					<img alt="<?php echo esc_html_e( $label, 'minitek-slider' ); ?>" src="<?php echo esc_url( MSLIDER__ADMIN_PLUGIN_URL .'images/'.$image ); ?>">
				</div>
			</div>

			<input
				type="radio"
				name="<?php echo esc_attr( $atts['name'] ); ?>"
				value="<?php echo esc_attr( $value ); ?>"
				class="theme-radio-input" <?php
				checked( $atts['value'], $value ); ?>>

		</label>

	</div>

<?php
} // foreach

?>
</fieldset>
</td>
