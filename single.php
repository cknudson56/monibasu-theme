<?php get_header(); ?>

<div id="single-page" class="container content-margin">
<?php
  if(have_posts()){
    while(have_posts()){
      the_post(); ?>
      <div class="post-feature">
        <?php the_post_thumbnail(); ?>
      </div>
      <h2 class="post-title"><?php the_title(); ?></h2>
      <p><?php echo "Posted: " . get_the_date(); ?></p>
      <?php the_content(); ?>
      <?php
    }
  }
?>
</div>


<?php get_footer(); ?>
