<?php
$title_label_field = get_sub_field('title_label_field');
$textimage_position = get_sub_field('textimage_position');

$text_content_section = get_sub_field('text_content_section');
$main_image = get_sub_field('main_image');

$select_your_url = get_sub_field('select_your_url');

$section_icon = get_sub_field('section_icon');
$section_icon_text_description = get_sub_field('section_icon_text_description');
$section_icon_second = get_sub_field('section_icon_second');
$section_icon_text_description_second = get_sub_field('section_icon_text_description_second');
$section_icon_third = get_sub_field('section_icon_third');
$section_icon_text_description_third = get_sub_field('section_icon_text_description_third');
?>
<section class="image-text-section<?php if ( $imagetext_position == true ): ?> image-first-text-second<?php else: ?> text-first-image-second<?php endif; ?>">
    <div class="image-text-section-wrapper">
        <div class="container">
            <div class="row image-text-row">
                <?php if ( $main_image ) : ?>
                    <div class="col-md-6 image-text-section-main-image">
                        <div class="image-text-section-main-image-inner">
                            <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>" />
                        </div> <!-- /.image-text-section-main-image -->
                    </div>
                <?php endif; ?>
                <?php if ( $text_content_section || $select_your_url ) : ?>
                    <div class="col-md-6 image-text-section-main-text-content-description">
                        <div class="image-text-section-main-text-content-description-inner">
                            <?php if ( $title_label_field ) : ?>
                                <span class="title-label"><?php echo $title_label_field; ?></span>
                            <?php endif; ?>
                            <?php echo $text_content_section; ?>
                        </div> <!-- /.image-text-section-main-image -->
                        <?php if ( $select_your_url ) : ?>
                            <div class="image-text-section-read-more-button-wrap read-more-button-wrap">
                                <a class="button button-tertiary button-arrow" href="<?php echo $select_your_url; ?>"><?php _e('Saznaj više','mwns'); ?> <i class="icon icon-arrow-right"></i></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div> <!-- /.row -->
            <div class="row icon-desc-row">
                <?php if ( $section_icon || $section_icon_text_description ) : ?>
                    <div class="col-md-4 icon-description-item">
                        <div class="icon-wrap">
                            <img src="<?php echo esc_url($section_icon['url']); ?>" alt="<?php echo esc_attr($section_icon['alt']); ?>" />
                        </div>
                        <div class="short-desc-wrap">
                            <?php echo $section_icon_text_description; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ( $section_icon_second || $section_icon_text_description_second ) : ?>
                    <div class="col-md-4 icon-description-item">
                        <div class="icon-wrap">
                            <img src="<?php echo esc_url($section_icon_second['url']); ?>" alt="<?php echo esc_attr($section_icon_second['alt']); ?>" />
                        </div>
                        <div class="short-desc-wrap">
                            <?php echo $section_icon_text_description_second; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ( $section_icon_third || $section_icon_text_description_third ) : ?>
                    <div class="col-md-4 icon-description-item">
                        <div class="icon-wrap">
                            <img src="<?php echo esc_url($section_icon_third['url']); ?>" alt="<?php echo esc_attr($section_icon_third['alt']); ?>" />
                        </div>
                        <div class="short-desc-wrap">
                            <?php echo $section_icon_text_description_third; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div> <!-- /.container container -->
    </div> <!-- /.image-text-section-wrapper -->
</section>