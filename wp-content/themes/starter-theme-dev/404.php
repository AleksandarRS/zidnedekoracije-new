<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package mwns
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <section class="error-404 not-found align-center">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e('Nije moguće pronaći ovu stranicu.',
                                'mwns'); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php esc_html_e('Ovde nismo ništa uspeli da pronađemo. Možda da pokušate putem pretrage ili da se vratite nazad na početnu stranicu?', 'mwns'); ?></p>
                        <div class="back-to-home">
                            <a class="button button-tertiary button-arrow left" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><i class="icon icon-arrow-left"></i> <?php _e('Vratite se na početnu', 'mwns') ?></a>
                        </div>
                    </div><!-- .page-content -->
                </section><!-- .error-404 not-found align-center -->
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
