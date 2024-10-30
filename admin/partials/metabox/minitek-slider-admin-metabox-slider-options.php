<?php
/**
 * Provide the view for a metabox
 *
 * @since       1.0.1
 * @package     Minitek-Slider
 * @subpackage  Minitek-Slider/admin/partials
 */

wp_nonce_field( $this->plugin_name, 'slider_options' );

$post_id = get_the_ID();

?>
<div id="mslider-admin-metabox-options">
<?php

	// General ?>
	<div id="mslider-admin-metabox-general-settings" class="inside">
	<table class="form-table">
	<tbody><?php

		include( plugin_dir_path( __FILE__ ) . 'minitek-slider-admin-metabox-' . $params['args']['file'] . '-general.php' );

	?></tbody>
	</table>
	</div>
	<?php

	// Data source ?>
	<div id="mslider-admin-metabox-data-source" class="inside hidden"><?php

		// Data source options ?>
		<div id="mslider-admin-metabox-data-source-options"><?php

			include( plugin_dir_path( __FILE__ ) . 'minitek-slider-admin-metabox-' . $params['args']['file'] . '-data-source.php' );
			
		?></div>

	</div>
	<?php

	// Layout ?>
	<div id="mslider-admin-metabox-layout" class="inside hidden">
	<table class="form-table">
	<tbody><?php

		include( plugin_dir_path( __FILE__ ) . 'minitek-slider-admin-metabox-' . $params['args']['file'] . '-layout.php' );

	?></tbody>
	</table>
	</div>
	<?php

	// Images ?>
	<div id="mslider-admin-metabox-images" class="inside hidden">
	<table class="form-table">
	<tbody><?php

		include( plugin_dir_path( __FILE__ ) . 'minitek-slider-admin-metabox-' . $params['args']['file'] . '-images.php' );

	?></tbody>
	</table>
	</div>
	<?php

	// Detail box settings ?>
	<div id="mslider-admin-metabox-detail-box" class="inside hidden"><?php

		include( plugin_dir_path( __FILE__ ) . 'minitek-slider-admin-metabox-' . $params['args']['file'] . '-detail-box.php' );

	?></div>
	<?php

	// Hover box ?>
	<div id="mslider-admin-metabox-hover-box" class="inside hidden">
	<table class="form-table">
	<tbody><?php

		include( plugin_dir_path( __FILE__ ) . 'minitek-slider-admin-metabox-' . $params['args']['file'] . '-hover-box.php' );

	?></tbody>
	</table>
	</div>
	<?php

	// Navigation ?>
	<div id="mslider-admin-metabox-navigation" class="inside hidden">
	<table class="form-table">
	<tbody><?php

		include( plugin_dir_path( __FILE__ ) . 'minitek-slider-admin-metabox-' . $params['args']['file'] . '-navigation.php' );

	?></tbody>
	</table>
	</div>
	<?php

	// Effects ?>
	<div id="mslider-admin-metabox-effects" class="inside hidden">
	<table class="form-table">
	<tbody><?php

		include( plugin_dir_path( __FILE__ ) . 'minitek-slider-admin-metabox-' . $params['args']['file'] . '-effects.php' );

	?></tbody>
	</table>
	</div>
	<?php

	// Responsive ?>
	<div id="mslider-admin-metabox-responsive-levels" class="inside hidden">
	<table class="form-table">
	<tbody><?php

		include( plugin_dir_path( __FILE__ ) . 'minitek-slider-admin-metabox-' . $params['args']['file'] . '-responsive.php' );

	?></tbody>
	</table>
	</div>

</div>
