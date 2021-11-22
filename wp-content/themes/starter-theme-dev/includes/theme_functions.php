<?php 

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


function disable_wbe_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'disable_wbe_theme_support' );




// active menu item for archive fix
function change_page_menu_classes($menu)
{
    global $post;
    if (is_post_type_archive('proizvod') || is_singular('proizvod')) :
        $menu = str_replace('current_page_parent', '', $menu); // remove all current_page_parent classes
        $menu = str_replace('menu-item-object-proizvod', 'menu-item-object-proizvod current-menu-item', $menu); // add the current_page_parent class to the page you want
    endif;
    // if (is_post_type_archive('job') || is_singular('job')) :
    //     $menu = str_replace('current_page_parent', '', $menu); // remove all current_page_parent classes
    //     $menu = str_replace('menu-item-object-job', 'menu-item-object-job current-menu-item', $menu); // add the current_page_parent class to the page you want
    // endif;
    // if (is_post_type_archive('proizvod') || is_singular('proizvod')) :
    //     $menu = str_replace('current_page_parent', '', $menu); // remove all current_page_parent classes
    //     $menu = str_replace('menu-item-object-product', 'menu-item-object-product current-menu-item', $menu); // add the current_page_parent class to the page you want
    // endif;
    return $menu;
}
add_filter('nav_menu_css_class', 'change_page_menu_classes', 10, 2);

?>