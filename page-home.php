<?php /*Template Name: Home Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="one-half column">
      <div class="row">
        <?php dynamic_sidebar('top-left-home'); ?>
      </div>

      <div class="row">
        <div class="three columns">
          <p>Newsfeed 1</p>
        </div>
        <div class="three columns">
          <p>Newsfeed 2</p>
        </div>
      </div>

    </div>

    <div class="one-half column">
      <?php dynamic_sidebar('top-right-home'); ?>
    </div>

  </div>
</div>



<?php get_footer(); ?>
