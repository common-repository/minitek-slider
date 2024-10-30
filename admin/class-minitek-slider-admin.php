<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @since      1.0.1
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/admin
 */

class MSlider_Admin {

	/**
	 * The plugin options.
	 *
	 * @since    1.0.1
	 * @access 	 private
	 * @var      string 			$options    The plugin options.
	 */
	private $options;

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.1
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.1
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.1
	 * @param    string    $plugin_name       The name of this plugin.
	 * @param    string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.1
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/minitek-slider-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name.'_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.1
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/minitek-slider-admin.js', array( 'jquery' ), $this->version, false );

		if (isset($_GET['page']) && $_GET['page'] == 'minitek-slider-dashboard') {

			wp_enqueue_script( $this->plugin_name. '-update', plugin_dir_url( __FILE__ ) . 'js/minitek-slider-admin-update.js', array( 'jquery' ), $this->version, false );

			// Pass php variables to script
			wp_localize_script( 
				$this->plugin_name. '-update', 
				'mslider_vars', 
				array('mslider_ajaxurl' => admin_url('admin-ajax.php'))
			);
		}

	}

	/**
	 * Add page links to plugin menu.
	 *
	 * @since 	 1.0.1
	 */
	public function add_menu() {

		// Dashboard
		add_submenu_page(
			'edit.php?post_type=mslider',
			apply_filters( $this->plugin_name . '-dashboard-page-title', esc_html__( 'Minitek Slider - Dashboard', 'minitek-slider' ) ),
			apply_filters( $this->plugin_name . '-dashboard-menu-title', esc_html__( 'Dashboard', 'minitek-slider' ) ),
			'manage_options',
			$this->plugin_name . '-dashboard',
			array( $this, 'page_dashboard' )
		);

	}

	/**
	 * Re-order the admin menu.
	 *
	 * @since 	 1.1.0
	 */
	public function mslider_edit_admin_menu_order( $menu_order ) {

		# Get submenu key location based on slug
		global $submenu;

		// Re-index submenu
		$submenu['edit.php?post_type=mslider'] = array_values($submenu['edit.php?post_type=mslider']);

		$sliders = $submenu['edit.php?post_type=mslider'][0];
		$new_slider = $submenu['edit.php?post_type=mslider'][1];
		$dashboard = $submenu['edit.php?post_type=mslider'][2];

		// Re-order submenu
		$submenu['edit.php?post_type=mslider'][0] = $dashboard;
		$submenu['edit.php?post_type=mslider'][1] = $sliders;
		$submenu['edit.php?post_type=mslider'][2] = $new_slider;

		# Return the new submenu order
		return $menu_order;

	}

	/**
	 * Creates the dashboard page
	 *
	 * @since 	 1.1.0
	 * @return 	 void
	 */
	public function page_dashboard() {

		include( plugin_dir_path( __FILE__ ) . 'partials/minitek-slider-admin-page-dashboard.php' );

	}

	/**
	 * Create a new custom post type (mslider) - Master.
	 *
	 * @since 	 1.0.1
	 */
	public static function mslider_register_post_type() {

		$cap_type = 'post';
		$global_name = 'Minitek Slider';
		$plural = 'Sliders';
		$single = 'Slider';
		$post_name = 'mslider';

		$opts['description'] = '';
		$opts['public'] = FALSE;
		$opts['exclude_from_search'] = TRUE;
		$opts['publicly_querable'] = FALSE;
		$opts['show_ui'] = TRUE;
		$opts['show_in_nav_menu'] = FALSE;
		$opts['show_in_menu'] = TRUE;
		$opts['show_in_admin_bar'] = TRUE;
		$opts['menu_position'] = 25;
		$opts['menu_icon'] = 'dashicons-admin-generic';
		$opts['capability_type'] = $cap_type;
		$opts['map_meta_cap'] = TRUE;
		$opts['hierarchical'] = FALSE;
		$opts['supports'] = array( 'title' );
		$opts['register_meta_box_cb'] = '';
		$opts['taxonomies'] = array();
		$opts['has_archive'] = FALSE;
		$opts['rewrite'] = FALSE;
		$opts['query_var'] = FALSE;
		$opts['can_export'] = FALSE;

		// Capabilities
		$opts['capabilities']['delete_others_posts'] = "delete_others_{$cap_type}s";
		$opts['capabilities']['delete_post'] = "delete_{$cap_type}";
		$opts['capabilities']['delete_posts'] = "delete_{$cap_type}s";
		$opts['capabilities']['delete_private_posts']	= "delete_private_{$cap_type}s";
		$opts['capabilities']['delete_published_posts']	= "delete_published_{$cap_type}s";
		$opts['capabilities']['edit_others_posts'] = "edit_others_{$cap_type}s";
		$opts['capabilities']['edit_post'] = "edit_{$cap_type}";
		$opts['capabilities']['edit_posts'] = "edit_{$cap_type}s";
		$opts['capabilities']['edit_private_posts'] = "edit_private_{$cap_type}s";
		$opts['capabilities']['edit_published_posts']	= "edit_published_{$cap_type}s";
		$opts['capabilities']['publish_posts'] = "publish_{$cap_type}s";
		$opts['capabilities']['read_post'] = "read_{$cap_type}";
		$opts['capabilities']['read_private_posts'] = "read_private_{$cap_type}s";

		// Labels
		$opts['labels']['add_new'] = esc_html__( "Add New {$single}", 'minitek-slider' );
		$opts['labels']['add_new_item'] = esc_html__( "Add New {$single}", 'minitek-slider' );
		$opts['labels']['all_items'] = esc_html__( $plural, 'minitek-slider' );
		$opts['labels']['edit_item'] = esc_html__( "Edit {$single}" , 'minitek-slider' );
		$opts['labels']['menu_name'] = esc_html__( $global_name, 'minitek-slider' );
		$opts['labels']['name'] = esc_html__( $plural, 'minitek-slider' );
		$opts['labels']['name_admin_bar'] = esc_html__( $single, 'minitek-slider' );
		$opts['labels']['new_item'] = esc_html__( "New {$single}", 'minitek-slider' );
		$opts['labels']['not_found'] = esc_html__( "No {$plural} Found", 'minitek-slider' );
		$opts['labels']['not_found_in_trash'] = esc_html__( "No {$plural} Found in Trash", 'minitek-slider' );
		$opts['labels']['parent_item_colon'] = esc_html__( "Parent {$plural} :", 'minitek-slider' );
		$opts['labels']['search_items'] = esc_html__( "Search {$plural}", 'minitek-slider' );
		$opts['labels']['singular_name'] = esc_html__( $single, 'minitek-slider' );
		$opts['labels']['view_item'] = esc_html__( "View {$single}", 'minitek-slider' );

		$opts = apply_filters( 'mslider-options', $opts );

		register_post_type( strtolower( $post_name ), $opts );

	}

	/**
	 * Add a shortcode column in the Slider list.
	 *
	 * @since 	 1.0.1
	 */
	public function mslider_add_shortcode_column( $columns ) {

		return array_merge( $columns, array( 'shortcode' => __( 'Shortcode', 'minitek-slider' ) ) );

	}

	/**
	 * Display the shortcode column in the Slider list.
	 *
	 * @since 	 1.0.1
	 */
	public function mslider_posts_shortcode_display( $column, $post_id ) {

		if ($column == 'shortcode')
		{
			?><input type="text" onClick="this.select();" value="[mslider <?php echo 'id=&quot;'.$post_id.'&quot;';?>]" /><?php
		}

	}

}
