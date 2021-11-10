<?php
$main_title = get_sub_field('main_title');
$title_label_field = get_sub_field('title_label_field');

$link = get_sub_field('see_all_products_link');
?>

<section class="all-products-section">
    <div class="all-products-section-wrapper">
        <div class="container">
            <div class="row all-products-row">
                <?php if ( $main_title ) : ?>
                    <div class="col-md-12 main-title-section-heading button-heading-wrap">
                        <header class="entry-header">
                            <?php if ( $title_label_field ) : ?>
                                <span class="title-label"><?php echo $title_label_field; ?></span>
                            <?php endif; ?>
                            <h1 class="entry-title"><?php echo $main_title; ?></h1>
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
                <?php endif; ?>

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
                                        <!-- <div class="term-featured-image-wrap">
                                            <div class="term-featured-image" style="background-image: url('<?php // the_field('category_image', $term); ?>')">
                                            </div>
                                        </div> -->
                                        <div class="term-featured-image-wrap">
                                            <?php if ( ! empty( get_field('category_image', $term) ) ) { ?>
                                                <div class="term-featured-image" style="background-image: url('<?php the_field('category_image', $term); ?>')">
                                                </div>
                                            <?php } else { ?>
                                                <div class="term-featured-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                                </div>
                                            <?php } ?>
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

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.all-products-section-wrapper -->
</section> <!-- /.all-products-section -->

