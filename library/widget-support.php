<?php 
function theme_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Main Sidebar', 'textdomain'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'theme_widgets_init');
function kholisnet_widgets() {
// Area 1, located in the footer. Empty by default.
register_sidebar( array(
'name' => __( 'First Footer Widget Area', 'kholisnet' ),
'id' => 'first-footer-widget-area',
'description' => __( 'The first footer widget area', 'kholisnet' ),
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Second Footer Widget Area', 'kholisnet' ),
'id' => 'second-footer-widget-area',
'description' => __( 'The Second footer widget area', 'kholisnet' ),
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Third Footer Widget Area', 'kholisnet' ),
'id' => 'third-footer-widget-area',
'description' => __( 'The Third footer widget area', 'kholisnet' ),
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'widgets_init', 'kholisnet_widgets' );
/* End of widget */

 ?>
