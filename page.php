<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="one-half column">
        <?php dynamic_sidebar(''); ?>
    </div>

    <div class="one-half column">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>

            <h2><?php the_title(); ?></h2>
            <?php the_content();
          }
        }
      ?>
    </div>

  </div>
</div>

<?php get_footer(); ?>
