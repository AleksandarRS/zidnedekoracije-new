<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mwns
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<?php echo wp_kses( get_theme_mod( 'google_analytics_code' ), [ 'script' => [] ] ); ?>
	<meta name="theme-color" content="#010101">
</head>

<?php 
	$header_contact_title = get_field('header_contact_title', 'option');
	$header_contact_number = get_field('header_contact_number', 'option');

	$header_contact_address_title = get_field('header_contact_address_title', 'option');
	$header_contact_address = get_field('header_contact_address', 'option');
?>

<body <?php body_class(); ?>>
<div class="page-loader-wrapper">
    <div class="page-loader"></div>
</div>
<div id='toTop'><i class="icon icon-angle-up"></i></div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-remwnsr-text" href="#content"><?php esc_html_e( 'Skip to content', 'mwns' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-inner">
			<div class="container">
				<div class="row justify-content-between">
					<div class="justify-content-end social-icons-wrapper">
						
					</div><!-- /.social-icons-wrapper -->
				</div>
			</div> <!-- /.container -->
		</div> <!-- /.site-header-inner -->
		
		<div class="container logo-menu-wrapper">
			<div class="justify-content-between row">
				<div class="site-branding-main-logo site-branding">
					<div class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo( esc_url( get_header_image() ) ); ?>" alt="<?php echo( esc_attr( get_bloginfo( 'title' ) ) ); ?>"/>
						</a>
					</div>
					<?php if ( bloginfo( 'description' ) != '' ) : ?>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<div class="header-contact-info-nav-wrap">
					<div class="header-details-wrapper">
						<div class="social-header-wrap">
							<span><?php _e('Zapratite nas:', 'mwns'); ?> </span><?php the_social_links( true ); ?>
						</div>
						<?php if ( $header_contact_title || $header_contact_number ) : ?>
							<div class="header-contact-phone">
								<span><?php echo $header_contact_title; ?></span>
								<a href="<?php echo $header_contact_number; ?>"><?php echo $header_contact_number; ?></a>
							</div>
						<?php endif; ?>
						<?php if ( $header_contact_address_title || $header_contact_address ) : ?>
							<div class="header-contact-address">
								<span><?php echo $header_contact_address_title; ?></span>
								<span><?php echo $header_contact_address; ?></span>
							</div>
						<?php endif; ?>
					</div>

					<div class="main-header-nav-search-wrap">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php

								wp_nav_menu(
									array(
										'theme_location' 		=> 	'primary',
										'menu_id' 				=> 	'primary-menu',
										'menu_class' 			=> 	'main-header-menu',
										'container_class'		=>	'main-menu-container'
									)
								);

								?>
						</nav><!-- #site-navigation -->
						<div class="menu-toggle-wrapper">
							<a href='#' class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
						<div class="header-search">
							<i class="toggle-icon icon-search-plus"></i>
							<i class="toggle-icon icon-times"></i>
							<div class="header-search-position">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div> <!-- /.main-header-nav-search-wrap -->

				</div> <!-- /.header-contact-info-nav-wrap -->
			</div> <!-- /.row justify-content-between -->
		</div> <!-- /.container logo-menu-wrapper -->
	</header><!-- #masthead /.site-header -->

	<div id="content" class="site-content">