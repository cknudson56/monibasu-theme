<?php /*Template Name: Blogs Landing Page Template*/ ?>
<?php get_header(); ?>

<div id="blogs-page" class="container content-margin">

  <div class="row">
    <h2><?php the_title(); ?></h2>
  </div>

  <div class="row">
    <div class="one-half column">
      <?php $category_id = get_cat_ID( ‘Infectious Travels’ );
      $category_link = get_category_link( $category_id );
      ?>
      <a href=”<?php esc_url( $category_link ); ?>”>
        <?php dynamic_sidebar('left-blogs'); ?>
      </a>
    </div>

    <div class="one-half column">
      <?php dynamic_sidebar('right-blogs'); ?>
    </div>
  </div>

</div>



<?php get_footer(); ?>
