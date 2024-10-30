<?php
/**
 * The metabox-specific functionality of the plugin.
 *
 * @since      	1.0.1
 * @package     Minitek-Slider
 * @subpackage 	Minitek-Slider/admin
 */

class MSlider_Admin_Metaboxes {

	/**
	 * The ID of this plugin.
	 *
	 * @since 		1.0.1
	 * @access 		private
	 * @var         string 			$plugin_name 		The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since 		1.0.1
	 * @access 		private
	 * @var         string 			$version 			The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 		1.0.1
	 * @param 		string 			$plugin_name 		The name of this plugin.
	 * @param 		string 			$version 			The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );

	}

	/**
	 * Includes the JavaScript necessary to control the toggling of the tabs in the
	 * meta box that's represented by this class.
	 *
	 * @since    	1.0.1
	 */
	public function enqueue_admin_scripts() {

		if ( 'mslider' === get_current_screen()->id ) {

			wp_enqueue_script(
				$this->plugin_name . '-tabs',
				plugins_url( 'minitek-slider/admin/js/minitek-slider-admin-tabs.js' ),
				array( 'jquery' ),
				$this->version
			);

		}

	}

	/**
	 * Meta box setup function for mslider.
	 *
	 * @since 		1.0.1
	 */
	public function mslider_meta_boxes_setup() {

		/* Add meta boxes on the 'add_meta_boxes' hook. */
		add_action( 'add_meta_boxes', array( $this, 'mslider_add_meta' ) );

		/* Save post meta on the 'save_post' hook. */
		add_action( 'save_post', array( $this, 'mslider_save_meta' ) );

	}

	/**
	 * Create one or more meta boxes to be displayed on the post editor screen - mslider
	 *
	 * @since 		1.0.1
	 */
	public function mslider_add_meta() {

		add_meta_box(
			'mslider_options',
			apply_filters( $this->plugin_name . '-metabox-title-slider-options', esc_html__( 'Slider Options', 'minitek-slider' ) ),
			array( $this, 'mslider_metabox'),
			'mslider', // post type
			'normal',
			'default',
			array(
				'file' => 'slider-options'
			)
		);

	}

	/**
	 * Calls a metabox file specified in the add_meta_box args - mslider
	 *
	 * @since 		1.0.1
	 * @return      void
	 */
	public function mslider_metabox( $post, $params ) {

		if ( ! is_admin() ) { return; }

		if ( 'mslider' !== $post->post_type ) { return; }

		if ( ! empty( $params['args']['classes'] ) ) {

			$classes = 'repeater ' . $params['args']['classes'];

		}

		include( plugin_dir_path( __FILE__ ) . 'partials/metabox/minitek-slider-admin-metabox-' . $params['args']['file'] . '-tabs.php' );
		include( plugin_dir_path( __FILE__ ) . 'partials/metabox/minitek-slider-admin-metabox-' . $params['args']['file'] . '.php' );

	}

	/**
	 * Check each nonce. If any don't verify, $nonce_check is increased.
	 * If all nonces verify, returns 0.
	 *
	 * @since 		1.0.1
	 * @access 		public
	 * @return 		int 		The value of $nonce_check
	 */
	private function check_nonces( $posted, $type ) {

		$nonces = array();
		$nonce_check = 0;
		$nonces[] = $type.'_options';

		foreach ( $nonces as $nonce ) {

			if ( ! isset( $posted[$nonce] ) ) { $nonce_check++; }
			if ( isset( $posted[$nonce] ) && ! wp_verify_nonce( $posted[$nonce], $this->plugin_name ) ) { $nonce_check++; }

		}

		return $nonce_check;

	}

