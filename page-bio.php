<?php /*Template Name: Bio Page Template*/ ?>
<?php get_header(); ?>

<div class="container">

  <div class="row">
    <h1><?php the_title(); ?></h1>
  </div>

  <div class="row">
    <div class="one-half column">
        <?php dynamic_sidebar('left-bio-page'); ?>
    </div>

    <div class="one-half column">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>

            <?php the_content();
          }
        }
      ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
