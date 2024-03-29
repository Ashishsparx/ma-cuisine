<?php 
/**
 * Register custom posts type for the theme
 *
 *
 * @package Tanlinell
 * @since Tanlinell 1.0
 */

/**
 * Homepage slider - post_type: "slider"
 */

add_action( 'init', 'register_cpt_slide' );

function register_cpt_slide() {

	$labels = array(
			'name' => _x( 'Slides', 'slide' ),
			'singular_name' => _x( 'Slide', 'slide' ),
			'add_new' => _x( 'Add New', 'slide' ),
			'add_new_item' => _x( 'Add New Slide', 'slide' ),
			'edit_item' => _x( 'Edit Slide', 'slide' ),
			'new_item' => _x( 'New Slide', 'slide' ),
			'view_item' => _x( 'View Slide', 'slide' ),
			'search_items' => _x( 'Search Slides', 'slide' ),
			'not_found' => _x( 'No slides found', 'slide' ),
			'not_found_in_trash' => _x( 'No slides found in Trash', 'slide' ),
			'parent_item_colon' => _x( 'Parent Slide:', 'slide' ),
			'menu_name' => _x( 'Homepage Slider', 'slide' ),
	);

	$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post'
	);

	register_post_type( 'slide', $args );
	flush_rewrite_rules();
}
add_action( 'init', 'register_cpt_dish_of_the_day' );

function register_cpt_dish_of_the_day() {

    $labels = array( 
        'name' => _x( 'Dish of the Day', 'dish_of_the_day' ),
        'singular_name' => _x( 'Dish of the Day', 'dish_of_the_day' ),
        'add_new' => _x( 'Add New', 'dish_of_the_day' ),
        'add_new_item' => _x( 'Add New Dish of the Day', 'dish_of_the_day' ),
        'edit_item' => _x( 'Edit Dish of the Day', 'dish_of_the_day' ),
        'new_item' => _x( 'New Dish of the Day', 'dish_of_the_day' ),
        'view_item' => _x( 'View Dish of the Day', 'dish_of_the_day' ),
        'search_items' => _x( 'Search Dish of the Day', 'dish_of_the_day' ),
        'not_found' => _x( 'No dish of the day found', 'dish_of_the_day' ),
        'not_found_in_trash' => _x( 'No dish of the day found in Trash', 'dish_of_the_day' ),
        'parent_item_colon' => _x( 'Parent Dish of the Day:', 'dish_of_the_day' ),
        'menu_name' => _x( 'Dish of the Day', 'dish_of_the_day' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'page-attributes' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'page'
    );

    register_post_type( 'dish_of_the_day', $args );
    flush_rewrite_rules();
}
