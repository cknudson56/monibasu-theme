<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header(); ?>

<div id="contact-page" class="container container-max-width content-margin content-margin-contact">

  <div class="row">
    <h2><?php the_title(); ?></h2>
  </div>

  <div class="row contact-flex">
    <div class="one-half column left-contact-column">
        <?php dynamic_sidebar('left-contact-page'); ?>
    </div>

    <div class="one-half column right-contact-column">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>

            <?php the_content();
          }
        }
      ?>
      <?php dynamic_sidebar('right-contact-page'); ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
