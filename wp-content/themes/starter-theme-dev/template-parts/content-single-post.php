<?php
/**
 * Template part for displaying single posts.
 *
 * @package mwns
 */

?>
<?php 
	$top_main_image = get_field('top_main_image');
	$content_section_f = get_field('content_section_f');
	$half_column_section_f = get_field('half_column_section_f');
	$half_column_section_s = get_field('half_column_section_s');
	$content_section_s = get_field('content_section_s');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( $top_main_image ) : ?>
		<div class="col-md-12">
			<div class="single-post-main-image-wrapper" style="background-image: url('<?php echo esc_url($top_main_image['url']); ?>')">
			</div> <!-- /.single-post-main-image-wrapper -->
		</div>
	<?php else: ?>
		<div class="col-md-12">
			<div class="single-post-main-image-wrapper" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
			</div> <!-- /.single-post-main-image-wrapper -->
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<div class="col-md-12">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php if (get_the_date()): ?>
				<div class="post-date-published">
					<?php _e('Članak objavljen:','mwns') ?> <span><?php the_date(); ?></span>
				</div>
			<?php endif; ?>
		</div>
	</header><!-- .entry-header -->

	<?php if ( $content_section_f ) : ?>
		<div class="entry-content single-post-row row">
			<div class="col-md-12 single-post-content-full-width">
				<?php echo $content_section_f; ?>
			</div> <!-- /.col-md-12 single-post-content-full-width -->
		</div><!-- .entry-content -->
	<?php endif; ?>

	<?php if ( $half_column_section_f || $half_column_section_s ) : ?>
		<div class="entry-content single-post-row row">
			<div class="col-md-6 single-post-content-half">
				<?php echo $half_column_section_f; ?>
			</div> <!-- /.col-md-6 single-post-content-half -->
			<div class="col-md-6 single-post-content-half">
				<?php echo $half_column_section_s; ?>
			</div> <!-- /.col-md-6 single-post-content-half -->
		</div><!-- .entry-content -->
	<?php endif; ?>

	<?php if ( $content_section_s ) : ?>
		<div class="entry-content single-post-row row">
			<div class="col-md-12 single-post-content-full-width">
				<?php echo $content_section_s; ?>
			</div> <!-- /.col-md-12 single-post-content-full-width -->
		</div><!-- .entry-content -->
	<?php endif; ?>

</article><!-- #post-## -->

