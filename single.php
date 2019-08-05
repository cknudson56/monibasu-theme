<?php get_header(); ?>

<div id="single-page" class="container container-max-width content-margin">
<div class="single row pad-left pad-right">
<?php
  if(have_posts()){
    while(have_posts()){
      the_post(); ?>
      <div class="post-feature">
        <?php the_post_thumbnail('medium'); ?>
      </div>
      <h2 class="post-title"><?php the_title(); ?></h2>
      <div class="who-when">
        <p><?php echo "Written by: " . get_the_author(); ?></p>
        <p><?php echo "Posted: " . get_the_date(); ?></p>
      </div>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
      <?php
    }
  }
  if (comments_open() || get_comments_number()):
    comments_template();
  endif;
?>
</div>
</div>


<?php get_footer(); ?>