	/**
	 * Returns an array of the all the metabox fields and their respective types - mslider
	 *
	 * @since 		1.0.1
	 * @access 		public
	 * @return 		array 		Metabox fields and types
	 */
	private function mslider_get_metabox_fields() {

		$fields = array();

		// General settings
		$fields[] = array( 'slider-class', 'text' );
		$fields[] = array( 'slider-font-awesome', 'select' );

		// Data source
		$fields[] = array( 'slider-post-type', 'radio' );
		$fields[] = array( 'slider-category-filtering-type', 'radio' );
		$fields[] = array( 'slider-categories', 'select' );
		$fields[] = array( 'slider-include-children', 'radio' );
		$fields[] = array( 'slider-tag-filtering-type', 'radio' );
		$fields[] = array( 'slider-tags', 'select' );
		$fields[] = array( 'slider-include-posts', 'textarea' );
		$fields[] = array( 'slider-author-filtering-type', 'radio' );
		$fields[] = array( 'slider-authors', 'select' );
		$fields[] = array( 'slider-exclude-posts', 'textarea' );
		$fields[] = array( 'slider-offset', 'text' );
		$fields[] = array( 'slider-keywords', 'textarea' );
		$fields[] = array( 'slider-posts-ordering', 'select' );
		$fields[] = array( 'slider-posts-ordering-direction', 'radio' );

		// Layout
		$fields[] = array( 'slider-theme', 'radio' );
		$fields[] = array( 'slider-bg-color', 'color' );
		$fields[] = array( 'slider-bg-image', 'text' );
		$fields[] = array( 'slider-fs', 'radio' );
		$fields[] = array( 'slider-fs-color', 'color' );
		$fields[] = array( 'slider-fs-image', 'text' );
		$fields[] = array( 'slider-padding', 'text' );
		$fields[] = array( 'slider-spacing', 'text' );
		$fields[] = array( 'slider-border-radius', 'text' );
		$fields[] = array( 'slider-border-size', 'text' );
		$fields[] = array( 'slider-border-color', 'color' );
		$fields[] = array( 'slider-align', 'select' );
		$fields[] = array( 'slider-rtl', 'radio' );

		// Images
		$fields[] = array( 'slider-show-images', 'radio' );
		$fields[] = array( 'slider-image-link', 'radio' );
		$fields[] = array( 'slider-image-type', 'radio' );

		// Detail box
		$fields[] = array( 'slider-detail-box', 'radio' );
		$fields[] = array( 'slider-detail-box-bg-color', 'color' );
		$fields[] = array( 'slider-detail-box-opacity', 'text' );
		$fields[] = array( 'slider-detail-box-text-color', 'radio' );
		$fields[] = array( 'slider-detail-box-title', 'radio' );
		$fields[] = array( 'slider-detail-box-title-limit', 'text' );
		$fields[] = array( 'slider-detail-box-title-link', 'radio' );
		$fields[] = array( 'slider-detail-box-introtext', 'radio' );
		$fields[] = array( 'slider-detail-box-introtext-limit', 'text' );
		$fields[] = array( 'slider-detail-box-strip-html', 'radio' );
		$fields[] = array( 'slider-detail-box-date', 'radio' );
		$fields[] = array( 'slider-detail-box-date-format', 'text' );
		$fields[] = array( 'slider-detail-box-category', 'radio' );
		$fields[] = array( 'slider-detail-box-tags', 'radio' );
		$fields[] = array( 'slider-detail-box-author', 'radio' );
		$fields[] = array( 'slider-detail-box-comments', 'radio' );
		$fields[] = array( 'slider-detail-box-readmore', 'radio' );

		// Hover box
		$fields[] = array( 'slider-hover-box', 'radio' );
		$fields[] = array( 'slider-hover-box-bg-color', 'color' );
		$fields[] = array( 'slider-hover-box-opacity', 'text' );
		$fields[] = array( 'slider-hover-box-text-color', 'radio' );
		$fields[] = array( 'slider-hover-box-effect', 'radio' );
		$fields[] = array( 'slider-hover-box-speed', 'text' );
		$fields[] = array( 'slider-hover-box-easing', 'radio' );
		$fields[] = array( 'slider-hover-box-title', 'radio' );
		$fields[] = array( 'slider-hover-box-title-limit', 'text' );
		$fields[] = array( 'slider-hover-box-introtext', 'radio' );
		$fields[] = array( 'slider-hover-box-introtext-limit', 'text' );
		$fields[] = array( 'slider-hover-box-strip-html', 'text' );
		$fields[] = array( 'slider-hover-box-date', 'text' );
		$fields[] = array( 'slider-hover-box-date-format', 'text' );
		$fields[] = array( 'slider-hover-box-category', 'text' );
		$fields[] = array( 'slider-hover-box-tags', 'text' );
		$fields[] = array( 'slider-hover-box-author', 'text' );
		$fields[] = array( 'slider-hover-box-comments', 'text' );
		$fields[] = array( 'slider-hover-box-link', 'radio' );

		// Navigation
		$fields[] = array( 'slider-total-items', 'text' );
		$fields[] = array( 'slider-navigation-arrows', 'radio' );
		$fields[] = array( 'slider-overlay-arrows', 'radio' );
		$fields[] = array( 'slider-arrows-color', 'color' );
		$fields[] = array( 'slider-pagination-bullets', 'radio' );
		$fields[] = array( 'slider-bullets-style', 'select' );
		$fields[] = array( 'slider-bullets-color', 'color' );
		$fields[] = array( 'slider-progress-bar', 'radio' );
		$fields[] = array( 'slider-progress-bar-color', 'color' );

		// Effects
		$fields[] = array( 'slider-drag', 'radio' );
		$fields[] = array( 'slider-drag-threshold', 'text' );
		$fields[] = array( 'slider-selected-attraction', 'text' );
		$fields[] = array( 'slider-friction', 'text' );
		$fields[] = array( 'slider-free-scroll', 'radio' );
		$fields[] = array( 'slider-free-scroll-friction', 'text' );
		$fields[] = array( 'slider-rewind', 'radio' );
		$fields[] = array( 'slider-contain', 'radio' );
		$fields[] = array( 'slider-adaptive-height', 'radio' );

		// Responsive levels
		$fields[] = array( 'slider-l-size', 'text' );
		$fields[] = array( 'slider-l-items', 'text' );
		$fields[] = array( 'slider-l-db', 'radio' );
		$fields[] = array( 'slider-l-db-title', 'radio' );
		$fields[] = array( 'slider-l-min-height', 'text' );
		$fields[] = array( 'slider-m-size', 'text' );
		$fields[] = array( 'slider-m-items', 'text' );
		$fields[] = array( 'slider-m-db', 'radio' );
		$fields[] = array( 'slider-m-db-title', 'radio' );
		$fields[] = array( 'slider-m-min-height', 'text' );
		$fields[] = array( 'slider-s-size', 'text' );
		$fields[] = array( 'slider-s-items', 'text' );
		$fields[] = array( 'slider-s-db', 'radio' );
		$fields[] = array( 'slider-s-db-title', 'radio' );
		$fields[] = array( 'slider-s-min-height', 'text' );
		$fields[] = array( 'slider-xs-size', 'text' );
		$fields[] = array( 'slider-xs-items', 'text' );
		$fields[] = array( 'slider-xs-db', 'radio' );
		$fields[] = array( 'slider-xs-db-title', 'radio' );
		$fields[] = array( 'slider-xs-min-height', 'text' );
		$fields[] = array( 'slider-xxs-items', 'text' );
		$fields[] = array( 'slider-xxs-db', 'radio' );
		$fields[] = array( 'slider-xxs-db-title', 'radio' );
		$fields[] = array( 'slider-xxs-min-height', 'text' );

		return $fields;

	}

