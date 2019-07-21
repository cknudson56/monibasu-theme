<?php /*Template Name: Blogs Landing Page Template*/ ?>
<?php get_header(); ?>

<div id="blogs-page" class="container content-margin">

  <div class="row">
    <h2><?php the_title(); ?></h2>
  </div>

  <div class="row">
    <div class="one-half column">
      <a href="http://christieknudson.com/monibasu/category/infectious-travels/" class="blogs-link">
        <?php dynamic_sidebar('left-blogs'); ?>
      </a>
    </div>

    <div class="one-half column">
      <a href="http://christieknudson.com/monibasu/category/free-press-educates/" class="blogs-link">
        <?php dynamic_sidebar('right-blogs'); ?>
      </a>
    </div>
  </div>

</div>



<?php get_footer(); ?>
