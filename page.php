<?php get_header(); ?>

<div id="page" class="container content-margin">
  <div class="row">
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

<?php get_footer(); ?>
