<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



  <header>
    <div class="container">
      <div class="row header-flex">
        <div id="site-heading">
          <?php if(get_header_image() == '') { ?>
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php
          }
          ?>
        </div>
        <div id="site-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container-class' => 'menu-header'
            ));
          ?>
        </div>
      </div>
    </div>
  </header>
