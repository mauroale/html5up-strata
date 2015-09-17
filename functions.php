<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(150,150);
set_post_thumbnail_size(348,204);


/*
* Creating a function to create our CPT
*/

function portfolio_custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Portfolio', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Portfolio', 'twentythirteen' ),
		'all_items'           => __( 'All Portfolio', 'twentythirteen' ),
		'view_item'           => __( 'View Portfolio', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Portfolio', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Portfolio', 'twentythirteen' ),
		'update_item'         => __( 'Update Portfolio', 'twentythirteen' ),
		'search_items'        => __( 'Search Portfolio', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'portfolio', 'twentythirteen' ),
		'description'         => __( 'Portfolio', 'twentythirteen' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'portfolio', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'portfolio_custom_post_type', 0 );
