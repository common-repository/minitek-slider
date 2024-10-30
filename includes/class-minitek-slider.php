<?php

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.1
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/includes
 */

class MSlider {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.1
	 * @access   protected
	 * @var      MSlider_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.1
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.1
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.1
	 */
	public function __construct() {

		$this->plugin_name = 'minitek-slider';
		$this->version = '1.2.0';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();
		$this->define_metabox_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - MSlider_Loader. Orchestrates the hooks of the plugin.
	 * - MSlider_i18n. Defines internationalization functionality.
	 * - MSlider_Admin. Defines all hooks for the admin area.
	 * - MSlider_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.1
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-minitek-slider-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-minitek-slider-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-minitek-slider-admin.php';

		/**
		 * The class responsible for defining all actions relating to metaboxes.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-minitek-slider-admin-metaboxes.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-minitek-slider-public.php';

		/**
		 * The class responsible for sanitizing user input
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-minitek-slider-sanitize.php';

		/**
		 * The class that contains all utilities functions
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-minitek-slider-utilities.php';

		/**
		 * The class that creates dynamic css
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-minitek-slider-css.php';

		/**
		 * The class that contains all data source functions
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-minitek-slider-data.php';

		$this->loader = new MSlider_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the MSlider_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.1
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new MSlider_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.1
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new MSlider_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

		// mslider post type
		$this->loader->add_action( 'init', $plugin_admin, 'mslider_register_post_type' );

		// Add admin menu
		$this->loader->add_action( 'admin_menu', $plugin_admin, 'add_menu' );

		// Re-order admin menu
		$this->loader->add_filter( 'custom_menu_order', $plugin_admin, 'mslider_edit_admin_menu_order' );

		// Add shortcode column to mslider post_type
		$this->loader->add_filter( 'manage_mslider_posts_columns' , $plugin_admin, 'mslider_add_shortcode_column' );
		$this->loader->add_action( 'manage_mslider_posts_custom_column' , $plugin_admin, 'mslider_posts_shortcode_display', 10, 2 );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.1
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new MSlider_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

		// Handle ajax requests (wp_ajax_*action*)
		// Load view
		$this->loader->add_action( 'wp_ajax_mslider_view', $plugin_public, 'mslider_view' );
		$this->loader->add_action( 'wp_ajax_nopriv_mslider_view', $plugin_public, 'mslider_view' );

	}

	/**
	 * Register all of the hooks related to metaboxes.
	 *
	 * @since 	 1.0.1
	 * @access 	 private
	 */
	private function define_metabox_hooks() {

		$plugin_metaboxes = new MSlider_Admin_Metaboxes( $this->get_plugin_name(), $this->get_version() );

		/* Fire our meta box setup function on the post editor screen. */
		// mslider
		$this->loader->add_action( 'load-post.php', $plugin_metaboxes, 'mslider_meta_boxes_setup' );
		$this->loader->add_action( 'load-post-new.php', $plugin_metaboxes, 'mslider_meta_boxes_setup' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.1
	 */
	public function run() 
	{
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since    1.0.1
	 * @return   string    The name of the plugin.
	 */
	public function get_plugin_name() 
	{
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since    1.0.1
	 * @return   MSlider_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() 
	{
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since    1.0.1
	 * @return   string    The version number of the plugin.
	 */
	public function get_version() 
	{
		return $this->version;
	}

}
