<?php
$main_bg_image = get_sub_field('main_bg_image');

$title_label_field = get_sub_field('section_label');
$main_text_content = get_sub_field('main_text_content');

$link = get_sub_field('select_your_url');

?>

<section class="product-description-section container-wide-full">
    <div class="product-description-section-wrapper" area-label="<?php echo esc_attr($main_bg_image['alt']); ?>" role="img" style="background-image: url('<?php echo esc_url($main_bg_image['url']); ?>')">
        <div class="container">
            <div class="row product-description-row">
                <?php if ( $main_text_content || $link ) : ?>
                    <div class="col-md-6 product-description-section-content">
                        <div class="product-description-section-content-inner">
                            <?php if ( $title_label_field ) : ?>
                                <span class="title-label"><?php echo $title_label_field; ?></span>
                            <?php endif; ?>
                            <?php echo $main_text_content; ?>

                            <?php 
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <div class="read-more-button-wrap">
                                    <a class="button button-tertiary button-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i class="icon icon-arrow-right"></i></a>
                                </div>
                            <?php endif; ?>

                        </div> <!-- /.product-description-section-content-inner -->
                        
                    </div> <!-- /.col-md-6 product-description-section-content -->
                <?php endif; ?>


                <?php if( have_rows('add_section_items') ): ?>
                    <div class="col-md-6 product-description-repeater-section">
                        <?php $i = 1; ?>
                        <?php while ( have_rows('add_section_items') ) : the_row(); ?>
                            <div class="product-number-description-repeater-item">
                                <div class="increase-number">
                                    <span><?php echo $i . '.'; ?></span>
                                </div>
                                <div class="product-description">
                                    <h5><?php the_sub_field('item_title'); ?></h5>
                                    <div><?php the_sub_field('item_description'); ?></div>
                                </div>
                                <?php $i++; ?>
                            </div> <!-- /.product-number-description-repeater-item -->
                        <?php endwhile; ?>
                    </div> <!-- /.col-md-6 product-description-repeater-section -->
                <?php  else : ?>
                    
                <?php endif;?>

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.testimonials-section-wrapper -->
</section> <!-- /.testimonials-section -->