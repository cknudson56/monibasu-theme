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
</div>

<div class="container">
  <div class="row home-banner2">
    <div class="six columns social">
      <?php dynamic_sidebar('main-social'); ?>
    </div>
    <div class="six columns recent-posts">
      <?php dynamic_sidebar('recent-posts'); ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
