<?php get_header(); ?>

<div class="container">
  <div class="row">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>

            <h1><?php the_title(); ?></h1>
            <?php the_content();
          }
        }
      ?>
  </div>
</div>

<?php get_footer(); ?>
