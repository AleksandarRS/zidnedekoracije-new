<?php
/**
 * Template part for displaying posts.
 *
 * @package mwns
 */

?>

<?php 
	$blog_hero_image = get_field('blog_hero_image', 'option');
	$blog_title = get_field('blog_title', 'option');
	$blog_short_description = get_field('blog_short_description', 'option');
?>

<section class="hero-section hero-section-small">
    <div class="hero-section-small-media-wrap">
		<?php if ( $blog_title || $blog_hero_image ) : ?>
			<div class="hero-section-small-image-wrap" style="background-image: url(<?php echo esc_url($blog_hero_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($blog_hero_image['alt']); ?>">
				<div class="container container-narrow">
					<div class="row image-text-row">
						<div class="col-md-12 main-title-section-heading align-center">
							<?php if ( $blog_title ) : ?>
								<header>
									<h1 class="main-hero-title main-title"><?php echo $blog_title; ?></h1>
									<?php if ( $blog_short_description ) : ?>
										<div class="col-md-12 main-hero-description align-center">
											<?php echo $blog_short_description; ?>
										</div>
									<?php endif; ?>
								</header>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div> <!-- /.hero-section-small-image-wrapl -->
		<?php endif; ?>
    </div> <!-- /.hero-section-small-media-wrap -->
</section> <!-- /.hero-section hero-section-small -->
