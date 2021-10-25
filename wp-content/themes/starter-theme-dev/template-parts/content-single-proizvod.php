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

$page_main_content_description = get_field('page_main_content_description');

$order_product_description = get_field('order_product_description');

$order_product_text_content = get_field('order_product_text_content', 'option');
$order_product_form_content = get_field('order_product_form_content', 'option');


$instructions_section_title = get_field('instructions_section_title');
$instructions_section_description = get_field('instructions_section_description');

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<div class="row row-single-page single-post-content-wrapper">
		<?php if( have_rows('page_slider_images') ): ?>
			<div class="single-page-main-slider-wrapper col-md-6">
				<div class="single-page-main-slider">
					<?php while ( have_rows('page_slider_images') ) : the_row(); ?>
						<?php $single_slider_image = get_sub_field('single_slider_image'); ?>
						<?php if( $single_slider_image ): ?>
							<div class="single-page-img-wrap">
								<div class="single-page-img" style="background-image: url(<?php echo esc_url($single_slider_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($single_slider_image['alt']); ?>">
								</div>
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
				<span class="title-label"><?php echo $slider_short_description; ?></span>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php echo $page_main_content_description; ?>
				<?php 
					if( $add_video_link ): 
						$link_url = $add_video_link['url'];
						$link_title = $add_video_link['title'];
						$link_target = $add_video_link['target'] ? $link['target'] : '_self';
					?>
					<div class="single-page-video-button single-page-button-wrap">
						<a class="button button-secondary-outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
				<?php endif; ?>

				<?php if( $order_product_option == true ): ?>
					<div class="single-page-button-wrap order-product-button">
						<span id="order-product-button" class="button button-tertiary" href="#"><?php _e('Naručite proizvod', 'mwns'); ?></span>
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
	</div> <!-- /.row row-single-page single-post-content-wrapper -->

	<div class="tabs">
		<div class="instructions-section">
			<div class="instructions-section-description-wrapper col-md-6">
				<header class="main-title-section-heading entry-header">
					<h2 class="entry-title"><?php echo $instructions_section_title; ?></h2>
				</header><!-- .entry-header -->
				<?php echo $instructions_section_description; ?>
				<?php if( have_rows('instructions_stages') ): ?>
					<div class="title-label-tabs title-label-wrap">
						<?php $i = 0; ?>
						<ul class="tab-nav">
							<?php while ( have_rows('instructions_stages') ) : the_row(); ?>
								<li><a href='#content-<?php echo $i; ?>'><h5><?php the_sub_field('instruction_label_title'); ?></h5></a></li>
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
		</div>
	</div>
</article><!-- #post-## -->

