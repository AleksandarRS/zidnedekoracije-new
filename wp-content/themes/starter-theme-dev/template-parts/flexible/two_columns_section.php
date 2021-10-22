<?php
$main_title = get_sub_field('main_title');
$add_your_content_f = get_sub_field('add_your_content_f');
$add_your_content_s = get_sub_field('add_your_content_s');

$contact_class = get_sub_field('contact_class');
?>
<section class="two-column-section">
    <div class="two-column-section-wrapper">
        <div class="container">
            <div class="row two-column-row<?php if ( $contact_class ) : ?> <?php echo $contact_class; ?><?php endif; ?>">
                <?php if ( $main_title ) : ?>
                    <div class="col-md-12 main-title-section-heading align-center">
                        <header>
                            <h1 class="title-h2-size"><?php echo $main_title; ?></h1>
                        </header>
                    </div>
                <?php endif; ?>
                <?php if ( $add_your_content_f ) : ?>
                    <div class="col-md-6 main-content-section">
                        <?php echo $add_your_content_f; ?>
                    </div>
                <?php endif; ?>
                <?php if ( $add_your_content_s ) : ?>
                    <div class="col-md-6 main-content-section">
                        <?php echo $add_your_content_s; ?>
                    </div>
                <?php endif; ?>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.two-column-section-wrapper -->
</section> <!-- /.two-column-section -->