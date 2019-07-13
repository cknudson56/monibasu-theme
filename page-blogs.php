<?php /*Template Name: Blogs Landing Page Template*/ ?>
<?php get_header(); ?>

<div class="container">

  <div class="row content-margin">
    <h2><?php the_title(); ?></h2>
  </div>

  <div class="row">
    <div class="one-half column">
        <?php dynamic_sidebar('left-blogs'); ?>
    </div>

    <div class="one-half column">
      <?php dynamic_sidebar('right-blogs'); ?>
    </div>
  </div>

</div>



<?php get_footer(); ?>
