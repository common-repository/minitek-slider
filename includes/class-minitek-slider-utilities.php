<?php

/**
 * Utilities class
 *
 * @since      1.0.1
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/includes
 */

class MSlider_Utilities {

	/**
	 * Constructor
	 */
	public function __construct() {

		// Nothing to see here...

	} // __construct()

	/**
	 * Converts hexadecimal color codes to RGB.
	 *
	 * @since    1.0.1
	 */
	public function hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {

		$hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr);
		$rgbArray = array();

		if (strlen($hexStr) == 6)
		{
			$colorVal = hexdec($hexStr);
			$rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
			$rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
			$rgbArray['blue'] = 0xFF & $colorVal;
		}
		elseif (strlen($hexStr) == 3)
		{
			$rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
			$rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
			$rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
		}
		else
			return false;

		return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray;

	}

	/**
	 * Array_unique for multi-dimensional arrays
	 * with fallback for simple arrays
	 *
	 * @since    1.0.1
	 */
	public function unique_multidim_array($array, $key) {

		$temp_array = array();
		$key_array = array();

		foreach ($array as $val)
		{
			// For products
			if (isset($val->$key))
			{
				if (!in_array($val->$key, $key_array))
				{
					$key_array[] = $val->$key;
					$temp_array[] = $val->$key;
				}
			}
			// For posts
			else
				$temp_array[] = $val;
		}

		if (!empty($temp_array))
			return array_unique($temp_array);
		else
			return array_unique($array);

	}

	/**
	 * Finds image in text.
	 *
	 * @since    1.0.1
	 */
	public function slider_post_inline_image($text) {

		$text_temp = strip_tags($text, '<img>');
		preg_match('/<img[^>]+>/i', $text_temp, $new_image);
		$src = false;

		if ($new_image && function_exists('mb_convert_encoding'))
		{
			$new_image[0] = mb_convert_encoding($new_image[0], 'HTML-ENTITIES', 'UTF-8');
			$doc = new DOMDocument();
			$doc->loadHTML($new_image[0]);
			$xpath = new DOMXPath($doc);
			$src = $xpath->evaluate("string(//img/@src)");
		}

		return $src;

	}

} // class
