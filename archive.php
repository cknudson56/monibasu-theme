<?php get_header(); ?>

<div class="container content-margin">
  <div class="row">
    <div class="twelve columns">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <div class="twelve columns">
              <?php the_post_thumbnail('medium'); ?>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php publish_date(); ?>
              <?php the_excerpt(); ?>
              </p><a href="<?php the_permalink(); ?>">Read More...</a></p>
            </div>
          <?php
        }
      } ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
