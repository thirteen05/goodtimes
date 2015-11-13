<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

require_once("twitteroauth/autoload.php");
require_once("instagram-api/src/Instagram.php");

add_action( 'init', 'product_cpt_init' );
/**
 * Register a product post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function product_cpt_init() {
	$labels = array(
		'name'               => _x( 'Products', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Product', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Products', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Product', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'product', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Product', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Product', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Product', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Product', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Product', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Products', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Products:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No products found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No products found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-cart',
        'taxonomies'         => array('category'),  
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'product' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'product', $args );
}

add_theme_support( 'post-thumbnails', array( 'product' ) );

/**
 * Add jquery support
 */
function jquery_scripts() {
     wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'jquery_scripts' );


remove_filter('term_description','wpautop');
  
//include 'product-meta-box.php';

function get_category_logo(){
  
  $logo_url = '';
  
  if(is_category('4K')):
  
    $logo_url = get_template_directory_uri().'/images/Good-Times-Category-Logo-4K.png';
      
  endif;
  
  if(is_category('Good Times')):
  
    $logo_url = get_template_directory_uri().'/images/Good-Times-Category-Logo-Good-Times.png';
      
  endif;
  
  return $logo_url;
  
}
  


?>