<?php 
	$newsletter_title = get_field('newsletter_title', 'option');
	$newsletter_shortcode = get_field('newsletter_shortcode', 'option');
?>

<section class="newsletter-section">
    <div class="newsletter-section-wrapper">
        <div class="newsletter-section-inner">
            <div class="container">
                <div class="newsletter-row-wrapper">
                    <div class="row newsletter-row">
                        <?php if($newsletter_title || $newsletter_shortcode): ?>
                            <div class="col-md-12 newsletter-heading-cta">
                                <header class="entry-header align-center">
                                    <h1 class="entry-title"><?php echo $newsletter_title; ?></h1>
                                </header>
                                <div class="newsletter-form-cta">
                                    <?php echo $newsletter_shortcode; ?>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div> <!-- /.newsletter-row-wrapper -->
            </div>
                
        </div>
    </div>
</section>