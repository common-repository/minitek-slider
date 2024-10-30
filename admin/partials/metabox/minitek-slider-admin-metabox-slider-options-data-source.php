<?php
/**
 * Provide the view for the metabox parameters: slider-options/data-source
 *
 * @since 		  1.1.0
 * @package 	  Minitek-Slider
 * @subpackage 	Minitek-Slider/admin/partials
 */

// Items type ?>
<div id="mslider-admin-metabox-data-source-items-type">
<table class="form-table">
<tbody>
<?php

  // Post types
  $atts = array();
  $atts['description'] = '';
  $atts['id'] = 'slider-post-type';
  $atts['label'] = 'Items type';
  $atts['name'] = 'slider-post-type'; // append [] for array
  $atts['type'] = 'radio';
  $atts['value'] = 'post';
  $atts['selections'] = array(
    array(
      'value' => 'post',
      'label' => 'Posts'
    ),
    array(
      'value' => 'attachment',
      'label' => 'Media (Images)'
    ),
    array(
      'value' => 'page',
      'label' => 'Pages'
    ),
    array(
      'value' => 'specific',
      'label' => 'Specific items'
    ),
    array(
      'value' => 'product',
      'label' => 'Products',
      'disabled' => true
    ),
    array(
      'value' => 'folder',
      'label' => 'Folder',
      'disabled' => true
    ),
    array(
      'value' => 'rss',
      'label' => 'RSS',
      'disabled' => true
    ),
    array(
      'value' => 'ci',
      'label' => 'Custom items',
      'disabled' => true
    )
  );

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-select.php' );
  ?></tr><?php

?>
</tbody>
</table>
</div>

<?php
// Items type: Posts ?>
<div id="mslider-admin-metabox-data-source-posts" class="hidden">
<table class="form-table">
<tbody>
<?php

  ?><tr><th colspan="2"><h4><?php esc_html_e( 'Categories', 'minitek-slider' ); ?></h4></th></tr><?php

  // Category filtering type
  $atts = array();
  $atts['description'] = '';
  $atts['id'] = 'slider-category-filtering-type';
  $atts['label'] = 'Category filtering type';
  $atts['name'] = 'slider-category-filtering-type';
  $atts['type'] = 'radio';
  $atts['value'] = 'inclusive';
  $atts['selections'] = array(
    array(
      'value' => 'inclusive',
      'label' => 'Inclusive'
    ),
    array(
      'value' => 'exclusive',
      'label' => 'Exclusive'
    )
  );

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-radio.php' );
  ?></tr><?php

  // Categories
  $atts = array();
  $atts['description'] = '';
  $atts['id'] = 'slider-categories';
  $atts['label'] = 'Categories';
  $atts['name'] = 'slider-categories[]'; // [] for array
  $atts['type'] = 'select';
  $atts['value'] = array();

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-categories.php' );
  ?></tr><?php

  // Include children
  $atts = array();
  $atts['description'] = '';
  $atts['id'] = 'slider-include-children';
  $atts['label'] = 'Include children';
  $atts['name'] = 'slider-include-children';
  $atts['type'] = 'radio';
  $atts['value'] = 'yes';
  $atts['selections'] = array(
    array(
      'value' => 'yes',
      'label' => 'Yes'
    ),
    array(
      'value' => 'no',
      'label' => 'No'
    )
  );

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-radio.php' );
  ?></tr><?php

  ?><tr><th colspan="2"><h4><?php esc_html_e( 'Tags', 'minitek-slider' ); ?></h4></th></tr><?php

  // Tag filtering type
  $atts = array();
  $atts['description'] = '';
  $atts['id'] = 'slider-tag-filtering-type';
  $atts['label'] = 'Tag filtering type';
  $atts['name'] = 'slider-tag-filtering-type';
  $atts['type'] = 'radio';
  $atts['value'] = 'inclusive';
  $atts['selections'] = array(
    array(
      'value' => 'inclusive',
      'label' => 'Inclusive'
    ),
    array(
      'value' => 'exclusive',
      'label' => 'Exclusive'
    )
  );

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-radio.php' );
  ?></tr><?php

  // Tags
  $atts = array();
  $atts['description'] = '';
  $atts['id'] = 'slider-tags';
  $atts['label'] = 'Tags';
  $atts['name'] = 'slider-tags[]'; // [] for array
  $atts['type'] = 'select';
  $atts['value'] = array();

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-tags.php' );
  ?></tr><?php

?>
</tbody>
</table>
</div>

<?php
// Items type: Media ?>
<div id="mslider-admin-metabox-data-source-media" class="hidden"></div>

<?php
// Items type: Pages ?>
<div id="mslider-admin-metabox-data-source-pages" class="hidden"></div>

<?php 
// Specific items ?>
<div id="mslider-admin-metabox-data-source-specific" class="hidden">
<table class="form-table">
<tbody>
<?php

  ?><tr><th colspan="2"><h4><?php esc_html_e( 'Specific Items', 'minitek-slider' ); ?></h4></th></tr><?php

  // Post Ids - Data source
  $atts = array();
  $atts['description'] = 'Enter the IDs of the posts to be included, separated by commas. Retrieves any type except revisions and types with ‘exclude_from_search’ set to true.';
  $atts['id'] = 'slider-include-posts';
  $atts['label'] = 'Include IDs';
  $atts['name'] = 'slider-include-posts';
  $atts['placeholder'] = '';
  $atts['type'] = 'textarea';
  $atts['value'] = '';

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-textarea.php' );
  ?></tr><?php

