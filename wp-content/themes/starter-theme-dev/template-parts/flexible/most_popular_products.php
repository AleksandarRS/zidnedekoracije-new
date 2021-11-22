<?php
$main_title = get_sub_field('main_title');
$link = get_sub_field('see_all_products_link');

// $choose_most_popular_products = get_sub_field('choose_most_popular_products');
?>
<section class="most-popular-products-section all-products-section">
    <div class="most-popular-products-section-wrapper all-products-section-wrapper">
        <div class="container">
            <div class="row most-popular-products-row">
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

                
                <?php  $featured_posts = get_sub_field('choose_most_popular_products');
                if( $featured_posts ): ?>

                    <div class="product-cards-wrapper category-cards-wrapper col-md-12">
                        <div class="row category-row">

                            <?php foreach( $featured_posts as $post ): 
                                setup_postdata($post); ?>
                                
                                

                                <div class="col-md-3 col-sm-6 product-card-item category-card-item">
                                    <a class="category-card-link" href="<?php the_permalink(); ?>">
                                        <?php if( get_the_post_thumbnail() ): ?>
                                            <div class="term-featured-image-wrap">
                                                <div class="term-featured-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                                    <div class="term-name">
                                                        <?php $term_list = wp_get_post_terms($post->ID, 'kategorija-proizvoda', ['fields' => 'all']);
                                                            foreach($term_list as $term) {
                                                                if( get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-proizvoda',true) == $term->term_id ) { ?>
                                                                    <span><?php print $term->name ; ?></span>
                                                                <?php }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="term-featured-image-wrap">
                                                <div class="term-featured-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                                    <div class="term-name">
                                                        <?php   // Get terms for post
                                                        //     $terms = get_the_terms( $post->ID , 'kategorija-proizvoda' );
                                                        //     // Loop over each item since it's an array
                                                        //     if ( $terms != null ){
                                                        //     foreach( $terms as $term ) { ?>
                                                                <!-- <span><?php // print $term->name ; ?></span> -->
                                                             <?php // unset($term);
                                                        // } } ?>
                                                        <?php $term_list = wp_get_post_terms($post->ID, 'kategorija-proizvoda', ['fields' => 'all']);
                                                            foreach($term_list as $term) {
                                                                if( get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-proizvoda',true) == $term->term_id ) { ?>
                                                                    <span><?php print $term->name ; ?></span>
                                                                <?php }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <h2 class="product-card-title"><?php the_title(); ?></h2>
                                        <div class="product-card-description"><?php the_excerpt(); ?></div>
                                        <?php $insert_your_price = get_field('insert_your_price');
                                         if( $insert_your_price ): ?>
                                            <div class="price-info">
                                                <div class="price-field-element">
                                                    <p><span><?php _e('Cena: ','mwns'); ?></span><?php echo $insert_your_price; ?><span><?php _e(' RSD','mwns'); ?></span></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <span class="link link-tertiary link-arrow"><span><?php _e('Više o proizvodu', 'mwns') ?></span> <i class="icon icon-arrow-right"></i></span>
                                    </a>
                                </div>

                            <?php endforeach; ?>

                        </div> <!-- /.row category-row -->
                    </div> <!-- /.product-cards-wrapper category-cards-wrapper col-md-12 -->
                    <?php 
                        // Reset the global post object so that the rest of the page works correctly.
                        wp_reset_postdata(); ?>
                    
                <?php endif; ?>
                

            </div> <!-- /.row most-popular-products-row -->
        </div> <!-- /.container -->

    </div> <!-- /.most-popular-products-section-wrapper -->
</section>

