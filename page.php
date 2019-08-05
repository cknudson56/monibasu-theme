<?php get_header(); ?>

<div id="page" class="container container-max-width content-margin pad-left pad-right">
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
