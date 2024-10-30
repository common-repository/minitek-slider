<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @since       1.0.1
 * @package    	Minitek-Slider
 * @subpackage 	Minitek-Slider/public
 */

class MSlider_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since     1.0.1
	 * @access    private
	 * @var       string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since     1.0.1
	 * @access    private
	 * @var       string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since     1.0.1
	 * @param     string    $plugin_name       The name of the plugin.
	 * @param     string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		// Add shortcode
		add_shortcode('mslider', array($this, 'slider_display'));

	}

	/**
	 * Display the slider.
	 *
	 * @since     1.0.1
	 */
	public function slider_display($atts, $content = null) {

		// Slider data
		$atts = shortcode_atts(array('id' => ""), $atts, 'mslider');
		$slider_id = (int)$atts['id'];
		$slider_options = get_post_meta($slider_id, '', false);

		// Load helpers
		$dynamiccss = new MSlider_CSS();

		// Wrapper padding
		$slider_padding = (int)$slider_options['slider-padding'][0];

		if ($slider_padding)
			$padding = $slider_padding.'px';
		else
			$padding = '0 0 1px 0';

		// Slider wrapper
		$html = '<div id="mslider_wrapper_'.$slider_id.'" ';
		$html .= 'class="mslider-wrapper '.$slider_options['slider-class'][0].'" ';
		$html .= 'style="padding: '.$padding.'">';

		// Get slider content
		$html .= $this->mslider_view($atts);

		$html .= '</div>';

		// Inline css
		$custom_css = '';
		$custom_css .= $dynamiccss->loadResponsiveCss($slider_options, $slider_id);
		$custom_css .= $dynamiccss->loadDynamicCss($slider_options, $slider_id);

		// Add inline css
		wp_enqueue_style($this->plugin_name.'_custom_style', plugin_dir_url(__FILE__) . 'css/minitek-slider-public-custom.css', array(), $this->version, 'all');
		wp_add_inline_style($this->plugin_name.'_custom_style', $custom_css);

		// Font awesome
		if ($slider_options['slider-font-awesome'][0] == 'yes')
			wp_enqueue_style($this->plugin_name.'_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), $this->version, 'all');

		// Javascript variables
		$encoded_options = json_encode($slider_options);
		$mslider_ajaxurl = admin_url( 'admin-ajax.php' );

		// Main script
		$html .= '<script type="text/javascript">
			document.addEventListener("DOMContentLoaded", function() {
				Mslider.initialise(
					'.$encoded_options.', 
					\''.$slider_id.'\',
					\''.$mslider_ajaxurl.'\'
				);
			});
		</script>';

		return $html;
	}

	/**
	 * View - Creates the content.
	 *
	 * @since     1.0.1
	 */
	public function mslider_view($atts) {

		// Get ajax variables
		$safe_ajax = isset($_POST['ajax']) ? (int)$_POST['ajax'] : false;
		$ajax = ($safe_ajax == 1) ? true : false;

		if ($ajax)
		{
			$slider_id = (int)$_POST['sliderid'];
			$page_number = (int)$_POST['sliderpage'];
			$type = $_POST['type'];
		}
		else
		{
			$atts = shortcode_atts(array('id' => ""), $atts, 'mslider');
			$slider_id = (int)$atts['id'];
			$page_number = 1;
			$type = 'slider';
		}

		$slider_options = get_post_meta($slider_id, '', false);
		$post_type = $slider_options['slider-post-type'][0];
		$utilities = new MSlider_Utilities();
		$datasource = new MSlider_Data();

		// Layout
		$slider_theme = $slider_options['slider-theme'][0];
		$slider_spacing = (int)$slider_options['slider-spacing'][0];
		$slider_border_radius = (int)$slider_options['slider-border-radius'][0];
		$slider_border_size = (int)$slider_options['slider-border-size'][0];
		$slider_border_color = $slider_options['slider-border-color'][0];

		// Images
		$slider_show_images = $slider_options['slider-show-images'][0];
		$slider_image_link = $slider_options['slider-image-link'][0];
		$slider_image_type = $slider_options['slider-image-type'][0];

		// Detail box
		$detail_box = $slider_options['slider-detail-box'][0];
		$detail_box_bg_color = $slider_options['slider-detail-box-bg-color'][0];
		$detail_box_opacity = $slider_options['slider-detail-box-opacity'][0];
		$detail_box_title = $slider_options['slider-detail-box-title'][0];
		$detail_box_title_limit = (int)$slider_options['slider-detail-box-title-limit'][0];
		$detail_box_title_link = $slider_options['slider-detail-box-title-link'][0];
		$detail_box_introtext = $slider_options['slider-detail-box-introtext'][0];
		$detail_box_introtext_limit = (int)$slider_options['slider-detail-box-introtext-limit'][0];
		$detail_box_strip_html = $slider_options['slider-detail-box-strip-html'][0];
		$detail_box_date = $slider_options['slider-detail-box-date'][0];
		$detail_box_date_format = $slider_options['slider-detail-box-date-format'][0];
		$detail_box_category = $slider_options['slider-detail-box-category'][0];
		$detail_box_tags = $slider_options['slider-detail-box-tags'][0];
		$detail_box_author = $slider_options['slider-detail-box-author'][0];
		$detail_box_comments = $slider_options['slider-detail-box-comments'][0];
		$detail_box_readmore = $slider_options['slider-detail-box-readmore'][0];

		// Detail box background
		$detail_box_bg_color = $utilities->hex2RGB($detail_box_bg_color, true);
		$detail_box_opacity = number_format((float)$detail_box_opacity, 2, '.', '');

		// Hover box
		$hover_box = $slider_options['slider-hover-box'][0];
		$hover_box_bg_color = $slider_options['slider-hover-box-bg-color'][0];
		$hover_box_opacity = $slider_options['slider-hover-box-opacity'][0];
		$hover_box_effect = $slider_options['slider-hover-box-effect'][0];
		$hover_box_speed = $slider_options['slider-hover-box-speed'][0];
		$hover_box_easing = $slider_options['slider-hover-box-easing'][0];
		$hover_box_title = $slider_options['slider-hover-box-title'][0];
		$hover_box_title_limit = (int)$slider_options['slider-hover-box-title-limit'][0];
		$hover_box_introtext = $slider_options['slider-hover-box-introtext'][0];
		$hover_box_introtext_limit = (int)$slider_options['slider-hover-box-introtext-limit'][0];
		$hover_box_strip_html = $slider_options['slider-hover-box-strip-html'][0];
		$hover_box_date = $slider_options['slider-hover-box-date'][0];
		$hover_box_date_format = $slider_options['slider-hover-box-date-format'][0];
		$hover_box_category = $slider_options['slider-hover-box-category'][0];
		$hover_box_tags = $slider_options['slider-hover-box-tags'][0];
		$hover_box_author = $slider_options['slider-hover-box-author'][0];
		$hover_box_comments = $slider_options['slider-hover-box-comments'][0];
		$hover_box_link = $slider_options['slider-hover-box-link'][0];

		// Hover box background
		$hover_background_color = $utilities->hex2RGB($hover_box_bg_color, true);
		$hover_background_opacity = number_format((float)$hover_box_opacity, 2, '.', '');

		// Hover effects
		$hoverOffset = '';
		$hoverClass = '';
		$flipBase = '';
		$perspective = '';
		$flipClass = '';

		if ($hover_box == 'yes')
		{
			if ($hover_box_effect == 'no')
				$hoverClass = 'hoverShow';
			else if ($hover_box_effect == '1')
				$hoverClass = 'hoverFadeIn';
			else if ($hover_box_effect == '2')
			{
				$flipBase = 'flipBase';
				$perspective = 'perspective';
				$flipClass = 'flipY';
			}
			else if ($hover_box_effect == '3')
			{
				$flipBase = 'flipBase';
				$perspective = 'perspective';
				$flipClass = 'flipX';
			}
			else if ($hover_box_effect == '4') {
				$hoverOffset = 'rightOffset';
				$hoverClass = 'slideInRight';
			}
			else if ($hover_box_effect == '5')
			{
				$hoverOffset = 'leftOffset';
				$hoverClass = 'slideInLeft';
			}
			else if ($hover_box_effect == '6') 
			{
				$hoverOffset = 'topOffset';
				$hoverClass = 'slideInTop';
			}
			else if ($hover_box_effect == '7')
			{
				$hoverOffset = 'bottomOffset';
				$hoverClass = 'slideInBottom';
			}
			else if ($hover_box_effect == '8')
			{
				$hoverOffset = 'zoomOffset';
				$hoverClass = 'zoomIn';
			}
		}

		// Transition styles
		$animated = '';

		if ($hover_box_effect != 'no' && $hover_box_effect != '2' && $hover_box_effect != '3')
		{
			$animated = '
			transition: all '.$hover_box_speed.'s '.$hover_box_easing.' 0s;
			-webkit-transition: all '.$hover_box_speed.'s '.$hover_box_easing.' 0s;
			-o-transition: all '.$hover_box_speed.'s '.$hover_box_easing.' 0s;
			-ms-transition: all '.$hover_box_speed.'s '.$hover_box_easing.' 0s;
			';
		}

		$animated_flip = '';

		if ($hover_box_effect == '2' || $hover_box_effect == '3')
		{
			$animated_flip = '
			transition: all '.$hover_box_speed.'s '.$hover_box_easing.' 0s;
			-webkit-transition: all '.$hover_box_speed.'s '.$hover_box_easing.' 0s;
			-o-transition: all '.$hover_box_speed.'s '.$hover_box_easing.' 0s;
			-ms-transition: all '.$hover_box_speed.'s '.$hover_box_easing.' 0s;
			';
		}

		// Query items
		if (!$queryItems = $datasource->slider_get_items($slider_options, $ajax, $page_number))
			return;
		
		// Format items
		$items = $datasource->slider_format_items($queryItems, $slider_options);

		// Get content from files
		ob_start();
		$output = '';

		if (!$ajax)
		{
			include(plugin_dir_path(__FILE__) . 'partials/minitek-slider-public-items-wrapper.php');
		}
		else
			include(plugin_dir_path(__FILE__) . 'partials/minitek-slider-public-items.php');

		$output .= ob_get_clean();

		if ($ajax)
		{
			echo $output;
			wp_die();
		}
		else
			return $output;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since     1.0.1
	 */
	public function enqueue_styles() {

		// Flickity
		wp_enqueue_style($this->plugin_name.'_flickity', plugin_dir_url(__FILE__) . 'css/flickity.css', array(), $this->version, 'all');
		wp_enqueue_style($this->plugin_name.'_flickity-fullscreen', plugin_dir_url(__FILE__) . 'css/flickity.fullscreen.css', array(), $this->version, 'all');

		// Slider
		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/minitek-slider-public.css', array(), $this->version, 'all');

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since     1.0.1
	 */
	public function enqueue_scripts() {

		// Flickity
		wp_enqueue_script($this->plugin_name.'_flickity', plugin_dir_url(__FILE__) . 'js/flickity.pkgd.min.js', array('jquery'), $this->version, false);
		wp_enqueue_script($this->plugin_name.'_imagesloaded', plugin_dir_url(__FILE__) . 'js/flickity.fullscreen.js', array('jquery'), $this->version, false);

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/minitekslider.js', array('jquery'), $this->version, false);
		
	}

}
