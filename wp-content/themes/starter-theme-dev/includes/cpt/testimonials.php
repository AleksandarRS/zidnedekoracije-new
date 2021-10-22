<?php

function starter_register_post_type() {
    $singular = 'Testimonials'; // Book
	$plural = 'Testimonials';  // Books
	
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
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => 'dashicons-admin-site',
        'supports'            => array( 'title', 'thumbnail', 'editor' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'starter_register_post_type' );