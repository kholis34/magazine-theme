<?php 
register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );
add_theme_support( 'automatic-feed-links' );
add_filter('widget_text', 'do_shortcode');  
add_theme_support('post-thumbnails');
add_theme_support( 'custom-background');
/* Character excerpt */
function get_the_catcharacter_excerpt(){
$excerpt = get_the_content();
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$the_str = substr($excerpt, 0, 400);
return $the_str;
}
/* End of character excerpt */
//
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
/**
 * Enqueue scripts and styles.
 */
function myfirstheme_scripts() {
	wp_enqueue_style( 'myfirstheme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css',array(),'3.3.4' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome-4.3.0/css/font-awesome.min.css',array(),'4.0.3' );
	wp_enqueue_style( 'custom-css', get_template_directory_uri() .'/css/custom.css',array(),'1.0.1' );


	if( !is_admin()){
		wp_deregister_script( 'jquery' );
		wp_register_script('jquery', get_template_directory_uri().'/js/jquery.min.js', false,'1.10.2',true);
		wp_enqueue_script('jquery');
	}
	wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true );
	wp_enqueue_script( 'firstheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'firstheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom-js.js', array(), '1.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'myfirstheme_scripts' );
 ?>