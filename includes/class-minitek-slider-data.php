<?php

/**
 * Data source class
 *
 * @since      1.0.1
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/includes
 */

class MSlider_Data {

	/**
	 * Constructor
	 */
	public function __construct() {

		// Nothing to see here...

	} // __construct()

	/**
	 * Format item options.
	 *
	 * @since    1.1.0
	 */
	public function slider_format_items($queryItems, $slider_options) 
	{
		$utilities = new MSlider_Utilities();
		$post_type = $slider_options['slider-post-type'][0];
		$slider_title_limit = (int)$slider_options['slider-detail-box-title-limit'][0];
		$slider_strip_html = $slider_options['slider-detail-box-strip-html'][0];
		$slider_introtext_limit = $slider_options['slider-detail-box-introtext-limit'][0];
		$slider_date_format = $slider_options['slider-detail-box-date-format'][0];
		$slider_hover_title_limit = $slider_options['slider-hover-box-title-limit'][0];
		$slider_hover_strip_html = $slider_options['slider-hover-box-strip-html'][0];
		$slider_hover_introtext_limit = $slider_options['slider-hover-box-introtext-limit'][0];
		$slider_hover_date_format = $slider_options['slider-hover-box-date-format'][0];
		$slider_image_type = $slider_options['slider-image-type'][0];

		$detailBoxCategory = (isset($slider_options['slider-detail-box-category'][0]) && $slider_options['slider-detail-box-category'][0] == 'yes')
			? true
			: false;
		$detailBoxTags = (isset($slider_options['slider-detail-box-tags'][0]) && $slider_options['slider-detail-box-tags'][0] == 'yes')
			? true
			: false;

		foreach ($queryItems as $key => $item) 
		{
			// Trim title
			$item->short_title = wp_trim_words( $item->post_title, (int)$slider_title_limit);
			$item->hover_title = wp_trim_words( $item->post_title, (int)$slider_hover_title_limit);

			// Trim post content
			if (isset($item->post_content)) 
			{
				if ($slider_strip_html == 'yes')
				{
					$item->post_introtext = wp_trim_words( $item->post_content, $slider_introtext_limit);
				}
				else
				{
					$item->post_introtext = $item->post_content;
				}

				if ($slider_hover_strip_html == 'yes')
				{
					$item->hover_introtext = wp_trim_words( $item->post_content, $slider_hover_introtext_limit);
				}
				else
				{
					$item->hover_introtext = $item->post_content;
				}
			}

			// Format date
			if ($post_type == 'folder' || $post_type == 'rss')
			{
				$item->formatted_date = date_i18n( $slider_date_format, strtotime($item->post_date) );
				$item->hover_formatted_date = date_i18n( $slider_hover_date_format, strtotime($item->post_date) );
			}
			else 
			{
				$item->formatted_date = get_the_date( $slider_date_format, $item->ID );
				$item->hover_formatted_date = get_the_date( $slider_hover_date_format, $item->ID );
			}

			// Format comments count
			if (isset($item->comment_count))
			{
				if ($item->comment_count > 1)
				{
					$item->formatted_comments = $item->comment_count.' <span>'.__( 'comments', 'minitek-slider' ).'</span>';
				}
				else if ($item->comment_count == 1)
				{
					$item->formatted_comments = $item->comment_count.' <span>'.__( 'comment', 'minitek-slider' ).'</span>';
				}
				else
				{
					$item->formatted_comments = '<span>'.__( 'Leave a comment', 'minitek-slider' ).'</span>';
				}
			}

			// Switch post type
			switch ($post_type)
			{
				case 'post':
				case 'specific':
					$item->post_categories_raw = wp_get_post_categories( $item->ID );
					$item->post_tags_raw = wp_get_post_tags( $item->ID );
					$item->link = get_permalink($item->ID);
					$item->author_link = get_author_posts_url($item->post_author);

					break;

				case 'attachment':
					$item->post_categories_raw = wp_get_post_categories( $item->ID );
					$item->post_tags_raw = wp_get_post_tags( $item->ID );
					$item->link = false;
					$item->author_link = get_author_posts_url($item->post_author);

					break;

				case 'page':
					$item->post_categories_raw = wp_get_post_categories( $item->ID );
					$item->post_tags_raw = wp_get_post_tags( $item->ID );
					$item->link = get_permalink($item->ID);
					$item->author_link = get_author_posts_url($item->post_author);

					break;

				default:

					break;
			}

			// Item image
			if ($slider_image_type == 'featured') // Featured image
			{
				if ($post_type == 'attachment')
				{
					$featured_image = wp_get_attachment_image_src( $item->ID, 'full' );
					$item->post_image = isset($featured_image[0]) ? $featured_image[0] : false;
				}
				else
				{
					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $item->ID ), 'full' );
					$item->post_image = isset($featured_image[0]) ? $featured_image[0] : false;
				}

				if (empty($item->post_image))
				{
					$item->post_image = $utilities->slider_post_inline_image($item->post_content);
				}
			}
			else if ($slider_image_type == 'inline') // Inline image
			{
				if ($post_type == 'attachment')
				{
					$item->post_image = wp_get_attachment_image_src( $item->ID, 'full' );
				}
				else
				{
					$item->post_image = $utilities->slider_post_inline_image($item->post_content);
				}
			}

