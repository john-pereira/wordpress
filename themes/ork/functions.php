<?php

/**
 * Ork functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ork
 */

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

require_once get_template_directory() . '/inc/customizer.php';

/**
* Enqueue scripts and styles.
*/

 function ork_scripts(){
 	//Bootstrap javascript and CSS files
 	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.1.3', true );
 	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.1.3', 'all' );

 	// Theme's main stylesheet 
 	wp_enqueue_style( 'ork-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );

 	// Font Awesome
 	//wp_enqueue_style( 'wpb-fa', get_stylesheet_directory_uri() . '/src/fonts/css/font-awesome.min.css' );
 	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
 	
 	// Flexslider Javascript and CSS files
	wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
	wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
 }


 add_action( 'wp_enqueue_scripts', 'ork_scripts' );

 function ork_config(){
 	register_nav_menus( 
 		array(
 			'ork_main_menu' => esc_html__('Menu Principal', 'ork' ),
 			'ork_footer_menu' => esc_html__('Menu Rodape', 'ork'),
 		)
 	 );

 	$textdomain = 'ork';
 	load_theme_textdomain( '$textdomain', get_stylesheet_directory() . '/languages/' );
 	load_theme_textdomain( '$textdomain', get_template_directory() . '/languages/' );


 	 // This theme is WooCommerce compatible, so we're adding support to WooCommerce
		add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 255,
			'single_image_width'	=> 255,
			'product_grid' 			=> array(
	            'default_rows'    => 10,
	            'min_rows'        => 5,
	            'max_rows'        => 10,
	            'default_columns' => 4,
	            'min_columns'     => 1,
	            'max_columns'     => 4,				
			)
		) );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		add_theme_support( 'automatic-feed-links' );
        /**
        * Add support for core custom logo.
        *
        * @link https://codex.wordpress.org/Theme_Logo
        */
		add_theme_support( 'custom-logo', array(
			'height' 		=> 85,
			'width'			=> 160,
			'flex_height'	=> true,
			'flex_width'	=> true,
		) );

		add_theme_support( 'post-thumbnails' );
		add_image_size( 'ork-slider', 1920, 800, array( 'center', 'center' ) );
		add_image_size( 'ork-blog', 800, 640, array( 'center', 'center' ) );

		if ( ! isset( $content_width ) ) {
			$content_width = 600;
		}			

		add_theme_support( 'title-tag' );
 }
 add_action( 'after_setup_theme', 'ork_config', 0 );

if( class_exists( 'WooCommerce' )){
	require get_template_directory() . '/inc/wc-modifications.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'ork_woocommerce_header_add_to_cart_fragment' );

function ork_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>

	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}
/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
add_action( 'widgets_init', 'ork_sidebars');
function ork_sidebars(){
	register_sidebar( array(
		'name'			=> esc_html__('Sidebar Principal', 'ork'),
		'id'			=> 'ork-sidebar-1',
		'description'	=> esc_html__('Segure e arraste seus widgets aqui', 'ork'),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wapper">',
		'after_widget'  => '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=> esc_html__('Sidebar Loja', 'ork'),
		'id'			=> 'ork-sidebar-shop',
		'description'	=> esc_html__('Segure e arraste WooCommerce widgets aqui', 'ork' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wapper">',
		'after_widget'  => '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=> esc_html__('Sidebar Rodape 1', 'ork'),
		'id'			=> 'ork-sidebar-footer1',
		'description'	=> esc_html__('Segure e arraste widgets de rodape aqui', 'ork'),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wapper">',
		'after_widget'  => '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=> esc_html__('Sidebar Rodape 2', 'ork' ),
		'id'			=> 'ork-sidebar-footer2',
		'description'	=> esc_html__('Segure e arraste widgets de rodape aqui', 'ork' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wapper">',
		'after_widget'  => '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=> esc_html__('Sidebar Rodape 3', 'ork'),
		'id'			=> 'ork-sidebar-footer3',
		'description'	=> esc_html__('Segure e arraste widgets de rodape aqui', 'ork'),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wapper">',
		'after_widget'  => '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );

}