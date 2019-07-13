<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header(); ?>

<div class="container content-margin">

  <div class="row">
    <h2><?php the_title(); ?></h2>
  </div>

  <div class="row">
    <div class="one-half column">
        <?php dynamic_sidebar('left-contact-page'); ?>
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
