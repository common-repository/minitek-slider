(function( $ ) {
	'use strict';

	/**
	 * This enables you to define handlers, for when the DOM is ready:
	 */

	 $(function() {

		/**
		 * Fix active dashboard menu item 
		 */
		if (document
			.getElementById("menu-posts-mslider")
			.querySelectorAll(".current").length == 0) 
		{
			$('#menu-posts-mslider').find('.wp-first-item').addClass('current');
		}

		/**
		 * Toggle visibility of items type
		 */
		var items_type = $('select[name="slider-post-type"]').val();

		if (items_type == 'post')
		{
			$('#mslider-admin-metabox-data-source-posts').removeClass('hidden');
		}
		else if (items_type == 'attachment')
		{
			$('#mslider-admin-metabox-data-source-media').removeClass('hidden');
		}
		else if (items_type == 'page')
		{
			$('#mslider-admin-metabox-data-source-pages').removeClass('hidden');
		}
		else if (items_type == 'specific')
		{
			$('#mslider-admin-metabox-data-source-specific').removeClass('hidden');
			$('#mslider-admin-metabox-data-source-authors').addClass('hidden');
			$('#mslider-admin-metabox-field-exclude').addClass('hidden');
			$('#mslider-admin-metabox-field-offset').addClass('hidden');
			$('#mslider-admin-metabox-field-keywords').addClass('hidden');
		}

		$('select[name="slider-post-type"]').change(function()
		{
			var items_type = $(this).val();

			if (items_type == 'post')
			{
				$('#mslider-admin-metabox-data-source-posts').removeClass('hidden');
				$('#mslider-admin-metabox-data-source-media').addClass('hidden');
				$('#mslider-admin-metabox-data-source-pages').addClass('hidden');
				$('#mslider-admin-metabox-data-source-specific').addClass('hidden');
				$('#mslider-admin-metabox-data-source-authors').removeClass('hidden');
				$('#mslider-admin-metabox-data-source-general').removeClass('hidden');
				$('#mslider-admin-metabox-field-exclude').removeClass('hidden');
				$('#mslider-admin-metabox-field-offset').removeClass('hidden');
				$('#mslider-admin-metabox-field-keywords').removeClass('hidden');
			}
			else if (items_type == 'attachment')
			{
				$('#mslider-admin-metabox-data-source-posts').addClass('hidden');
				$('#mslider-admin-metabox-data-source-media').removeClass('hidden');
				$('#mslider-admin-metabox-data-source-pages').addClass('hidden');
				$('#mslider-admin-metabox-data-source-specific').addClass('hidden');
				$('#mslider-admin-metabox-data-source-authors').removeClass('hidden');
				$('#mslider-admin-metabox-data-source-general').removeClass('hidden');
				$('#mslider-admin-metabox-field-exclude').removeClass('hidden');
				$('#mslider-admin-metabox-field-offset').removeClass('hidden');
				$('#mslider-admin-metabox-field-keywords').removeClass('hidden');
			}
			else if (items_type == 'page')
			{
				$('#mslider-admin-metabox-data-source-posts').addClass('hidden');
				$('#mslider-admin-metabox-data-source-media').addClass('hidden');
				$('#mslider-admin-metabox-data-source-pages').removeClass('hidden');
				$('#mslider-admin-metabox-data-source-specific').addClass('hidden');
				$('#mslider-admin-metabox-data-source-authors').removeClass('hidden');
				$('#mslider-admin-metabox-data-source-general').removeClass('hidden');
				$('#mslider-admin-metabox-field-exclude').removeClass('hidden');
				$('#mslider-admin-metabox-field-offset').removeClass('hidden');
				$('#mslider-admin-metabox-field-keywords').removeClass('hidden');
			}
			else if (items_type == 'specific')
			{
				$('#mslider-admin-metabox-data-source-posts').addClass('hidden');
				$('#mslider-admin-metabox-data-source-media').addClass('hidden');
				$('#mslider-admin-metabox-data-source-pages').addClass('hidden');
				$('#mslider-admin-metabox-data-source-specific').removeClass('hidden');
				$('#mslider-admin-metabox-data-source-authors').addClass('hidden');
				$('#mslider-admin-metabox-data-source-general').removeClass('hidden');
				$('#mslider-admin-metabox-field-exclude').addClass('hidden');
				$('#mslider-admin-metabox-field-offset').addClass('hidden');
				$('#mslider-admin-metabox-field-keywords').addClass('hidden');
			}
		});

		/**
		 * Slider theme radios
		 */
		function selectCustomRadio()
		{
			$('.theme-radio-input:checked').parents('.theme-radio').addClass('active');

			$('.theme-radio-input').change(function()
			{
				$(this).parents('.form-table').find('.theme-radio').removeClass('active');
				var checked = $(this).attr('checked', true);
				
				if (checked)
				{
					$(this).parents('.theme-radio').addClass('active');
				}
			});
		}

		selectCustomRadio();

	 });

})( jQuery );
