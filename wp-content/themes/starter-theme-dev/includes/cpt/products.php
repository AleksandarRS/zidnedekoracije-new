<?php

function mwns_register_post_type() {
    $singular = 'Proizvod'; // Book
	$plural = 'Proizvodi';  // Books
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'mwns' ),
        'singular_name' 	  => __( $singular, 'mwns' ),
        'add_new' 		      => _x( 'Add New', 'mwns', 'mwns' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'mwns' ),
        'edit'		          => __( 'Edit', 'mwns' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'mwns' ),
        'new_item'	          => __( 'New ' . $singular, 'mwns' ),
        'view' 			      => __( 'View ' . $singular, 'mwns' ),
        'view_item' 		  => __( 'View ' . $singular, 'mwns' ),
        'search_term'   	  => __( 'Search ' . $plural, 'mwns' ),
        'parent' 		      => __( 'Parent ' . $singular, 'mwns' ),
        'not_found'           => __( 'No ' . $plural .' found', 'mwns' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'mwns' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => true,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => 'dashicons-products',
        // 'menu_icon'           => '',
        'supports'            => array( 'title', 'thumbnail', 'editor', 'excerpt' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'mwns_register_post_type' );

function mwns_register_custom_taxonomy() {
    $singular = 'Kategorija proizvoda'; // Book category
	$plural = 'Kategorije proizvoda'; // Book categories
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name'              => _x( $plural, 'taxonomy general name' ),
        'singular_name'     => _x( 'Kategorija', 'taxonomy singular name' ),
        'search_items'      => __( 'Search ' . $plural ),
        'all_items'         => __( 'All ' . $plural ),
        'parent_item'       => __( 'Parent ' . $singular ),
        'parent_item_colon' => __( 'Parent:' . $singular ),
        'edit_item'         => __( 'Edit ' . $singular ),
        'update_item'       => __( 'Update ' . $singular ),
        'add_new_item'      => __( 'Add New ' . $singular ),
        'new_item_name'     => __( 'New ' . $singular ),
        'menu_name'         => __( $plural ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical'  => true,
        'public'        => true,
        'show_admin_column' => true,
	);
	
    register_taxonomy( $slug, 'proizvod', $args );
}
add_action( 'init', 'mwns_register_custom_taxonomy', 0 );