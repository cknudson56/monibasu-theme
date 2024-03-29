<?php

function example_theme_scripts(){
  //Skeleton
  wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton.css');
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  //CSS
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
  //Home Page Recent Posts Widget
  register_sidebar(array(
    'name'          => ('Recent Posts'),
    'id'            => 'recent-posts',
    'description'   => 'Recent Posts widget area in Home Page',
    'before_widget' => '<div class="widget-posts widget-home">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Home Page MAIN Social Widget
  register_sidebar(array(
    'name'          => ('Main Social'),
    'id'            => 'main-social',
    'description'   => 'Main social widget area in Home Page',
    'before_widget' => '<div class="widget-social widget-main">',
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
  //Blogs Landing Page Left Widget
  register_sidebar(array(
    'name'          => ('Left Blogs Landing'),
    'id'            => 'left-blogs',
    'description'   => 'Left widget area in Blogs Landing Page',
    'before_widget' => '<div class="widget-blogs widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Blogs Landing Page Right Widget
  register_sidebar(array(
    'name'          => ('Right Blogs Landing'),
    'id'            => 'right-blogs',
    'description'   => 'Right widget area in Blogs Landing Page',
    'before_widget' => '<div class="widget-blogs widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Sidebar Widget
  register_sidebar(array(
    'name'          => ('Sidebar'),
    'id'            => 'sidebar',
    'description'   => 'Sidebar widget area',
    'before_widget' => '<div class="widget-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Articles Page Left Widget
  register_sidebar(array(
    'name'          => ('Left Articles'),
    'id'            => 'left-art',
    'description'   => 'Left widget area in Articles Page',
    'before_widget' => '<div class="widget-art widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Articles Page Middle Widget
  register_sidebar(array(
    'name'          => ('Middle Articles'),
    'id'            => 'middle-art',
    'description'   => 'Middle widget area in Articles Page',
    'before_widget' => '<div class="widget-art widget-middle">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Articles Page Right Widget
  register_sidebar(array(
    'name'          => ('Right Articles'),
    'id'            => 'right-art',
    'description'   => 'Right widget area in Articles Page',
    'before_widget' => '<div class="widget-art widget-right">',
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
  //Contact Page Right Widget
  register_sidebar(array(
    'name'          => ('Right Contact Page'),
    'id'            => 'right-contact-page',
    'description'   => 'Right widget area in Contact Page',
    'before_widget' => '<div class="widget-contact widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Single Social Widget
  register_sidebar(array(
    'name'          => ('Share Social'),
    'id'            => 'share-social',
    'description'   => 'Share social widget area in Single Page',
    'before_widget' => '<div class="widget-social widget-single">',
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

//Date Archive Function
function publish_date() {
  $archive_year = get_the_time('Y');
  $archive_month = get_the_time('F');
  $archive_day = get_the_time('j');
?>
  <p>Posted: <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo get_the_date(); ?></a><p>
<?php
}

//Logo in the header
$custom_image_header = array(
  'width' => 150,
  'height' => 90,
  'uploads' => true,
);
add_theme_support('custom-header', $custom_image_header)

?>
