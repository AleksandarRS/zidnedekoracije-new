<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mwns
 */

get_header(); ?>

<?php
    // $term = get_queried_object();
    // $image = get_field('category_image', $term);
    // $short_category_description = get_field('short_category_description', $term);
    $main_title = get_field('main_title', 'option');
    $image = get_field('hero_image', 'option');
    $short_description = get_field('short_description', 'option');

    $products_content_label = get_field('products_content_label', 'option');
    $products_content_title = get_field('products_content_title', 'option');
?>

<section class="hero-section hero-section-small">
    <div class="hero-section-small-media-wrap">
        
        <div class="hero-section-small-image-wrap" style="background-image: url(<?php echo $image; ?>)">
            <div class="main-title-section-heading">
                <header class="entry-header page-header align-center">
                    <?php if( $main_title): ?>
                        <h1 class="page-title main-hero-title main-title"><?php echo $main_title; ?></h1>
                    <?php else:?>
                        <?php echo mwns_archive_title('<h1 class="page-title main-hero-title main-title">', '</h1>'); ?>
                    <?php endif;?>
                    <div class="col-md-12 main-hero-description align-center">
                        <?php echo $short_description; ?>
                    </div>
                </header><!-- .entry-header page-header align-center -->
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

<div class="container">
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main " role="main">
                <?php if (have_posts()) : ?>
                    <div class="archive-products-wrapper">
                        <?php if( $main_title): ?>
                            <header class="entry-header page-header col-md-12 main-title-section-heading">
                                <span class="title-label"><?php echo $products_content_label; ?></span>
                                <h1 class="entry-title"><?php echo $products_content_title; ?></h1>
                            </header><!-- .entry-header page-header col-md-12 main-title-section-heading -->
                        <?php endif;?>
                        
                        <?php /* Start the Loop */ ?>
                        <?php $terms = get_terms( array( 
                                'taxonomy' => 'kategorija-proizvoda',
                                'parent'   => 0
                            ) );
                            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
                                <div class="product-cards-wrapper category-cards-wrapper col-md-12">
                                    <div class="row category-row">
                                        <?php foreach ( $terms as $term ) { ?>
                                            <div class="col-md-3 product-card-item category-card-item">
                                                <a class="category-card-link" href="<?php echo get_term_link($term->term_id); ?>">
                                                    <div class="term-featured-image-wrap">
                                                        <div class="term-featured-image" style="background-image: url('<?php the_field('category_image', $term); ?>')">
                                                        </div>
                                                    </div>
                                                    <h2 class="product-card-title"><?php echo $term->name; ?></h2>
                                                    <div class="product-card-description"><?php the_field('short_category_description', $term); ?></div>
                                                    <span class="link link-tertiary link-arrow"><span><?php _e('Više o proizvodu', 'mwns') ?></span> <i class="icon icon-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        <?php  } ?>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php mwns_post_navigation(); ?>
                    </div> <!-- /.archive-products-wrapper -->
                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>


                <?php endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