			// Categories
			if ($detailBoxCategory && isset($item->post_categories_raw) && $item->post_categories_raw)
			{
				$item->post_categories = '';

				foreach ($item->post_categories_raw as $key => $c)
				{
					$cat = get_category($c);
					$cat_link = get_category_link( $c );

					if ($cat_link) 
					{
						$item->post_categories .= '<a href="'.$cat_link.'">'.$cat->name.'</a>';
					}
					else 
					{	
						$item->post_categories .= $cat->name;
					}
					
					if ($key < (count($item->post_categories_raw) - 1))
					{
						$item->post_categories .= ', ';
					}
				}
			}

			//  Tags
			if ($detailBoxTags && isset($item->post_tags_raw) && $item->post_tags_raw)
			{
				$item->post_tags = '';

				foreach ($item->post_tags_raw as $key => $tag)
				{
					$tag_link = get_tag_link( $tag->term_id );

					if ($tag_link) 
					{
						$item->post_tags .= '<a href="'.$tag_link.'">'.$tag->name.'</a>';
					}
					else 
					{	
						$item->post_tags .= $tag->name;
					}
					
					if ($key < (count($item->post_tags_raw) - 1))
					{
						$item->post_tags .= ', ';
					}
				}
			}
		}

		return $queryItems;

	}

	/**
	 * Get items.
	 *
	 * @since    1.1.0
	 */
	public function slider_get_items($slider_options, $ajax = false, $page_number = 1) {

		$post_type = $slider_options['slider-post-type'][0];

		$items = $this->slider_query_posts($slider_options, $ajax, $page_number);

		return $items;

	}

	/**
	 * Count total items.
	 *
	 * @since    1.1.0
	 */
	public function slider_count_items($slider_options) {

		$post_type = $slider_options['slider-post-type'][0];

		$count = $this->slider_count_posts($slider_options);

		return $count;

	}

	/**
	 * Query posts.
	 *
	 * @since    1.0.1
	 */
	public function slider_query_posts($slider_options, $ajax = false, $page_number = 1) {

		$cat = '';
		$category__in = '';
		$category__not_in = '';
		$tag__in = '';
		$tag__not_in = '';
		$post_status = 'publish';

		$post_type = $slider_options['slider-post-type'][0];
		$slider_offset = (int)$slider_options['slider-offset'][0];
		$slider_total_limit = isset($slider_options['slider-total-items']) ? (int)$slider_options['slider-total-items'][0] : 8;

		$posts_per_page = $slider_total_limit;

		// Offset
		if ($post_type == 'specific') 
		{
			$offset = 0;
		}
		else
		{
			$offset = $slider_offset;
		}

		// Options - Authors
		$slider_author_filtering_type = $slider_options['slider-author-filtering-type'][0];
		$slider_authors = $slider_options['slider-authors'][0];
		$slider_authors = maybe_unserialize($slider_authors);

		if (empty($slider_authors))
		{
			$slider_authors = '';
		}

		if ($slider_author_filtering_type == 'inclusive')
		{
			$author__in = $slider_authors;
			$author__not_in = '';
		}
		else
		{
			$author__not_in = $slider_authors;
			$author__in = '';
		}

		// Options - General
		$slider_exclude_posts = $slider_options['slider-exclude-posts'][0];

		if (preg_match('/^[0-9,]+$/i', $slider_exclude_posts))
		{
			$excluded_posts = trim($slider_exclude_posts, ',');
			$excluded_posts = explode(',', $excluded_posts);
		}
		else
		{
			$excluded_posts = '';
		}

		if (!$excluded_posts)
		{
			$excluded_posts = '';
		}

		$slider_keywords = $slider_options['slider-keywords'][0];
		$slider_keywords = trim($slider_keywords, ' ');
		$slider_posts_ordering = $slider_options['slider-posts-ordering'][0];

		// Add second ordering option (date) - in case first ordering option is the same
		if ($slider_posts_ordering != 'date')
		{
			$slider_posts_ordering = $slider_posts_ordering.' date';
		}

		$slider_posts_ordering_direction = $slider_options['slider-posts-ordering-direction'][0];

		// Switch post types
		switch ($post_type)
		{
			case 'post':

				// Options - Categories
				$slider_category_filtering_type = $slider_options['slider-category-filtering-type'][0];
				$slider_include_children = $slider_options['slider-include-children'][0];

				$slider_categories = $slider_options['slider-categories'][0];
				$slider_categories = maybe_unserialize($slider_categories);

				if (empty($slider_categories))
				{
					$slider_categories = '';
				}

				// Include children
				if ($slider_include_children == 'yes')
				{
					// Inclusive
					if ($slider_category_filtering_type == 'inclusive')
					{
						// Create string of comma separated ids
						$cat = '';

						if (!empty($slider_categories))
						{
							$cat = implode(',', $slider_categories);
						}

						$category__in = '';
						$category__not_in = '';
					}
					// Exclusive
					else
					{
						// Create string of comma separated ids with hyphens
						$hyphen_categories = array();

						foreach ($slider_categories as $catid)
						{
							$hyphen_categories[] = '-'.$catid;
						}

						$cat = implode(',', $hyphen_categories);
						$category__in = '';
						$category__not_in = '';
					}
				}
				// Do not include children
				else
				{
					// Inclusive
					if ($slider_category_filtering_type == 'inclusive')
					{
						$cat = '';
						$category__in = $slider_categories;
						$category__not_in = '';
					}
					// Exclusive
					else
					{
						$cat = '';
						$category__in = '';
						$category__not_in = $slider_categories;
					}
				}

				// Options - Tags
				$slider_tag_filtering_type = $slider_options['slider-tag-filtering-type'][0];
				$slider_tags = $slider_options['slider-tags'][0];
				$slider_tags = maybe_unserialize($slider_tags);

				if (empty($slider_tags))
				{
					$slider_tags = '';
				}

				if ($slider_tag_filtering_type == 'inclusive')
				{
					$tag__in = $slider_tags;
					$tag__not_in = '';
				}
				else
				{
					$tag__not_in = $slider_tags;
					$tag__in = '';
				}

				break;

			case 'attachment':

				$post_status = 'any';

				break;

			case 'page':

				break;

			case 'specific':

				break;

			default:

				break;

		}

		if ($post_type == 'specific')
		{
			// Options - Specific posts
			$slider_include_posts = $slider_options['slider-include-posts'][0];

			if (preg_match('/^[0-9,]+$/i', $slider_include_posts))
			{
				$included_posts = trim($slider_include_posts, ',');
				$included_posts = explode(',', $included_posts);
			}
			else
			{
				$included_posts = '';
			}

			$included_posts = $included_posts ? $included_posts : '-1';

			$args = array(
				'post__in' => $included_posts,
				'ignore_sticky_posts' => true,
				'has_password' => null,
				'post_type' => 'any',
				'post_status' => array('publish', 'any'),
				'posts_per_page' => $posts_per_page,
				'offset' => $offset,
				'order' => $slider_posts_ordering_direction,
				'orderby' => $slider_posts_ordering
			);
		}
		else 
		{
			$args = array(
				'author__in' => $author__in,
				'author__not_in' => $author__not_in,
				'category__in' => $category__in,
				'category__not_in' => $category__not_in,
				'category' => $cat,
				'tag__in' => $tag__in,
				'tag__not_in' => $tag__not_in,
				's' => $slider_keywords,
				'post__not_in' => $excluded_posts,
				'ignore_sticky_posts' => true,
				'has_password' => null,
				'post_type' => $post_type,
				'post_status' => $post_status,
				'posts_per_page' => $posts_per_page,
				'offset' => $offset,
				'order' => $slider_posts_ordering_direction,
				'orderby' => $slider_posts_ordering
			);
		}

		$posts_array = get_posts( $args );

		return $posts_array;

	}

	/**
	 * Count total posts.
	 *
	 * @since    1.0.1
	 */
	public function slider_count_posts($slider_options) {

		$cat = '';
		$category__in = '';
		$category__not_in = '';
		$tag__in = '';
		$tag__not_in = '';
		$post_status = 'publish';

		$post_type = $slider_options['slider-post-type'][0];
		$offset = (int)$slider_options['slider-offset'][0];
		$slider_total_limit = isset($slider_options['slider-total-items']) ? (int)$slider_options['slider-total-items'][0] : 8;

		// Options - Authors
		$slider_author_filtering_type = $slider_options['slider-author-filtering-type'][0];
		$slider_authors = $slider_options['slider-authors'][0];
		$slider_authors = maybe_unserialize($slider_authors);

		if (empty($slider_authors))
		{
			$slider_authors = '';
		}

		if ($slider_author_filtering_type == 'inclusive')
		{
			$author__in = $slider_authors;
			$author__not_in = '';
		}
		else
		{
			$author__not_in = $slider_authors;
			$author__in = '';
		}

		// Options - General
		$slider_exclude_posts = $slider_options['slider-exclude-posts'][0];

		if (preg_match('/^[0-9,]+$/i', $slider_exclude_posts))
		{
			$excluded_posts = trim($slider_exclude_posts, ',');
			$excluded_posts = explode(',', $excluded_posts);
		}
		else
		{
			$excluded_posts = '';
		}

		if (!$excluded_posts)
		{
			$excluded_posts = '';
		}

		$slider_keywords = $slider_options['slider-keywords'][0];
		$slider_keywords = trim($slider_keywords, ' ');
		$slider_posts_ordering = $slider_options['slider-posts-ordering'][0];

		// Add second ordering option (date) - in case first ordering option is the same
		if ($slider_posts_ordering != 'date')
		{
			$slider_posts_ordering = $slider_posts_ordering.' date';
		}

		$slider_posts_ordering_direction = $slider_options['slider-posts-ordering-direction'][0];

		// Switch post types
		switch ($post_type)
		{
			case 'post':

				// Options - Categories
				$slider_category_filtering_type = $slider_options['slider-category-filtering-type'][0];
				$slider_include_children = $slider_options['slider-include-children'][0];

				$slider_categories = $slider_options['slider-categories'][0];
				$slider_categories = maybe_unserialize($slider_categories);

				if (empty($slider_categories))
				{
					$slider_categories = '';
				}

				// Include children
				if ($slider_include_children == 'yes')
				{
					// Inclusive
					if ($slider_category_filtering_type == 'inclusive')
					{
						// Create string of comma separated ids
						$cat = '';

						if (!empty($slider_categories))
						{
							$cat = implode(',', $slider_categories);
						}

						$category__in = '';
						$category__not_in = '';
					}
					// Exclusive
					else
					{
						// Create string of comma separated ids with hyphens
						$hyphen_categories = array();

						foreach ($slider_categories as $catid)
						{
							$hyphen_categories[] = '-'.$catid;
						}

						$cat = implode(',', $hyphen_categories);
						$category__in = '';
						$category__not_in = '';
					}
				}
				// Do not include children
				else
				{
					// Inclusive
					if ($slider_category_filtering_type == 'inclusive')
					{
						$cat = '';
						$category__in = $slider_categories;
						$category__not_in = '';
					}
					// Exclusive
					else
					{
						$cat = '';
						$category__in = '';
						$category__not_in = $slider_categories;
					}
				}

				// Options - Tags
				$slider_tag_filtering_type = $slider_options['slider-tag-filtering-type'][0];
				$slider_tags = $slider_options['slider-tags'][0];
				$slider_tags = maybe_unserialize($slider_tags);

				if (empty($slider_tags))
				{
					$slider_tags = '';
				}

				if ($slider_tag_filtering_type == 'inclusive')
				{
					$tag__in = $slider_tags;
					$tag__not_in = '';
				}
				else
				{
					$tag__not_in = $slider_tags;
					$tag__in = '';
				}

				break;

			case 'attachment':

				$post_status = 'any';

				break;

			case 'page':

				break;

			case 'specific':

				break;

			default:

				break;
		}

		if ($post_type == 'specific')
		{
			// Options - Specific posts
			$slider_include_posts = $slider_options['slider-include-posts'][0];

			if (preg_match('/^[0-9,]+$/i', $slider_include_posts))
			{
				$included_posts = trim($slider_include_posts, ',');
				$included_posts = explode(',', $included_posts);
			}
			else
			{
				$included_posts = '';
			}

			$included_posts = $included_posts ? $included_posts : '-1';

			$args = array(
				'post__in' => $included_posts,
				'ignore_sticky_posts' => true,
				'has_password' => null,
				'post_type' => 'any',
				'post_status' => array('publish', 'any'),
				'posts_per_page' => -1,
				'order' => $slider_posts_ordering_direction,
				'orderby' => $slider_posts_ordering
			);
		}
		else 
		{
			$args = array(
				'author__in' => $author__in,
				'author__not_in' => $author__not_in,
				'category__in' => $category__in,
				'category__not_in' => $category__not_in,
				'category' => $cat,
				'tag__in' => $tag__in,
				'tag__not_in' => $tag__not_in,
				's' => $slider_keywords,
				'post__not_in' => $excluded_posts,
				'ignore_sticky_posts' => true,
				'has_password' => null,
				'post_type' => $post_type,
				'post_status' => $post_status,
				'posts_per_page' => $slider_total_limit,
				'offset' => $offset,
				'order' => $slider_posts_ordering_direction,
				'orderby' => $slider_posts_ordering
			);
		}

		$posts_array = get_posts( $args );

		$total = count($posts_array);

		return $total;

	}

} // class
