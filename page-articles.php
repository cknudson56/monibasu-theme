<?php /*Template Name: Articles Page Template*/ ?>
<?php get_header(); ?>

<div class="container">

  <div class="row content-margin">
    <h2><?php the_title(); ?></h2>
  </div>

  <div class="row">
    <div class="one-third column">
        <?php dynamic_sidebar('left-art'); ?>
    </div>

    <div class="one-third column">
        <?php dynamic_sidebar('middle-art'); ?>
    </div>

    <div class="one-third column">
        <?php dynamic_sidebar('right-art'); ?>
    </div>

  </div>

</div>



<?php get_footer(); ?>
