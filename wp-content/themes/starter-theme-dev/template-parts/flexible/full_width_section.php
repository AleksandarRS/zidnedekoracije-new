<?php
$main_title = get_sub_field('main_title');
$add_your_content = get_sub_field('add_your_content');
?>
<section class="full-width-section">
    <div class="full-width-section-wrapper">
        <div class="container">
            <div class="row full-width-row">
                <?php if ( $main_title ) : ?>
                    <div class="col-md-12 main-title-section-heading align-center">
                        <header>
                            <h1 class="title-h2-size"><?php echo $main_title; ?></h1>
                        </header>
                    </div>
                <?php endif; ?>
                <?php if ( $add_your_content ) : ?>
                    <div class="col-md-12 main-content-section">
                        <?php echo $add_your_content; ?>
                    </div>
                <?php endif; ?>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.full-width-section-wrapper -->
</section> <!-- /.full-width-section -->