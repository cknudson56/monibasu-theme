<?php /*Template Name: Home Page Template*/ ?>
<?php get_header(); ?>

<div id="home-page" class="container">

  <div class="row home-banner">
    <div class="one-half column">
        <?php dynamic_sidebar('top-left-home'); ?>
    </div>

    <div class="one-half column">
      <?php dynamic_sidebar('top-right-home'); ?>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns social">
      <?php dynamic_sidebar('main-social'); ?>
    </div>
  </div>

</div>



<?php get_footer(); ?>