	/**
	 * Sanitizes input.
	 *
	 * @since 		1.0.1
	 * @access 		public
	 * @return 		array 		Metabox fields and types
	 */
	private function sanitizer( $type, $data ) {

		if ( empty( $type ) ) { return; }
		if ( empty( $data ) ) { return; }

		$return = '';
		$sanitizer = new MSlider_Sanitize();

		$sanitizer->set_data( $data );
		$sanitizer->set_type( $type );

		$return = $sanitizer->clean();

		unset( $sanitizer );

		return $return;

	}

	/**
	 * Saves metabox data - mslider
	 *
	 * @since 		1.0.1
	 * @access 		public
	 * @param 		int 		$post_id 		The post ID
	 * @param 		object 		$object 		The post object
	 * @return 		void
	 */
	public function mslider_save_meta( $post_id, $object = null) {

		//wp_die( '<pre>' . print_r( $_POST ) . '</pre>' );

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return $post_id; }
		if ( ! current_user_can( 'edit_post', $post_id ) ) { return $post_id; }

    	if (!isset($_POST['post_type'])) { return; }

		$safe_post_type = $this->sanitizer( 'text', $_POST['post_type'] );
		if ( $safe_post_type !== 'mslider' ) { return $post_id; }

		$nonce_check = $this->check_nonces( $_POST, $type = 'slider' );

		if ( 0 < $nonce_check ) { return $post_id; }

		$metas = $this->mslider_get_metabox_fields();

		foreach ( $metas as $meta ) {

			$name = $this->sanitizer( 'text', $meta[0] );
			$type = $meta[1];

			if (is_array($_POST[$name])) {
				$new_value = $this->sanitizer( 'array', $_POST[$name] );
			} else {
				$new_value = $this->sanitizer( $type, $_POST[$name] );
			}

			update_post_meta( $post_id, $name, $new_value );

		} // foreach

	}

}
