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
  
include 'product-meta-box.php';

function get_category_logo(){
  
  $logo_url = '';
  
  if(is_category('4K') || has_category('4K')):
  
    $logo_url = get_template_directory_uri().'/images/home-mobile-slider/Home-Mobile-Slider-4K.png';
      
  endif;
  
  if(is_category('Good Times') || has_category('Good Times')):
  
    $logo_url = get_template_directory_uri().'/images/home-mobile-slider/Home-Mobile-Slider-Good-Times.png';
      
  endif;
  
  if(is_category('Flat Wrap') || has_category('Flat Wrap')):
  
    $logo_url = get_template_directory_uri().'/images/home-mobile-slider/Home-Mobile-Slider-Flat-Wrap.png';
      
  endif;
  
  if(is_category('Sweet Woods') || has_category('Sweet Woods')):
  
    $logo_url = get_template_directory_uri().'/images/home-mobile-slider/Home-Mobile-Slider-Sweet-Woods.png';
      
  endif;
  
  if(is_category('Little &amp; Wild') || has_category('Little &amp; Wild')):
  
    $logo_url = get_template_directory_uri().'/images/home-mobile-slider/Home-Mobile-Slider-Little-Wild.png';
      
  endif;
  
  if(is_category('Remington') || has_category('Remington')):
  
    $logo_url = get_template_directory_uri().'/images/home-mobile-slider/Home-Mobile-Slider-Remington.png';
      
  endif;
  
  if(is_category('HD') || has_category('HD')):
  
    $logo_url = get_template_directory_uri().'/images/home-mobile-slider/Home-Mobile-Slider-HD.png';
      
  endif;
  
  if(is_category("Double 7's") || has_category("Double 7's")):
  
    $logo_url = get_template_directory_uri().'/images/home-mobile-slider/Home-Mobile-Slider-Double-7s.png';
      
  endif;
  
  return $logo_url;
  
}

add_theme_support( 'post-thumbnails' );


function get_cat_link_by_name($brand){
  
  $cat_id = get_cat_ID($brand);
  $link = get_category_link($cat_id);
  return $link; 
  
}

function get_ring_gauge(){
  
  if(rwmb_meta('ring_gauge') == 'ring_gauge_1'):
    
    return '27.8 x 3"';
  
  elseif(rwmb_meta('ring_gauge') == 'ring_gauge_2'):
    
    return '27.8 X 3.75"';
  
  elseif(rwmb_meta('ring_gauge') == 'ring_gauge_3'):
    
    return '27.8 X 4.25"';
  
  elseif(rwmb_meta('ring_gauge') == 'ring_gauge_4'):
    
    return '27.8 X 5"';
  
  elseif(rwmb_meta('ring_gauge') == 'ring_gauge_5'):
    
    return '27.8 X 6"';
  
  elseif(rwmb_meta('ring_gauge') == 'ring_gauge_6'):
    
    return '30.25 X 4.25"';
  
  elseif(rwmb_meta('ring_gauge') == 'ring_gauge_7'):
    
    return '43 X 5.5"';
  
  elseif(rwmb_meta('ring_gauge') == 'ring_gauge_8'):
    
    return '8 X 4.875"';
  
  endif;
  
}

function get_product_type(){
  
  if(rwmb_meta('product_type') == 'product_type_1'):
    
    return 'Blended Tobacco Cigarillo';
  
  elseif(rwmb_meta('product_type') == 'product_type_2'):
    
    return 'Flat Wrap';
  
  elseif(rwmb_meta('product_type') == 'product_type_3'):
    
    return 'Little Filter Cigars';
  
  elseif(rwmb_meta('product_type') == 'product_type_4'):
    
    return 'Mini Blended Cigarillo';
  
  elseif(rwmb_meta('product_type') == 'product_type_5'):
    
    return 'Natural Leaf Cigarillo';
  
  elseif(rwmb_meta('product_type') == 'product_type_6'):
    
    return 'Natural Leaf Rustic Cigar';
  
  elseif(rwmb_meta('product_type') == 'product_type_7'):
    
    return 'Party-Sized Cigarillo';
  
  elseif(rwmb_meta('product_type') == 'product_type_8'):
    
    return 'Rolling Papers';
  
  elseif(rwmb_meta('product_type') == 'product_type_9'):
    
    return 'Shorty Cigarillo';
  
  elseif(rwmb_meta('product_type') == 'product_type_10'):
    
    return 'Natural Leaf Palma Cigar';
  
  elseif(rwmb_meta('product_type') == 'product_type_11'):
    
    return 'Pipe Tobacco Tip Cigar';
  
  endif;
  
}

function get_single_unit_qty(){
  
    if(rwmb_meta('single_unit_qty') == 'single_unit_qty_1'):
    
      return '1 Cigar Pouch';

    elseif(rwmb_meta('single_unit_qty') == 'single_unit_qty_2'):

      return '2 Cigar Pouch';

    elseif(rwmb_meta('single_unit_qty') == 'single_unit_qty_3'):

      return '3 Cigar Pouch';

    elseif(rwmb_meta('single_unit_qty') == 'single_unit_qty_4'):

      return '4 Cigar Pouch';

    elseif(rwmb_meta('single_unit_qty') == 'single_unit_qty_5'):

      return '5 Cigar Pouch';

    elseif(rwmb_meta('single_unit_qty') == 'single_unit_qty_6'):

      return '2 Wraps';

    elseif(rwmb_meta('single_unit_qty') == 'single_unit_qty_7'):

      return '2 Booklets';

    elseif(rwmb_meta('single_unit_qty') == 'single_unit_qty_8'):

      return '2 Count Pack';

    elseif(rwmb_meta('single_unit_qty') == 'single_unit_qty_9'):

      return '20 Count Pack';

    elseif(rwmb_meta('single_unit_qty') == 'single_unit_qty_10'):

      return 'Single Cigar';

    endif;
  
  
  
  
}
  


?>