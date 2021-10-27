<?php
/**
 * The template for displaying all single posts.
 *
 * @package mwns
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="content-area col-md-12 col-sm-12">
			<main id="main" class="site-main" role="main">
				<div class="single-post-content-wrapper">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'single-post' ); ?>

						<div class="post-navigation">
							<div class="container">
								<div class="navigation">
									<?php previous_post_link('%link', '<i class="icon icon-left icon-arrow-left"></i> ' . '<span>' . __('Prethodni članak', 'mwns') . '</span>'); ?>

									<?php next_post_link('%link', '<span>' . __('Sledeći članak', 'mwns') . '</span>' . ' <i class="icon icon-right icon-arrow-right"></i>'); ?>
								</div>
							</div>
						</div>
						
						<?php get_template_part( 'template-parts/post', 'author' );
						
					endwhile; // End of the loop.
					?>
				</div> <!-- /.single-post-content-wrapper -->
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php //get_sidebar(); ?>
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
