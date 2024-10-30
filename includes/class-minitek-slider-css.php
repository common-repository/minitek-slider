<?php

/**
 * CSS class
 *
 * @since      1.0.1
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/includes
 */

class MSlider_CSS {

	/**
	 * Constructor
	 */
	public function __construct() {

		// Nothing to see here...

	} // __construct()

	/**
	 * Creates inline css for responsive layout.
	 *
	 * @since    1.0.1
	 */
	public function loadResponsiveCss($slider_options, $slider_id) {

		$slider = 'mslider_'.$slider_id;

		$css = '';

		// Large screen
		$responsive_lg_num = (int)$slider_options['slider-l-items'][0];
		$responsive_lg_width = number_format((float)(100 / $responsive_lg_num), 4, '.', '');
		$responsive_lg = (int)$slider_options['slider-l-size'][0];
		$responsive_lg_min = $responsive_lg - 1;
		$responsive_lg_db = $slider_options['slider-l-db'][0];
		$responsive_lg_db_title = $slider_options['slider-l-db-title'][0];
		$responsive_lg_min_height = isset($slider_options['slider-l-min-height'][0]) ? (int) $slider_options['slider-l-min-height'][0] : '400';

		$css .= '@media only screen and (min-width:'.$responsive_lg.'px)
		{
			#'.$slider.' .mslider-item {
				width: '.$responsive_lg_width.'%;
			}
			#'.$slider.' .mslider-photo-link img {
				min-height: '.$responsive_lg_min_height.'px;
			}
		}';

		if ($responsive_lg_db == 'no')
		{
			$css .= '@media only screen and (min-width:'.$responsive_lg.'px)
			{
				#'.$slider.' .mslider-detail-box {
					display: none;
				}
			}';
		}

		if ($responsive_lg_db_title == 'yes')
		{
			$css .= '@media only screen and (min-width:'.$responsive_lg.'px)
			{
				#'.$slider.' .mslider-date,
				#'.$slider.' .mslider-item-info,
				#'.$slider.' .mslider-desc,
				#'.$slider.' .mslider-price,
				#'.$slider.' .mslider-hits,
				#'.$slider.' .mslider-count,
				#'.$slider.' .mslider-readmore {
					display: none;
				}
			}';
		}

		// Medium screen
		$responsive_md_num = (int)$slider_options['slider-m-items'][0];
		$responsive_md_width = number_format((float)(100 / $responsive_md_num), 4, '.', '');
		$responsive_md = (int)$slider_options['slider-m-size'][0];
		$responsive_md_min = $responsive_md - 1;
		$responsive_md_db = $slider_options['slider-m-db'][0];
		$responsive_md_db_title = $slider_options['slider-m-db-title'][0];
		$responsive_md_min_height = isset($slider_options['slider-m-min-height'][0]) ? (int) $slider_options['slider-m-min-height'][0] : '400';

		$css .= '@media only screen and (min-width:'.$responsive_md.'px) and (max-width:'.$responsive_lg_min.'px)
		{
			#'.$slider.' .mslider-item {
				width: '.$responsive_md_width.'%;
			}
			#'.$slider.' .mslider-photo-link img {
				min-height: '.$responsive_md_min_height.'px;
			}
		}';

		if ($responsive_md_db == 'no')
		{
			$css .= '@media only screen and (min-width:'.$responsive_md.'px) and (max-width:'.$responsive_lg_min.'px)
			{
				#'.$slider.' .mslider-detail-box {
					display: none;
				}
			}';
		}

		if ($responsive_md_db_title == 'yes')
		{
			$css .= '@media only screen and (min-width:'.$responsive_md.'px) and (max-width:'.$responsive_lg_min.'px)
			{
				#'.$slider.' .mslider-date,
				#'.$slider.' .mslider-item-info,
				#'.$slider.' .mslider-desc,
				#'.$slider.' .mslider-price,
				#'.$slider.' .mslider-hits,
				#'.$slider.' .mslider-count,
				#'.$slider.' .mslider-readmore {
					display: none;
				}
			}';
		}

		// Small screen
		$responsive_sm_num = (int)$slider_options['slider-s-items'][0];
		$responsive_sm_width = number_format((float)(100 / $responsive_sm_num), 4, '.', '');
		$responsive_sm = (int)$slider_options['slider-s-size'][0];
		$responsive_sm_min = $responsive_sm - 1;
		$responsive_sm_db = $slider_options['slider-s-db'][0];
		$responsive_sm_db_title = $slider_options['slider-s-db-title'][0];
		$responsive_sm_min_height = isset($slider_options['slider-s-min-height'][0]) ? (int) $slider_options['slider-s-min-height'][0] : '400';

		$css .= '@media only screen and (min-width:'.$responsive_sm.'px) and (max-width:'.$responsive_md_min.'px)
		{
			#'.$slider.' .mslider-item {
				width: '.$responsive_sm_width.'%;
			}
			#'.$slider.' .mslider-photo-link img {
				min-height: '.$responsive_sm_min_height.'px;
			}
		}';

		if ($responsive_sm_db == 'no')
		{
			$css .= '@media only screen and (min-width:'.$responsive_sm.'px) and (max-width:'.$responsive_md_min.'px)
			{
				#'.$slider.' .mslider-detail-box {
					display: none;
				}
			}';
		}

		if ($responsive_sm_db_title == 'yes')
		{
			$css .= '@media only screen and (min-width:'.$responsive_sm.'px) and (max-width:'.$responsive_md_min.'px)
			{
				#'.$slider.' .mslider-date,
				#'.$slider.' .mslider-item-info,
				#'.$slider.' .mslider-desc,
				#'.$slider.' .mslider-price,
				#'.$slider.' .mslider-hits,
				#'.$slider.' .mslider-count,
				#'.$slider.' .mslider-readmore {
					display: none;
				}
			}';
		}

		// Extra small screen
		$responsive_xs_num = (int)$slider_options['slider-xs-items'][0];
		$responsive_xs_width = number_format((float)(100 / $responsive_xs_num), 4, '.', '');
		$responsive_xs = (int)$slider_options['slider-xs-size'][0];
		$responsive_xs_min = $responsive_xs - 1;
		$responsive_xs_db = $slider_options['slider-xs-db'][0];
		$responsive_xs_db_title = $slider_options['slider-xs-db-title'][0];
		$responsive_xs_min_height = isset($slider_options['slider-xs-min-height'][0]) ? (int) $slider_options['slider-xs-min-height'][0] : '350';

		$css .= '@media only screen and (min-width:'.$responsive_xs.'px) and (max-width:'.$responsive_sm_min.'px)
		{
			#'.$slider.' .mslider-item {
				width: '.$responsive_xs_width.'%;
			}
			#'.$slider.' .mslider-photo-link img {
				min-height: '.$responsive_xs_min_height.'px;
			}
		}';

		if ($responsive_xs_db == 'no')
		{
			$css .= '@media only screen and (min-width:'.$responsive_xs.'px) and (max-width:'.$responsive_sm_min.'px)
			{
				#'.$slider.' .mslider-detail-box {
					display: none;
				}
			}';
		}

		if ($responsive_xs_db_title == 'yes')
		{
			$css .= '@media only screen and (min-width:'.$responsive_xs.'px) and (max-width:'.$responsive_sm_min.'px)
			{
				#'.$slider.' .mslider-date,
				#'.$slider.' .mslider-item-info,
				#'.$slider.' .mslider-desc,
				#'.$slider.' .mslider-price,
				#'.$slider.' .mslider-hits,
				#'.$slider.' .mslider-count,
				#'.$slider.' .mslider-readmore {
					display: none;
				}
			}';
		}

		// Extra extra small screen
		$responsive_xxs_num = (int)$slider_options['slider-xxs-items'][0];
		$responsive_xxs_width = number_format((float)(100 / $responsive_xxs_num), 4, '.', '');
		$responsive_xxs_db = $slider_options['slider-xxs-db'][0];
		$responsive_xxs_db_title = $slider_options['slider-xxs-db-title'][0];
		$responsive_xxs_min_height = isset($slider_options['slider-xxs-min-height'][0]) ? (int) $slider_options['slider-xxs-min-height'][0] : '350';

		$css .= '@media only screen and (max-width:'.$responsive_xs_min.'px)
		{
			#'.$slider.' .mslider-item {
				width: '.$responsive_xxs_width.'%;
			}
			#'.$slider.' .mslider-photo-link img {
				min-height: '.$responsive_xxs_min_height.'px;
			}
		}';

		if ($responsive_xxs_db == 'no')
		{
			$css .= '@media only screen and (max-width:'.$responsive_xs_min.'px)
			{
				#'.$slider.' .mslider-detail-box {
					display: none;
				}
			}';
		}

		if ($responsive_xxs_db_title == 'yes')
		{
			$css .= '@media only screen and (max-width:'.$responsive_xs_min.'px)
			{
				#'.$slider.' .mslider-date,
				#'.$slider.' .mslider-item-info,
				#'.$slider.' .mslider-desc,
				#'.$slider.' .mslider-price,
				#'.$slider.' .mslider-hits,
				#'.$slider.' .mslider-count,
				#'.$slider.' .mslider-readmore {
					display: none;
				}
			}';
		}

		return $css;

	}

	/**
	 * Creates dynamic inline css.
	 *
	 * @since    1.0.1
	 */
	public function loadDynamicCss($slider_options, $slider_id) {

		$slider_wrapper = 'mslider_wrapper_'.$slider_id;
		$slider = 'mslider_'.$slider_id;
		$utilities = new MSlider_Utilities();
		$css = '';

		// Container background color
		if ($container_bg = $slider_options['slider-bg-color'][0])
		{
			$css .= '
				#'.$slider_wrapper.' {
					background-color: '.$container_bg.';
				}
			';
		}

		// Container background image
		if ($container_image = $slider_options['slider-bg-image'][0])
		{
			$css .= '
				#'.$slider_wrapper.' {
					background-image: url("'.wp_get_attachment_image_src($container_image, 'full')[0].'");
					background-size: cover;
				}
			';
		}

		// Fullscreen background color
		if ($fullscreen_bg = $slider_options['slider-fs-color'][0])
		{
			$css .= '
				#'.$slider_wrapper.'.is-fullscreen {
					background-color: '.$fullscreen_bg.';
				}
			';
		}

		// Fullscreen background image
		if ($fullscreen_image = $slider_options['slider-fs-image'][0])
		{
			$css .= '
				#'.$slider_wrapper.'.is-fullscreen {
					background-image: url("'.wp_get_attachment_image_src($fullscreen_image, 'full')[0].'");
					background-size: cover;
				}
			';
		}

		// Detail box border-radius
		if ($border_radius = (int)$slider_options['slider-border-radius'][0])
		{
			$css .= '
				#'.$slider.'.mslider-image-slider .mslider-detail-box,
				#'.$slider.'.mslider-media-slider .mslider-detail-box {
					border-radius: '.$border_radius.'px;
				}
			';
		}

		// Detail box text color
		if ($slider_options['slider-detail-box-text-color'][0] == 'light-text')
			$db_color = '255,255,255';
		else if ($slider_options['slider-detail-box-text-color'][0] == 'dark-text')
			$db_color = '0,0,0';
		else 
			$db_color = $utilities->hex2RGB($slider_options['slider-detail-box-text-color'][0], true);

		$css .= '
		#'.$slider.' .mslider-detail-box h3.mslider-title a,
		#'.$slider.' .mslider-detail-box h3.mslider-title span {
			color: rgba('.$db_color.', 0.9);
		}

		#'.$slider.' .mslider-detail-box h3.mslider-title a:hover,
		#'.$slider.' .mslider-detail-box h3.mslider-title a:focus {
			color: rgba('.$db_color.', 1);
		}

		#'.$slider.' .mslider-detail-box .mslider-item-info {
			color: rgba('.$db_color.', 0.7);
		}

		#'.$slider.' .mslider-detail-box .mslider-item-info a,
		#'.$slider.' .mslider-detail-box .mslider-count a {
			color: rgba('.$db_color.', 0.8);
		}

		#'.$slider.' .mslider-detail-box .mslider-item-info a:hover,
		#'.$slider.' .mslider-detail-box .mslider-item-info a:focus,
		#'.$slider.' .mslider-detail-box .mslider-count a:hover,
		#'.$slider.' .mslider-detail-box .mslider-count a:focus {
			color: rgba('.$db_color.', 1);
			border-bottom: 1px dotted rgba('.$db_color.', 0.8);
		}

		#'.$slider.' .mslider-detail-box .mslider-desc,
		#'.$slider.' .mslider-detail-box .mslider-hits,
		#'.$slider.' .mslider-detail-box .mslider-price,
		#'.$slider.' .mslider-detail-box .mslider-count {
			color: rgba('.$db_color.', 0.8);
		}

		#'.$slider.' .mslider-detail-box .mslider-date {
			color: rgba('.$db_color.', 0.7);
		}

		#'.$slider.' .mslider-detail-box .mslider-readmore a {
			color: rgba('.$db_color.', 0.7);
			border: 1px solid rgba('.$db_color.', 0.7);
		}

		#'.$slider.' .mslider-detail-box .mslider-readmore a:hover,
		#'.$slider.' .mslider-detail-box .mslider-readmore a:focus {
			color: rgba('.$db_color.', 1);
			border: 1px solid rgba('.$db_color.', 1);
		}';

		// Hover box color
		if ($slider_options['slider-hover-box-text-color'][0] == 'light-text')
			$hb_color = '255,255,255';
		else if ($slider_options['slider-hover-box-text-color'][0] == 'dark-text')
			$hb_color = '0,0,0';
		else 
			$hb_color = $utilities->hex2RGB($slider_options['slider-hover-box-text-color'][0], true);

		$css .= '
		#'.$slider.' .mslider-hover-box h3.mslider-title a,
		#'.$slider.' .mslider-hover-box h3.mslider-title span {
			color: rgba('.$hb_color.', 0.9);
		}

		#'.$slider.' .mslider-hover-box h3.mslider-title a:hover,
		#'.$slider.' .mslider-hover-box h3.mslider-title a:focus {
			color: rgba('.$hb_color.', 1);
		}

		#'.$slider.' .mslider-hover-box .mslider-item-info {
			color: rgba('.$hb_color.', 0.7);
		}

		#'.$slider.' .mslider-hover-box .mslider-item-info a,
		#'.$slider.' .mslider-hover-box .mslider-count a {
			color: rgba('.$hb_color.', 0.8);
		}

		#'.$slider.' .mslider-hover-box .mslider-item-info a:hover,
		#'.$slider.' .mslider-hover-box .mslider-item-info a:focus,
		#'.$slider.' .mslider-hover-box .mslider-count a:hover,
		#'.$slider.' .mslider-hover-box .mslider-count a:focus {
			color: rgba('.$hb_color.', 1);
			border-bottom: 1px dotted rgba('.$hb_color.', 0.8);
		}

		#'.$slider.' .mslider-hover-box .mslider-desc,
		#'.$slider.' .mslider-hover-box .mslider-hits,
		#'.$slider.' .mslider-hover-box .mslider-price,
		#'.$slider.' .mslider-hover-box .mslider-count {
			color: rgba('.$hb_color.', 0.8);
		}

		#'.$slider.' .mslider-hover-box .mslider-date {
			color: rgba('.$hb_color.', 0.7);
		}

		#'.$slider.' .mslider-hover-box .mslider-readmore a {
			color: rgba('.$hb_color.', 0.7);
			border: 1px solid rgba('.$hb_color.', 0.7);
		}

		#'.$slider.' .mslider-hover-box .mslider-readmore a:hover,
		#'.$slider.' .mslider-hover-box .mslider-readmore a:focus {
			color: rgba('.$hb_color.', 1);
			border: 1px solid rgba('.$hb_color.', 1);
		}';

		// Arrows / Fullscreen button color
		$arrows_color = $slider_options['slider-arrows-color'][0];
		$css .= '
			#'.$slider.' .flickity-prev-next-button,
			#'.$slider.' .flickity-fullscreen-button {
				color: '.$arrows_color.';
			}
		';

		// Bullets color
		$bullets_color = $slider_options['slider-bullets-color'][0];
		$css .= '
			#'.$slider.' .flickity-page-dots .dot {
				background: '.$bullets_color.';
			}
		';

		// Progress bar color
		$progressbar_color = $slider_options['slider-progress-bar-color'][0];
		$css .= '
			#mslider_progressbar_'.$slider_id.' {
				background: '.$progressbar_color.';
			}
		';

		return $css;

	}

} // class