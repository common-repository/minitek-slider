<?php

/**
 * @package           	Minitek-Slider
 * @since               1.0.1
 *
 * @wordpress-plugin
 * Plugin Name:       	Minitek Slider
 * Plugin URI:        	https://www.minitek.gr/wordpress/plugins/minitek-slider
 * Description:       	A powerful responsive slider for WordPress.
 * Version:           	1.2.0
 * Author:            	Minitek.gr
 * Author URI:        	https://www.minitek.gr/
 * License:           	GPL3
 * License URI:       	https://www.gnu.org/licenses/gpl-3.0.en.html
 * Text Domain:       	minitek-slider
 * Domain Path:       	/languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'MSLIDER__ADMIN_PLUGIN_DIR', plugin_dir_path( __FILE__ ).'admin/' );
define( 'MSLIDER__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MSLIDER__ADMIN_PLUGIN_URL', plugin_dir_url( __FILE__ ).'admin/' );
define( 'MSLIDER__PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 */
function activate_mslider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-minitek-slider-activator.php';
	MSlider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_mslider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-minitek-slider-deactivator.php';
	MSlider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mslider' );
register_deactivation_hook( __FILE__, 'deactivate_mslider' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-minitek-slider.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    	1.0.1
 */
function run_mslider() {

	$plugin = new MSlider();
	$plugin->run();

}

run_mslider();
