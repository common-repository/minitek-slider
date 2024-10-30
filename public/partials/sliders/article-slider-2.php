<?php
/**
 * This file is used to markup the article-slider-2.
 *
 * @since      1.0.1
 * @package    Minitek-Slider
 * @subpackage Minitek-Slider/public/partials
 */

foreach ($items as $key => $item)
{
  ?><div class="mslider-item
		<?php echo ($page_number > 1) ? 'mslider-item-hidden' : ''; ?>
 		<?php if ($slider_show_images == 'no') {
 			echo 'no-images';
 		} else if (!$item->post_image) {
 			echo 'no-image';
 		} ?>
 		<?php echo $hoverOffset; ?> <?php echo $perspective; ?>"
 		style="padding-right:<?php echo $slider_spacing; ?>px; padding-left:<?php echo $slider_spacing; ?>px;">

 		<div class="mslider-item-outer-cont <?php echo $flipBase; ?> <?php echo $flipClass; ?>" style="<?php echo $animated_flip; ?>">

 			<div class="mslider-item-inner-cont"
 				style="
 				<?php if ($slider_border_radius) { ?>
 					border-radius: <?php echo $slider_border_radius; ?>px;
 				<?php } ?>
 				<?php if ($slider_border_size) { ?>
 					border: <?php echo $slider_border_size; ?>px solid <?php echo $slider_border_color; ?>;
 				<?php } ?>">

 				<?php if ($detail_box == 'yes' || !isset($item->post_image) || !$item->post_image) { ?>

 					<div class="mslider-detail-box
 						<?php if (!$item->post_image || $slider_show_images == 'no') {
 							echo 'no-image';
 						} ?>"
 						style="background-color: rgba(<?php echo $detail_box_bg_color; ?>,<?php echo $detail_box_opacity; ?>);">

						<?php if ($detail_box_date == 'yes' && isset($item->formatted_date)) { ?>
							<div class="mslider-date">
								<?php echo $item->formatted_date; ?>
							</div>
						<?php } ?>

						<?php if ($detail_box_title == 'yes') { ?>
							<h3 class="mslider-title">
								<?php if ($item->link && $detail_box_title_link == 'yes') { ?>
									<a href="<?php echo $item->link; ?>">
										<?php echo $item->short_title; ?>
									</a>
								<?php } else { ?>
									<span>
										<?php echo $item->short_title; ?>
									</span>
								<?php } ?>
							</h3>
						<?php } ?>

						<?php if (($detail_box_category == 'yes' && isset($item->post_categories) && $item->post_categories)
							|| ($detail_box_tags == 'yes' && isset($item->post_tags) && $item->post_tags)
							|| $detail_box_author == 'yes') { ?>
 							<div class="mslider-item-info">

								<?php if ($detail_box_category == 'yes' && isset($item->post_categories) && $item->post_categories) { ?>
									<p class="mslider-item-category">
										<span><i class="fa fa-folder-open"></i></span>
										<?php echo $item->post_categories; ?>
									</p>
								<?php } ?>

								<?php if ($detail_box_tags == 'yes' && isset($item->post_tags) && $item->post_tags) { ?>
									<p class="mslider-item-category">
										<span><i class="fa fa-tag"></i></span>
										<?php echo $item->post_tags; ?>
									</p>
								<?php } ?>

								<?php if ($detail_box_author == 'yes' && isset($item->post_author)) { ?>
									<p class="mslider-item-author">
										<span><i class="fa fa-user"></i></span>
										<a href="<?php echo $item->author_link; ?>"><?php echo get_the_author_meta('nicename', $item->post_author); ?></a>
									</p>
								<?php } ?>

 							</div>
 						<?php } ?>

						<?php if ($detail_box_introtext == 'yes' && isset($item->post_introtext) && $item->post_introtext) { ?>
							<div class="mslider-desc">
								<?php echo $item->post_introtext; ?>
							</div>
						<?php } ?>

						<?php if ($detail_box_comments == 'yes' && isset($item->formatted_comments) && $item->formatted_comments) { ?>
							<div class="mslider-count">
								<span><i class="fa fa-comment"></i></span>
								<a href="<?php echo $item->link; ?>#respond"><?php echo $item->formatted_comments; ?></a>
							</div>
						<?php } ?>

						<?php if ($detail_box_readmore == 'yes' && $item->link) { ?>
							<div class="mslider-readmore">
								<a href="<?php echo $item->link; ?>"><?php echo __( 'Read more', 'minitek-slider' ); ?></a>
							</div>
						<?php } ?>

 					</div>

 				<?php } ?>

 				<?php if (isset($item->post_image) && $item->post_image && $slider_show_images == 'yes') { ?>

 					<div class="mslider-cover">

 						<div class="mslider-img-div">

 							<div class="mslider-item-img">

 								<?php
 								if ($item->link && $slider_image_link == 'yes') { ?>
 									<a href="<?php echo $item->link; ?>" class="mslider-photo-link">
 										<img src="<?php echo $item->post_image; ?>" alt="<?php echo htmlspecialchars($item->post_title); ?>" />
 									</a>
 								<?php } else { ?>
 									<div class="mslider-photo-link">
 										<img src="<?php echo $item->post_image; ?>" alt="<?php echo htmlspecialchars($item->post_title); ?>" />
 									</div>
 								<?php } ?>

 							</div>

 							<?php if ($hover_box == 'yes' && $hover_box_effect !== '2' && $hover_box_effect !== '3') { ?>

 								<div class="mslider-hover-box <?php echo $hoverClass; ?>"
 									style="<?php echo $animated; ?>
 										background-color: rgba(<?php echo $hover_background_color; ?>,<?php echo $hover_background_opacity; ?>);">

 									<div class="mslider-hover-box-content">

										<?php if ($hover_box_date == 'yes' && isset($item->post_date)) { ?>
											<div class="mslider-date">
												<?php echo $item->hover_formatted_date; ?>
											</div>
										<?php } ?>

										<?php if ($hover_box_title == 'yes') { ?>
											<h3 class="mslider-title">
												<?php if ($item->link && $detail_box_title_link == 'yes') { ?>
													<a href="<?php echo $item->link; ?>">
														<?php echo $item->hover_title; ?>
													</a>
												<?php } else { ?>
													<span>
														<?php echo $item->hover_title; ?>
													</span>
												<?php } ?>
											</h3>
										<?php } ?>

 										<?php if ($hover_box_category == 'yes' || $hover_box_tags == 'yes' || $hover_box_author == 'yes') { ?>
 											<div class="mslider-item-info">

												<?php if ($hover_box_category == 'yes' && isset($item->post_categories) && $item->post_categories) { ?>
													<p class="mslider-item-category">
														<span><i class="fa fa-folder-open"></i></span>
														<?php echo $item->post_categories; ?>
													</p>
												<?php } ?>

												<?php if ($hover_box_tags == 'yes' && isset($item->post_tags) && $item->post_tags) { ?>
													<p class="mslider-item-category">
														<span><i class="fa fa-tag"></i></span>
														<?php echo $item->post_tags; ?>
													</p>
												<?php } ?>

												<?php if ($hover_box_author == 'yes' && isset($item->post_author)) { ?>
													<p class="mslider-item-author">
														<span><i class="fa fa-user"></i></span>
														<a href="<?php echo $item->author_link; ?>"><?php echo get_the_author_meta('nicename', $item->post_author); ?></a>
													</p>
												<?php } ?>

 											</div>
 										<?php } ?>

										<?php if ($hover_box_introtext == 'yes' && isset($item->hover_introtext) && $item->hover_introtext) { ?>
											<div class="mslider-desc">
												<?php echo $item->hover_introtext; ?>
											</div>
										<?php } ?>

										<?php if ($hover_box_comments == 'yes' && isset($item->formatted_comments) && $item->formatted_comments) { ?>
											<div class="mslider-count">
												<span><i class="fa fa-comment"></i></span>
												<a href="<?php echo $item->link; ?>#respond"><?php echo $item->formatted_comments; ?></a>
											</div>
										<?php } ?>

										<?php if ($hover_box_link == 'yes' && $item->link) { ?>
											<div class="mslider-item-icons">
												<a href="<?php echo $item->link; ?>" class="mslider-item-link-icon">
													<i class="fa fa-link"></i>
												</a>
											</div>
										<?php } ?>

 									</div>

 								</div>

 							<?php } ?>

 						</div>

 					</div>

 				<?php } ?>

 			</div>

			<?php if ($hover_box == 'yes' && (($slider_show_images == 'no' || !isset($item->post_image) || !$item->post_image) || ($hover_box_effect == '2' || $hover_box_effect == '3'))) { ?>

 				<div class="mslider-hover-box <?php echo $hoverClass; ?>"
 					style="<?php echo $animated; ?>
 					background-color: rgba(<?php echo $hover_background_color; ?>,<?php echo $hover_background_opacity; ?>);
 					<?php if ($slider_border_radius) { ?>
 						border-radius: <?php echo $slider_border_radius; ?>px;
 					<?php } ?>">

 					<div class="mslider-hover-box-content">

						<?php if ($hover_box_date == 'yes' && isset($item->post_date)) { ?>
							<div class="mslider-date">
								<?php echo $item->hover_formatted_date; ?>
							</div>
						<?php } ?>

						<?php if ($hover_box_title == 'yes') { ?>
							<h3 class="mslider-title">
								<?php if ($item->link && $detail_box_title_link == 'yes') { ?>
									<a href="<?php echo $item->link; ?>">
										<?php echo $item->hover_title; ?>
									</a>
								<?php } else { ?>
									<span>
										<?php echo $item->hover_title; ?>
									</span>
								<?php } ?>
							</h3>
						<?php } ?>

 						<?php if ($hover_box_category == 'yes' || $hover_box_tags == 'yes' || $hover_box_author == 'yes') { ?>
 							<div class="mslider-item-info">

								<?php if ($hover_box_category == 'yes' && isset($item->post_categories) && $item->post_categories) { ?>
									<p class="mslider-item-category">
										<span><i class="fa fa-folder-open"></i></span>
										<?php echo $item->post_categories; ?>
									</p>
								<?php } ?>

								<?php if ($hover_box_tags == 'yes' && isset($item->post_tags) && $item->post_tags) { ?>
									<p class="mslider-item-category">
										<span><i class="fa fa-tag"></i></span>
										<?php echo $item->post_tags; ?>
									</p>
								<?php } ?>

								<?php if ($hover_box_author == 'yes' && isset($item->post_author)) { ?>
									<p class="mslider-item-author">
										<span><i class="fa fa-user"></i></span>
										<a href="<?php echo $item->author_link; ?>"><?php echo get_the_author_meta('nicename', $item->post_author); ?></a>
									</p>
								<?php } ?>

 							</div>
 						<?php } ?>

						<?php if ($hover_box_introtext == 'yes' && isset($item->hover_introtext) && $item->hover_introtext) { ?>
							<div class="mslider-desc">
								<?php echo $item->hover_introtext; ?>
							</div>
						<?php } ?>

						<?php if ($hover_box_comments == 'yes' && isset($item->formatted_comments) && $item->formatted_comments) { ?>
							<div class="mslider-count">
								<span><i class="fa fa-comment"></i></span>
								<a href="<?php echo $item->link; ?>#respond"><?php echo $item->formatted_comments; ?></a>
							</div>
						<?php } ?>

						<?php if ($hover_box_link == 'yes' && $item->link) { ?>
							<div class="mslider-item-icons">
								<a href="<?php echo $item->link; ?>" class="mslider-item-link-icon">
									<i class="fa fa-link"></i>
								</a>
							</div>
						<?php } ?>

 					</div>

 				</div>

 			<?php } ?>

 		</div>

 	</div>

<?php }
