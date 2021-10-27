<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mwns
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php if (have_posts()) : ?>
                    <div class="most-popular-posts-section-wrapper">
                        <header class="entry-header page-header col-md-12 main-title-section-heading">
                            <span class="title-label"><?php _e('Autor', 'mwns'); ?></span>
                            <h1 class="entry-title"><?php echo mwns_archive_title(); ?></h1>
                        </header>
						<div class="posts-items-cards-wrapper post-product-items-cards-wrapper col-md-12">
							<div class="row post-posts-items-cards-row">
								<?php while ( have_posts() ) : ?>
									<?php
                                        the_post();
                                        /*
                                        * Include the Post-Format-specific template for the content.
                                        * If you want to override this in a child theme, then include a file
                                        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                        */
                                        // get_template_part( 'template-parts/content', get_post_format() );
                                        get_template_part( 'template-parts/content', 'posts' );
									?>
								<?php endwhile; ?>
							</div> <!-- /.row post-posts-items-cards-row -->
						</div> <!-- /.posts-items-cards-wrapper post-product-items-cards-wrapper col-md-12 -->
					</div> <!-- /.most-popular-products-section-wrapper -->
                    <?php mwns_post_navigation(); ?>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
