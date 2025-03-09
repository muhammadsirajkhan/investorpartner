<?php
require_once ( get_stylesheet_directory() . '/inc/cutom-theme-customize-settings.php'); 
function theme_scripts() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  // wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/assets/css/bootstrap-icons.min.css' );
  wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
  // wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );;
  // wp_enqueue_style( 'fancybox-css','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css' );
  // wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
  // wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
  // wp_enqueue_style( 'font-awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css' );
  // wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/custom-style.css' );
  wp_enqueue_style( 'font-style', get_template_directory_uri() . '/assets/fonts/stylesheet.css' );
  wp_enqueue_style( 'theme-style', get_stylesheet_uri());
  wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/custom-style.css' );
  // wp_enqueue_style( 'woo-style', get_template_directory_uri() . '/assets/css/woo-style.css' );
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );  
	
  // wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, true );
  // wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );  
  wp_enqueue_script( 'swipper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0.0', true );  
  wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true );
  // wp_enqueue_script( 'jquery.fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), '1.0.0', true ); 
  // wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '1.0.0', true );
  // wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.0.0', true );
  wp_localize_script('theme-js', 'the_ajax_script', array('ajaxurl' =>admin_url('admin-ajax.php')));
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );




function twentysixteen_widgets_init() {

  register_sidebar(
    array(
      'name'          => __( 'Footer Two', 'twentysixteen' ),
      'id'            => 'footer-two',
      'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
      'before_widget' => '<div class="footer-col-1">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    )
  );
  
	
	

}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );





add_theme_support( 'post-thumbnails' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );

add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
  register_nav_menus( array(
    'header_menu' => 'Header Menu',
    'header_menu_reponsive' => 'Header Menu Reponsive',
    'footer_menu' => 'Footer Menu',
    'my_account_menu' => 'My Account Menu',
  ) );
}



if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

}
















