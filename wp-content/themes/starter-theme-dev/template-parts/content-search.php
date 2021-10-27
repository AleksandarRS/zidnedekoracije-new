<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mwns
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-resoults-section'); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php mwns_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<div class="posts-read-more read-more-button-wrap">
				<a class="button button-tertiary button-arrow" href="<?php the_permalink(); ?>" target="_self"><?php _e('Pročitaj opširnije','mwns') ?><i class="icon icon-arrow-right"></i></a>
		</div>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php mwns_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

