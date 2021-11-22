<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mwns
 */

?>
				<?php 
					$newsletter_title = get_field('newsletter_title', 'option');
					$newsletter_shortcode = get_field('newsletter_shortcode', 'option');
				?>
				<?php if( !is_front_page() ): ?>
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
				<?php endif; ?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="widget-wrapper">
					<div class="container">
						<div class="row footer-widgets-wrapper">
							<?php get_template_part('template-parts/footer', 'widgets'); ?>
						</div>
					</div>
				</div>
				<?php if (get_theme_mod('footer_customizer_text') != ''): ?>
					<div class="site-info">
						<div class="container">
							<div class="footer-copyright col-md-12">
								<p><?php echo get_theme_mod('footer_customizer_text'); ?></p>
								<div class="footer-copyright-menu">
									<nav id="footer-navigation" class="footer-navigation" role="navigation">
										<?php wp_nav_menu(
											array(
												'theme_location' 		=> 	'copyright',
												'menu_id' 				=> 	'copyright-menu',
												'menu_class' 			=> 	'main-footer-menu',
												'container_class'		=>	'copyright-menu-container'
											)
										); ?>
									</nav><!-- #site-navigation -->
								</div>
							</div>
						</div>
					</div><!-- .site-info -->
				<?php endif; ?>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<!-- W3TC-include-css -->
		<?php wp_footer(); ?>
	<!-- W3TC-include-js-head -->
	</body>
</html>
