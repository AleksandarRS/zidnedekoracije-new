<?php

function starter_register_post_type() {
    $singular = 'Testimonials'; // Book
	$plural = 'Testimonials';  // Books
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'starter' ),
        'singular_name' 	  => __( $singular, 'starter' ),
        'add_new' 		      => _x( 'Add New', 'starter', 'starter' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'starter' ),
        'edit'		          => __( 'Edit', 'starter' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'starter' ),
        'new_item'	          => __( 'New ' . $singular, 'starter' ),
        'view' 			      => __( 'View ' . $singular, 'starter' ),
        'view_item' 		  => __( 'View ' . $singular, 'starter' ),
        'search_term'   	  => __( 'Search ' . $plural, 'starter' ),
        'parent' 		      => __( 'Parent ' . $singular, 'starter' ),
        'not_found'           => __( 'No ' . $plural .' found', 'starter' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'starter' ),
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