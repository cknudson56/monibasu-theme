<?php
function example_theme_scripts(){
  //Skeleton
  wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton.css');
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  //CSS - NOT WORKING!!!
  wp_enqueue_style('main-styles', get_stylesheet_uri());
  //JS
  //wp_enqueue_style('script-name', get_template_directory_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts' , 'example_theme_scripts');

//Widgets
function blank_widgets_init() {
  //Header Widget
  register_sidebar(array(
    'name'          => ('Right Header'),
    'id'            => 'right-header',
    'description'   => 'Right widget area in the header',
    'before_widget' => '<div class="widget-header widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Home Page Top Left Widget
  register_sidebar(array(
    'name'          => ('Top Left Home'),
    'id'            => 'top-left-home',
    'description'   => 'Top Left widget area in Home Page',
    'before_widget' => '<div class="widget-home widget-top-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Home Page Top Right Widget
  register_sidebar(array(
    'name'          => ('Top Right Home'),
    'id'            => 'top-right-home',
    'description'   => 'Top Right widget area in Home Page',
    'before_widget' => '<div class="widget-home widget-top-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Bio Page Left Widget
  register_sidebar(array(
    'name'          => ('Left Bio Page'),
    'id'            => 'left-bio-page',
    'description'   => 'Left widget area in Bio Page',
    'before_widget' => '<div class="widget-bio widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Contact Page Left Widget
  register_sidebar(array(
    'name'          => ('Left Contact Page'),
    'id'            => 'left-contact-page',
    'description'   => 'Left widget area in Contact Page',
    'before_widget' => '<div class="widget-contact widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Left Footer Widget
  register_sidebar(array(
    'name'          => ('Left Footer'),
    'id'            => 'left-footer',
    'description'   => 'Left widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Right Footer Widget
  register_sidebar(array(
    'name'          => ('Right Footer'),
    'id'            => 'right-footer',
    'description'   => 'Right widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
}
add_action('widgets_init', 'blank_widgets_init');

//Custom Menus
function custom_menus(){
  register_nav_menus(array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu')
  ));
}
add_action('init', 'custom_menus');

//Adds featured imgs to posts
  add_theme_support('post-thumbnails');



 ?>
