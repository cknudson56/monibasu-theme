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
      <div class="row">
        <div class="six columns">
          <p><?php echo "Written by: " . get_the_author(); ?></p>
          <p><?php echo "Posted: " . get_the_date(); ?></p>
        </div>
        <div class="six columns">
          <?php dynamic_sidebar('share-social'); ?>
        </div>
      </div>
      <?php the_content(); ?>
      <?php
    }
  }
?>
</div>


<?php get_footer(); ?>
