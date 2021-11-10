<?php

// $link = get_sub_field('see_all_posts_link');
// $choose_most_popular_products = get_sub_field('choose_most_popular_products');

?>
<section class="products-slider-section">
    <div class="products-slider-section-wrapper">
        <div class="container-wide-full">
                <?php  $featured_products_posts = get_sub_field('choose_slider_products');
                if( $featured_products_posts ): ?>
                    <div class="products-slider-wrapper">
                        <?php foreach( $featured_products_posts as $post ): 
                            setup_postdata($post); 
                            $slider_short_description = get_field('slider_short_description'); ?>
                            <div class="products-slider-item">
                                    <?php if( get_the_post_thumbnail() ): ?>
                                        <div class="products-featured-img-wrap" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                        </div>
                                    <?php else: ?>
                                        <div class="products-featured-img-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                        </div>
                                    <?php endif; ?>
                                    <div class="products-heading-excerpt-button-wraper">
                                        <div class="container">
                                            <div class="row products-row">
                                                <div class="col-md-12 product-details-wrap">
                                                    <div class="products-heading-excerpt-wrap">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <header class="products-title entry-header">
                                                                <span class="title-label"><?php _e('Proizvod', 'mwns') ?></span>
                                                                <h2 class="entry-title"><?php the_title(); ?></h2>
                                                                <div class="products-description entry-content">
                                                                    <?php echo $slider_short_description; ?>
                                                                </div>
                                                            </header>
                                                        </a>
                                                    </div>
                                                    <div class="products-product-read-more read-more-button-wrap button-wrap">
                                                        <a href="<?php the_permalink(); ?>" class="button button-transparent button-arrow"><span><?php _e('Pročitaj više','mwns'); ?> <i class="icon icon-arrow-right"></i></span></a>
                                                    </div>
                                                </div> <!-- /.col-md-12 product-details-wrap -->
                                            </div> <!-- /.row products-row -->
                                        </div> <!-- /.container -->
                                    </div> <!-- /.products-heading-excerpt-button-wraper -->
                                    <div class="slick-slider-dots">
                                        <p class="pagination-title"><span><?php the_title(); ?></span></p>
                                    </div>
                            </div> <!-- /.products-slider-item -->
                            
                        <?php endforeach; ?>
                        
                    </div> <!-- /.products-slider-wrapper -->
                    
                        <?php 
                        // Reset the global post object so that the rest of the page works correctly.
                        wp_reset_postdata(); ?>
                <?php endif; ?>

        
        </div> <!-- /.container-wide -->
    </div> <!-- /.products-slider-section-wrapper -->
</section>

