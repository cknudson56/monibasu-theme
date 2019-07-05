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





 ?>
