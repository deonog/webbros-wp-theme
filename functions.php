<?php

// Scripts

function webbros_scripts(){
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.5.0', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.css', array(), '4.5.0', 'all' );
    wp_enqueue_script( 'webbros-script', get_template_directory_uri() . '/inc/js/script.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_style('webbros-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0','all' );
}

add_action('wp_enqueue_scripts', 'webbros_scripts');


function webbros_config(){
    register_nav_menus(
        array(
            'top_menu' => 'Webbros Main Menu',
            'footer_menu' => 'Webbros Footer Menu'
        )
    );
}

add_action('after_setup_theme', 'webbros_config', 0);


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

// Excerpt Length

function mytheme_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

// Post Thumbnails

function webbros_theme_setup(){
    add_theme_support('post-thumbnails');
    add_post_type_support( 'page', 'excerpt' );
 }
 
add_action('after_setup_theme','webbros_theme_setup');

/**
 * Register a Custom post type for.
 */
function custom_post_type() {
	$labels = array(
		'name'               => _x( 'Projects', 'post type general name'),
		'singular_name'      => _x( 'Project', 'post type singular name'),
		'menu_name'          => _x( 'Projects', 'admin menu'),
		'name_admin_bar'     => _x( 'Projects', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Project'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Project'),
		'edit_item'          => __( 'Edit Projects'),
		'view_item'          => __( 'View Projects'),
		'all_items'          => __( 'All Projects'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Projects'),
		'parent_item_colon'  => __( 'Parent Projects:'),
		'not_found'          => __( 'No Projects found.'),
		'not_found_in_trash' => __( 'No Projects found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-format-aside',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail', 'page-attributes', 'custom-fields')
    );
    
    flush_rewrite_rules();

	register_post_type( 'projects', $args );

	register_taxonomy( 'categories', array('projects'), array(
        'hierarchical' => true, 
        'label' => 'Categories', 
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'categories', 'projects' ); // Better be safe than sorry
}

add_action( 'init', 'custom_post_type', 0 );



/**
 * Register a Custom post type for.
 */
function custom_post_type_2() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name'),
		'singular_name'      => _x( 'Testimonial', 'post type singular name'),
		'menu_name'          => _x( 'Testimonials', 'admin menu'),
		'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Testimonial'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Testimonial'),
		'edit_item'          => __( 'Edit Testimonials'),
		'view_item'          => __( 'View Testimonials'),
		'all_items'          => __( 'All Testimonials'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Testimonials'),
		'parent_item_colon'  => __( 'Parent Testimonials:'),
		'not_found'          => __( 'No Testimonials found.'),
		'not_found_in_trash' => __( 'No Testimonials found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-format-status',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor',)
    );
    
    flush_rewrite_rules();

	register_post_type( 'testimonials', $args );
}

add_action( 'init', 'custom_post_type_2', 1 );

/**
 * Register a Custom post type for.
 */
function custom_post_type_3() {
	$labels = array(
		'name'               => _x( 'Pricing', 'post type general name'),
		'singular_name'      => _x( 'Pricing Table', 'post type singular name'),
		'menu_name'          => _x( 'Pricing', 'admin menu'),
		'name_admin_bar'     => _x( 'Pricing', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Table'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Table'),
		'edit_item'          => __( 'Edit Tables'),
		'view_item'          => __( 'View Tables'),
		'all_items'          => __( 'All Tables'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Pricing'),
		'parent_item_colon'  => __( 'Parent Pricing:'),
		'not_found'          => __( 'No Tables found.'),
		'not_found_in_trash' => __( 'No Tables found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-money-alt',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','custom-fields')
    );
    
    flush_rewrite_rules();

	register_post_type( 'pricing', $args );
}

add_action( 'init', 'custom_post_type_3', 2 );


// Customizer File

require get_template_directory(). '/inc/customizer/customizer.php';

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}