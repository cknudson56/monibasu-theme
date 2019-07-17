<?php /*Template Name: Home Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="one-half column">
      <div class="row">
        <?php dynamic_sidebar('top-left-home'); ?>
      </div>

      <div class="row">
        <!--
        <div class="three columns">
          <//?php dynamic_sidebar('left-social'); ?>
        </div>
        <div class="three columns">
          <//?php dynamic_sidebar('right-social'); ?>
        </div>
        -->

        <div>
          <?php dynamic_sidebar('main-social'); ?>
        </div>

      </div>

    </div>

    <div class="one-half column">
      <?php dynamic_sidebar('top-right-home'); ?>
    </div>

  </div>
</div>



<?php get_footer(); ?>
