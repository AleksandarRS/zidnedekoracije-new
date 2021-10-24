<?php
/**
 * The template for displaying all single posts.
 *
 * @package mwns
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="content-area col-md-12">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'single-proizvod' );

					the_post_navigation();
					
					get_template_part( 'template-parts/post', 'author' );
					
				endwhile; // End of the loop.
				?>
				   
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
