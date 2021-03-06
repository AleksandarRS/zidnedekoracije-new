<?php
/**
 * Template part for displaying single posts.
 *
 * @package mwns
 */

?>
<?php
$slider_short_description = get_field('slider_short_description');

$order_product_option = get_field('order_product_option');
$add_video_link = get_field('add_video_link');
$add_video_link_s = get_field('add_video_link_s');
$add_video_link_t = get_field('add_video_link_t');
$add_video_link_f = get_field('add_video_link_f');
$add_video_link_ff = get_field('add_video_link_ff');

$page_main_content_description = get_field('page_main_content_description');
$product_description = get_field('product_description');
$insert_your_price = get_field('insert_your_price');

$order_product_description = get_field('order_product_description');

$order_product_text_content = get_field('order_product_text_content', 'option');
$order_product_form_content = get_field('order_product_form_content', 'option');


$instructions_section_title = get_field('instructions_section_title');
$instructions_section_description = get_field('instructions_section_description');

$slider_or_text = get_field('slider_or_text');

$half_section_f = get_field('half_section_f');
$half_section_s = get_field('half_section_s');

$background_image = get_field('background_image');
$main_content = get_field('main_content');

$full_width_section = get_field('full_width_section');

?>

<div class="breadcrumbs-wrapper">
<?php if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('
        <div class="site-content">
            <div class="container">
                <div class="full-width">
                <div id="breadcrumbs">', '</div>
                </div>
            </div>
        </div>
    ');
    } ?>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<div class="container">
		<div class="row row-single-page single-post-product-content-wrapper">
			<?php if( have_rows('page_slider_images') ): ?>
				<div class="single-page-main-slider-wrapper col-md-6">
					<div class="single-page-main-slider">
						<?php while ( have_rows('page_slider_images') ) : the_row(); ?>
							<?php $single_slider_image = get_sub_field('single_slider_image'); ?>
							<?php if( $single_slider_image ): ?>
								<div class="single-page-img-wrap">
									<a class="featherlight-gallery-init" href="<?php echo esc_url($single_slider_image['url']); ?>">
										<div class="single-page-img" style="background-image: url(<?php echo esc_url($single_slider_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($single_slider_image['alt']); ?>">
										</div>
									</a>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div> <!-- /.single-page-main-slider -->
					<div class="single-page-thumbnail-slider">
						<?php while ( have_rows('page_slider_images') ) : the_row(); ?>
							<?php $single_slider_image = get_sub_field('single_slider_image'); ?>
							<?php if( $single_slider_image ): ?>
								<div class="single-page-thumbnail-wrap">
									<div class="single-page-thumbnail" style="background-image: url(<?php echo esc_url($single_slider_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($single_slider_image['alt']); ?>">
									</div>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div> <!-- /.single-page-thumbnail-slider -->
				</div> <!-- /.single-page-main-slider-wrapper col-md-6 -->
			<?php  else : ?>
				
			<?php endif;?>
			
			<div class="single-page-main-content single-page-entry-content<?php if( have_rows('page_slider_images') ): ?> col-md-6<?php  else : ?> col-md-12<?php endif;?>">
				<header class="main-title-section-heading entry-header">
					<?php if( $slider_short_description ): ?>
						<span class="title-label"><?php echo $slider_short_description; ?></span>
					<?php  else : ?>
						<?php $term_list = wp_get_post_terms($post->ID, 'kategorija-proizvoda', ['fields' => 'all']);
							foreach($term_list as $term) {
								if( get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-proizvoda',true) == $term->term_id ) { ?>
									<span class="title-label"><?php print $term->name ; ?></span>
								<?php }
							}
						?>
					<?php endif;?>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<?php if( $order_product_option == true ): ?>
						<div class="stocks-information">
							<p><span><?php _e('Ima na stanju','mwns') ?></span></p>
						</div>
					<?php else: ?>
						<div class="stocks-information">
							<p><span><?php _e('Nema na stanju','mwns') ?></span></p>
						</div>
					<?php endif; ?>

					

				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php echo $page_main_content_description; ?>
					<?php if( $product_description || $insert_your_price ): ?>
						<div class="product-description-price-wrapper">
							<?php if( $product_description ): ?>
								<div class="product-description-element">
									<h5 class="product-description-title"><?php echo $product_description; ?><span> RSD</span></h5>
								</div>
							<?php endif; ?>

							<?php if( $insert_your_price ): ?>
								<div class="price-field-element">
									<p><?php _e('Cena: ','mwns'); ?><?php echo $insert_your_price; ?><span><?php _e(' RSD','mwns'); ?></span></p>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php 
						if( $add_video_link ): 
							$link_url = $add_video_link['url'];
							$link_title = $add_video_link['title'];
							$link_target = $add_video_link['target'] ? $add_video_link['target'] : '_self';
						?>
					<?php endif; ?>
					<?php 
						if( $add_video_link_s ): 
							$link_url_s = $add_video_link_s['url'];
							$link_title_s = $add_video_link_s['title'];
							$link_target_s = $add_video_link_s['target'] ? $add_video_link_s['target'] : '_self';
						?>
					<?php endif; ?>
					<?php 
						if( $add_video_link_t ): 
							$link_url_t = $add_video_link_t['url'];
							$link_title_t = $add_video_link_t['title'];
							$link_target_t = $add_video_link_t['target'] ? $add_video_link_t['target'] : '_self';
						?>
					<?php endif; ?>
					<?php 
						if( $add_video_link_f ): 
							$link_url_f = $add_video_link_f['url'];
							$link_title_f = $add_video_link_f['title'];
							$link_target_f = $add_video_link_f['target'] ? $add_video_link_f['target'] : '_self';
						?>
					<?php endif; ?>
					<?php 
						if( $add_video_link_ff ): 
							$link_url_ff = $add_video_link_ff['url'];
							$link_title_ff = $add_video_link_ff['title'];
							$link_target_ff = $add_video_link_ff['target'] ? $add_video_link_ff['target'] : '_self';
						?>
					<?php endif; ?>
					<?php if( $add_video_link || $add_video_link_s || $add_video_link_t || $add_video_link_f ): ?>
						<div class="single-page-video-button single-page-button-wrap">
							<?php if( $add_video_link ): ?>
								<a class="button button-secondary-outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
							<?php if( $add_video_link_s ): ?>
								<a class="button button-secondary-outline" href="<?php echo esc_url( $link_url_s ); ?>" target="<?php echo esc_attr( $link_target_s ); ?>"><?php echo esc_html( $link_title_s ); ?></a>
							<?php endif; ?>
							<?php if( $add_video_link_t ): ?>
								<a class="button button-secondary-outline" href="<?php echo esc_url( $link_url_t ); ?>" target="<?php echo esc_attr( $link_target_t ); ?>"><?php echo esc_html( $link_title_t ); ?></a>
							<?php endif; ?>
							<?php if( $add_video_link_f ): ?>
								<a class="button button-secondary-outline" href="<?php echo esc_url( $link_url_f ); ?>" target="<?php echo esc_attr( $link_target_f ); ?>"><?php echo esc_html( $link_title_f ); ?></a>
							<?php endif; ?>
							<?php if( $add_video_link_ff ): ?>
								<a class="button button-secondary-outline" href="<?php echo esc_url( $link_url_ff ); ?>" target="<?php echo esc_attr( $link_target_ff ); ?>"><?php echo esc_html( $link_title_ff ); ?></a>
							<?php endif; ?>

							<?php if( have_rows('your_video_links') ): ?>
								<?php while ( have_rows('your_video_links') ) : the_row(); ?>
									<?php 
										$video_link_sub_link  = get_sub_field('video_link_sub_link');
										if( $video_link_sub_link ): 
											$link_url_sub = $video_link_sub_link['url'];
											$link_title_sub = $video_link_sub_link['title'];
											$link_target_sub = $video_link_sub_link['target'] ? $video_link_sub_link['target'] : '_self';
										?>
									<?php endif; ?>

									<?php if( $video_link_sub_link ): ?>
										<a class="button button-secondary-outline" href="<?php echo esc_url( $link_url_sub ); ?>" target="<?php echo esc_attr( $link_target_sub ); ?>"><?php echo esc_html( $link_title_sub ); ?></a>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php  else : ?>
								
							<?php endif;?>
						</div>
					<?php endif; ?>

					<?php if( $order_product_option == true ): ?>
						<div class="single-page-button-wrap order-product-button">
							<a href="#order-form" id="order-product-button" class="button button-tertiary"><?php _e('Naru??ite proizvod', 'mwns'); ?></a>
						</div>
					<?php endif; ?>
					
				</div><!-- .entry-content -->
			</div> <!-- /.single-page-main-content single-page-entry-content col-md-6 -->
			<?php if( $order_product_option == true ): ?>
				<div id="order-form" class="single-page-order-form-wrapper col-md-12">
					<div class="single-page-order-form-inner">
						<div class="order-product-close">
							<i class="icon icon-times order-product-close-button"></i>
						</div>
						<div class="row row-order-form">
							<?php if( $order_product_description ): ?>
								<div class="order-text-wrapper col-md-6">
									<?php echo $order_product_description; ?>
								</div>
							<?php else: ?>
								<div class="order-text-wrapper col-md-6">
									<?php echo $order_product_text_content; ?>
								</div>
							<?php endif; ?>
							<div class="col-md-6 order-form-wrapper">
								<?php echo $order_product_form_content; ?>
							</div>
						</div>
					</div> <!-- /.single-page-order-form-inner -->
				</div> <!-- /#order-form /.single-page-order-form-wrapper col-md-12 -->
			<?php endif; ?>

			<?php if ($instructions_section_title || $instructions_section_description || have_rows('instructions_stages') ): ?>
				<div class="tabs col-md-12">
					<div class="instructions-section">
						<div class="instructions-section-description-wrapper col-md-6">
							<?php if ($instructions_section_title): ?>
								<header class="main-title-section-heading entry-header">
									<h2 class="entry-title"><?php echo $instructions_section_title; ?></h2>
								</header><!-- .entry-header -->
							<?php endif;?>
							<?php if ($instructions_section_description): ?>
								<?php echo $instructions_section_description; ?>
							<?php endif;?>
							<?php if( have_rows('instructions_stages') ): ?>
								<div class="title-label-tabs title-label-wrap">
									<?php $i = 0; ?>
									<ul class="tab-nav">
										<?php while ( have_rows('instructions_stages') ) : the_row(); ?>
											<li><a href='#content-<?php echo $i; ?>'><h5><?php the_sub_field('instruction_label_title'); ?> <i class="icon icon-arrow-right"></i></h5></a></li>
											<?php $i++; ?>
										<?php endwhile; ?>
									</ul>
								</div>	
							<?php endif;?>
						</div> <!-- /.instructions-section-description-wrapper col-md-6 -->
						<?php if( have_rows('instructions_stages') ): ?>
							<div class="instructions-slider-wrapper tab-content col-md-6">
								<?php $v = 0; ?>
								<?php while ( have_rows('instructions_stages') ) : the_row(); ?>
									<?php if( have_rows('instructions_details') ): ?>
										<div id='content-<?php echo $v; ?>' class="instructions-slider">
											<?php while ( have_rows('instructions_details') ) : the_row(); ?>
												<?php 
													$add_instruction_image_f = get_sub_field('add_instruction_image_f');
													$add_instruction_image_s = get_sub_field('add_instruction_image_s');
													$add_instruction_text = get_sub_field('add_instruction_text');

												?>
												<div class="instructions-slider-item">
													<div class="instruction-slider-image-wrap<?php if( $add_instruction_image_s ): ?> second-image-here<?php else:?> just-one-image<?php endif;?>">
														<?php if( $add_instruction_image_f ): ?>
															<div class="instruction-slider-image" style="background-image: url('<?php echo esc_url($add_instruction_image_f['url']); ?>');" role="img" aria-label="<?php echo esc_attr($add_instruction_image_f['alt']); ?>">
															</div>
														<?php endif;?>
														<?php if( $add_instruction_image_s ): ?>
															<div class="instruction-slider-image" style="background-image: url('<?php echo esc_url($add_instruction_image_s['url']); ?>');" role="img" aria-label="<?php echo esc_attr($add_instruction_image_s['alt']); ?>">
															</div>
														<?php endif;?>
													</div>
													<div class="instruction-slider-description">
														<?php echo $add_instruction_text; ?>
													</div>
												</div>
												
											<?php endwhile; ?>	
										</div> <!-- /#content-##' /.instructions-slider -->
									<?php endif;?>
									<?php $v++; ?>
								<?php endwhile; ?>
							</div> <!-- /.instructions-slider-wrapper tab-content col-md-6 -->	
						<?php endif;?>
					</div> <!-- /.instructions-section -->
				</div> <!-- /.tabs col-md-12 -->
				

				<?php if( have_rows('instructions_stages') ): ?>

					<div class="accordion-container-mobile-wrapper">
						<div class="accordion-container">

							<div class="title-label-tabs title-label-wrap ">

								<?php while ( have_rows('instructions_stages') ) : the_row(); ?>
									<div class="set">
										<a class="accordion-cta-link" href='#'><h5><?php the_sub_field('instruction_label_title'); ?> <i class="icon icon-angle-down"></i></h5></a>
										<?php if( have_rows('instructions_details') ): ?>
											<!-- <div class="instructions-slider"> -->
												<?php while ( have_rows('instructions_details') ) : the_row(); ?>
													<?php 
														$add_instruction_image_f = get_sub_field('add_instruction_image_f');
														$add_instruction_image_s = get_sub_field('add_instruction_image_s');
														$add_instruction_text = get_sub_field('add_instruction_text');
													?>
													<div class="instructions-slider-item accordion-content">
														<div class="instruction-slider-image-wrap<?php if( $add_instruction_image_s ): ?> second-image-here<?php else:?> just-one-image<?php endif;?>">
															<?php if( $add_instruction_image_f ): ?>
																<div class="instruction-slider-image" style="background-image: url('<?php echo esc_url($add_instruction_image_f['url']); ?>');" role="img" aria-label="<?php echo esc_attr($add_instruction_image_f['alt']); ?>">
																</div>
															<?php endif;?>
															<?php if( $add_instruction_image_s ): ?>
																<div class="instruction-slider-image" style="background-image: url('<?php echo esc_url($add_instruction_image_s['url']); ?>');" role="img" aria-label="<?php echo esc_attr($add_instruction_image_s['alt']); ?>">
																</div>
															<?php endif;?>
														</div>
														<div class="instruction-slider-description">
															<?php echo $add_instruction_text; ?>
														</div>
													</div>
												<?php endwhile; ?>	
											<!-- </div>  --> <!-- /.instructions-slider -->
										<?php endif;?>
									</div>
								<?php endwhile; ?>

							</div> <!-- /.title-label-tabs title-label-wrap set -->	
						</div> <!-- /.accordion-container -->
					</div> <!-- /.accordion-container-mobile-wrapper -->
				<?php endif;?>

			<?php endif;?>


			<?php if( $half_section_f || $half_section_s ): ?>
				<div class="single-half-section-wrapper col-md-12">
					<div class="single-half-section-inner<?php if( have_rows('slider_images_half') ): ?> half-slider-activated<?php endif;?>">
						<div class="row row-half-sectction">
							<?php if( $half_section_f ): ?>
								<div class="single-half-item col-md-6">
									<?php echo $half_section_f; ?>
								</div>
							<?php endif;?>
							
							<?php if( $half_section_s || get_field('slider_images_half') ): ?>
								<div class="single-half-item col-md-6">
									<?php if( $slider_or_text == true ): ?>
										<?php echo $half_section_s; ?>
									<?php else: ?>
										<?php if( have_rows('slider_images_half') ): ?>
											<div class="half-section-slider">
												<?php while ( have_rows('slider_images_half') ) : the_row(); ?>
													<?php
														$images_for_slider_half = get_sub_field('images_for_slider_half');
													?>
													<div class="half-section-slider-item">
													<!-- <div class="slider-half-image" style="background-image: url('<?php // echo esc_url($images_for_slider_half['url']); ?>')"></div> -->
														<img src="<?php echo esc_url($images_for_slider_half['url']); ?>" alt="<?php echo esc_attr($images_for_slider_half['alt']); ?>" />
													</div>
												<?php endwhile; ?>
											</div>
										<?php  else : ?>
											
										<?php endif;?>
									<?php endif;?>
									
								</div>
							<?php endif;?>
						</div>
					</div>
				</div> <!-- /.single-half-section-wrapper col-md-12 -->
			<?php endif;?>

			<?php if( $background_image && $main_content ): ?>
				</div> <!-- /.row row-single-page row row-single-page single-post-product-content-wrapper -->
			</div><!-- .container -->
			<div class="single-bg-img-section-wrapper">
				<div class="single-bg-img-section-inner" style="background-image: url('<?php echo esc_url($background_image['url']); ?>');" role="img" aria-label="<?php echo esc_attr($background_image['alt']); ?>">
					<div class="container">
						<div class="row row-bg-img-section">
							<?php if( $main_content ): ?>
								<div class="single-bg-img-item col-md-6">
									<div class="single-bg-img-item-inner">
										<?php echo $main_content; ?>
									</div>
								</div>
							<?php endif;?>
						</div>
					</div> <!-- .container -->
				</div>
			</div> <!-- /.single-bg-img-section-wrapper -->
			<div class="container">
				<div class="row row-single-page row row-single-page single-post-product-content-wrapper">
			<?php endif;?>

			<?php if( $full_width_section): ?>
				<div class="single-full-width-section-wrapper col-md-12">
					<div class="single-full-width-section-inner">
						<div class="row row-single-full-width-section">
							<div class="single-full-width-item col-md-12">
								<?php echo $full_width_section; ?>
							</div>
						</div>
					</div>
				</div> <!-- /.single-full-width-section-wrapper  col-md-12 -->
			<?php endif;?>


			<div class="all-products-section col-md-12">
    			<div class="all-products-section-wrapper">
                    <div class="main-title-section-heading button-heading-wrap">
                        <header class="entry-header">
                            <span class="title-label"><?php _e('Proizvodi', 'mwns'); ?></span>
                            <h1 class="entry-title"><?php _e('Proizvodi iz iste kategorije', 'mwns'); ?></h1>
                        </header>
                        <div class="see-all-items most-popular-posts-button see-all-posts">
                            <div class="posts-read-more read-more-button-wrap">
                                <?php 
                                    if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="button button-tertiary button-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i class="icon icon-arrow-right"></i></a>
                                <?php endif; ?>
                            </div>
                        </div> 
                    </div>

					
					
					<?php
							// get the custom post type's taxonomy terms

							$cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-proizvoda',true);
					
							$args = array(
								'post_type' => 'proizvod',
								'post_status' => 'publish',
								'posts_per_page' => 4, // you may edit this number
								'orderby' => 'rand',
								'post__not_in' => array ( $post->ID ),
								'update_post_meta_cache' => false,
								'update_post_term_cache' => false,
								'ignore_sticky_posts' => true,
								'tax_query' => array(
									array(
										'taxonomy' => 'kategorija-proizvoda',
										'field' => 'id',
										'terms' => [$cat_id]
									)
								)
							);
							$related_items = new WP_Query( $args );
							// loop over query
							if ( $related_items->have_posts() ) : ?>
								
								<div class="product-cards-wrapper category-cards-wrapper col-md-12">
									<div class="row category-row">
							
										<?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
										
											<div class="col-md-3 col-sm-6 product-card-item category-card-item">
												<a class="category-card-link" href="<?php the_permalink(); ?>">
													<div class="term-featured-image-wrap">
														<?php if ( has_post_thumbnail() ) { ?>
															<div class="term-featured-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>')">
															</div>
														<?php } else { ?>
															<div class="term-featured-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
															</div>
														<?php } ?>
													</div>
													<h2 class="product-card-title"><?php the_title(); ?></h2>
													<div class="product-card-description"><?php the_excerpt(); ?></div>
													<?php $insert_your_price = get_field('insert_your_price');
													if( $insert_your_price ): ?>
														<div class="price-info">
															<div class="price-field-element">
																<p><span><?php _e('Cena: ','mwns'); ?></span><?php echo $insert_your_price; ?><span><?php _e(' RSD','mwns'); ?></span></p>
															</div>
														</div>
													<?php endif; ?>
													<span class="link link-tertiary link-arrow"><span><?php _e('Vi??e o proizvodu', 'mwns') ?></span> <i class="icon icon-arrow-right"></i></span>
												</a>
											</div>
							
										<?php endwhile; ?>
							
									</div>
								</div>

							<?php endif;
							// Reset Post Data
							wp_reset_postdata();
						?>


					<?php //dynamic_sidebar( 'single-product-widget' ); ?>
					

				</div>  <!-- /.all-products-section-wrapper -->
			</div>  <!-- /.all-products-section col-md-12 -->

		</div> <!-- /.row row-single-page single-post-product-content-wrapper -->
	</div><!-- .container -->
</article><!-- #post-## -->



