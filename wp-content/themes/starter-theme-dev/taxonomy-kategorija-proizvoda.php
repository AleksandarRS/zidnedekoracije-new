<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mwns
 */

get_header(); ?>


        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            <section class="hero-section hero-section-small">
                <div class="hero-section-small-media-wrap">
                    <?php
                        $term = get_queried_object();
                        $image = get_field('category_image', $term);
                        $short_category_description = get_field('short_category_description', $term);
                    ?>
                    <div class="hero-section-small-image-wrap" style="background-image: url(<?php echo $image; ?>)">
                        <div class="main-title-section-heading">
                            <header class="page-header align-center">
                                <?php echo mwns_archive_title('<h1 class="page-title main-hero-title main-title">', '</h1>'); ?>
                                <div class="col-md-12 main-hero-description align-center">
                                    <?php echo $short_category_description; ?>
                                </div>
                            </header><!-- .page-header align-center -->
                        </div> <!-- /.main-title-section-heading -->
                    </div> <!-- /.hero-section-small-image-wrap -->
                </div> <!-- /.hero-section-small-media-wrap -->
            </section>
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
            <?php 
                $term_children = get_terms( 'kategorija-proizvoda',
                array(
                    'parent' => get_queried_object_id(),
                ) );
                if ( ! empty( $term_children ) && ! is_wp_error( $term_children ) ) { ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 archive-product-cards-wrapper">
                            <div class="archive-text-description-wrapper">
                                <?php the_archive_description('<div class="taxonomy-description">', '</div>'); ?>
                            </div>
                            <div class="product-cards-wrapper category-cards-wrapper">
                                <div class="row category-row">
                                    <?php foreach ( $term_children as $term ) { ?>
                                        <div class="col-md-6 product-card-item category-card-item product-category-style">
                                            <a class="category-card-link" href="<?php echo get_term_link($term->term_id); ?>">
                                                <div class="term-featured-image-wrap">
                                                    <?php if ( ! empty( get_field('category_image', $term) ) ) { ?>
                                                        <div class="term-featured-image" style="background-image: url('<?php the_field('category_image', $term); ?>')">
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="term-featured-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="category-title-excerpt-button-wrapper">
                                                    <h2 class="product-card-title"><?php echo $term->name; ?></h2>
                                                    <div class="product-card-description"><?php the_field('short_category_description', $term); ?></div>
                                                    <!-- <span class="link link-tertiary link-arrow"><span><?php // _e('Više o proizvodu', 'mwns') ?></span> <i class="icon icon-arrow-right"></i></span> -->
                                                </div>
                                            </a>
                                        </div>
                                    <?php  } ?>
                                </div>
                            </div> <!-- /.product-cards-wrapper category-cards-wrapper -->
                        </div> <!-- /.archive-product-cards-wrapper -->
                    </div><!-- .row -->
                </div><!-- .container -->
                <?php } else { ?>

                    <?php if (have_posts()) : ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 archive-product-cards-wrapper">

                                    <!-- <div class="main-title-section-heading"> -->
                                        <!-- <header class="page-header align-center">
                                            <?php
                                            //echo mwns_archive_title('<h1 class="page-title">', '</h1>');
                                            // the_archive_description('<div class="taxonomy-description">', '</div>');
                                            ?>
                                        </header>  --> <!-- .page-header align-center -->
                                    <!-- </div>  --> <!-- /.main-title-section-heading -->
                                
                                    <?php /* Start the Loop */ ?>
                                    <div class="product-cards-wrapper category-cards-wrapper">
                                        <div class="row category-row">
                                            <?php while (have_posts()) : the_post(); ?>
                                                <?php
                                                /*
                                                * Include the Post-Format-specific template for the content.
                                                * If you want to override this in a child theme, then include a file
                                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                                */
                                                //get_template_part('template-parts/content', get_post_format());
                                                ?>
                                                <div class="col-md-3 product-card-item category-card-item">
                                                    <a class="category-card-link" href="<?php the_permalink(); ?>">
                                                        <div class="term-featured-image-wrap">
                                                            <?php if ( ! empty( get_the_post_thumbnail_url() ) ) { ?>
                                                                <div class="term-featured-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="term-featured-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                        <h2 class="product-card-title"><?php the_title(); ?></h2>
                                                        <div class="product-card-description"><?php the_excerpt(); ?></div>
                                                        <span class="link link-tertiary link-arrow"><span><?php _e('Više o proizvodu', 'mwns') ?></span> <i class="icon icon-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            <?php endwhile; ?>
                                            <?php mwns_post_navigation(); ?>
                                        </div> <!-- /.row category-rowr -->
                                    </div> <!-- /.product-cards-wrapper category-cards-wrapper -->
                                    <?php else : ?>
                                    <?php get_template_part('template-parts/content', 'none'); ?>

                                </div> <!-- /.col-md-12 archive-product-cards-wrapper -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    <?php endif; ?>
                <?php  } ?>
                

            </main><!-- #main -->
        </div><!-- #primary -->

<?php get_footer(); ?>