?>
</tbody>
</table>
</div>

<?php
// Authors ?>
<div id="mslider-admin-metabox-data-source-authors">
<table class="form-table">
<tbody>
<?php

  ?><tr><th colspan="2"><h4><?php esc_html_e( 'Authors', 'minitek-slider' ); ?></h4></th></tr><?php

  // Author filtering type
  $atts = array();
  $atts['description'] = '';
  $atts['id'] = 'slider-author-filtering-type';
  $atts['label'] = 'Author filtering type';
  $atts['name'] = 'slider-author-filtering-type';
  $atts['type'] = 'radio';
  $atts['value'] = 'inclusive';
  $atts['selections'] = array(
    array(
      'value' => 'inclusive',
      'label' => 'Inclusive'
    ),
    array(
      'value' => 'exclusive',
      'label' => 'Exclusive'
    )
  );

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-radio.php' );
  ?></tr><?php

  // Authors
  $atts = array();
  $atts['description'] = '';
  $atts['id'] = 'slider-authors';
  $atts['label'] = 'Authors';
  $atts['name'] = 'slider-authors[]'; // [] for array
  $atts['type'] = 'select';
  $atts['value'] = array();

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-authors.php' );
  ?></tr><?php

?>
</tbody>
</table>
</div>

<?php
// Items type: General ?>
<div id="mslider-admin-metabox-data-source-general">
<table class="form-table">
<tbody>
<?php

  ?><tr><th colspan="2"><h4><?php esc_html_e( 'General', 'minitek-slider' ); ?></h4></th></tr><?php

  // Exclude items
  $atts = array();
  $atts['description'] = 'Enter the IDs of the items to be excluded, separated by commas.';
  $atts['id'] = 'slider-exclude-posts';
  $atts['label'] = 'Exclude items';
  $atts['name'] = 'slider-exclude-posts';
  $atts['placeholder'] = '';
  $atts['type'] = 'textarea';
  $atts['value'] = '';

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr id="mslider-admin-metabox-field-exclude"><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-textarea.php' );
  ?></tr><?php

  // Offset
  $atts = array();
  $atts['description'] = 'Integer. The first x items will be skipped.';
  $atts['id'] = 'slider-offset';
  $atts['label'] = 'Offset';
  $atts['name'] = 'slider-offset';
  $atts['placeholder'] = '';
  $atts['type'] = 'text';
  $atts['value'] = '0';

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr id="mslider-admin-metabox-field-offset"><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-text.php' );
  ?></tr><?php

  // Keywords
  $atts = array();
  $atts['description'] = 'Display items that match these keywords. Separate multiple keywords with spaces. Prepending a keyword with a hyphen will exclude items matching that keyword.';
  $atts['id'] = 'slider-keywords';
  $atts['label'] = 'Keywords';
  $atts['name'] = 'slider-keywords';
  $atts['placeholder'] = '';
  $atts['type'] = 'textarea';
  $atts['value'] = '';

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr id="mslider-admin-metabox-field-keywords"><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-textarea.php' );
  ?></tr><?php

  // Ordering
  $atts = array();
  $atts['description'] = '';
  $atts['id'] = 'slider-posts-ordering';
  $atts['label'] = 'Ordering';
  $atts['name'] = 'slider-posts-ordering';
  $atts['type'] = 'select';
  $atts['value'] = 'date';
  $atts['selections'] = array(
    array(
      'value' => 'author',
      'label' => 'Author'
    ),
    array(
      'value' => 'title',
      'label' => 'Title'
    ),
    array(
      'value' => 'date',
      'label' => 'Date created'
    ),
    array(
      'value' => 'modified',
      'label' => 'Date modified'
    ),
    array(
      'value' => 'comment_count',
      'label' => 'Number of comments'
    )
  );

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-select.php' );
  ?></tr><?php

  // Ordering direction
  $atts = array();
  $atts['description'] = '';
  $atts['id'] = 'slider-posts-ordering-direction';
  $atts['label'] = 'Ordering direction';
  $atts['name'] = 'slider-posts-ordering-direction';
  $atts['type'] = 'radio';
  $atts['value'] = 'DESC';
  $atts['selections'] = array(
    array(
      'value' => 'ASC',
      'label' => 'Ascending'
    ),
    array(
      'value' => 'DESC',
      'label' => 'Descending'
    )
  );

  if ( ! empty( get_post_meta($post_id, $atts['id'], true) ) ) {
    $atts['value'] = get_post_meta($post_id, $atts['id'], true);
  }

  apply_filters( $this->plugin_name . '-field-' . $atts['id'], $atts );

  ?><tr><?php
  include( MSLIDER__ADMIN_PLUGIN_DIR . 'partials/fields/' . $this->plugin_name . '-admin-field-radio.php' );
  ?></tr><?php

?>
</tbody>
</table>
</div>