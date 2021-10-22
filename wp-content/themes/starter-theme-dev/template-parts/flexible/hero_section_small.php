<?php
$main_hero_title = get_sub_field('main_hero_title');
$hero_description_small = get_sub_field('hero_description_small');
$hero_image = get_sub_field('hero_image');
?>
<section class="hero-section hero-section-small">
    <div class="hero-section-small-media-wrap">
        <div class="hero-section-small-image-wrap" style="background-image: url(<?php echo esc_url($hero_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($hero_image['alt']); ?>">
            <div class="container container-narrow">
                <div class="row image-text-row">
                    <div class="col-md-12 main-title-section-heading align-center">
                        <?php if ( $main_hero_title ) : ?>
                            <header>
                                <h1 class="main-hero-title main-title"><?php echo $main_hero_title; ?></h1>
                                <?php if ( $hero_description_small ) : ?>
                                    <div class="col-md-12 main-hero-description align-center">
                                        <?php echo $hero_description_small; ?>
                                    </div>
                                <?php endif; ?>
                            </header>
                        <?php else: ?>
                            <header>
                                <h1 class="main-hero-title main-title"><?php the_title(); ?></h1>
                                <?php if ( $hero_description_small ) : ?>
                                    <div class="col-md-12 main-hero-description align-center">
                                        <?php echo $hero_description_small; ?>
                                    </div>
                                <?php endif; ?>
                            </header>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div> <!-- /.hero-section-small-image-wrapl -->
    </div> <!-- /.hero-section-small-media-wrap -->
</section>