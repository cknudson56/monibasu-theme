<?php get_header(); ?>

<div class="container content-margin pad-left pad-right">
  <div class="row">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
          <div class="">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo "Posted: " . get_the_date(); ?></p>
            <?php the_post_thumbnail('medium'); ?>
            <?php the_excerpt(); ?>
          </div>
        <?php
      }
    } ?>
  </div>
</div>

<?php get_footer(); ?>
