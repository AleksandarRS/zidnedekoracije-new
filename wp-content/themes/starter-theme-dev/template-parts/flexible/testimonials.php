<?php
$main_title = get_sub_field('main_title');
?>

<section class="testimonials-section">
    <div class="testimonials-section-wrapper">
        <div class="container">
            <div class="row testimonials-row">
                <?php if ( $main_title ) : ?>
                    <div class="col-md-12 main-title-section-heading">
                        <header class="entry-header">
                            <h1 class="entry-title"><?php echo $main_title; ?></h1>
                        </header>
                    </div>
                <?php endif; ?>
                <?php
                    $args = array(
                        'post_type' 		=> 'testimonials',
                        'posts_per_page'	=> -1
                    );

                    $query = new WP_Query( $args );
                    ?>
                    
                    <?php if ( $query->have_posts() ) : ?>
                        <div class="col-md-12 main-content-testimonials-section-wrap entry-content">
                            <div class="testimonials-slider">
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="testimonials-slider-item">
                                    <div class="testimonials-star-review">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star-review-image.png')" alt="star review image">
                                    </div>
                                    <?php the_content(); ?>
                                    <div class="author-name">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php wp_reset_query(); ?>

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.testimonials-section-wrapper -->
</section> <!-- /.testimonials-section -->