<?php get_header(); ?>

<div id="articles-page" class="container content-margin">
  <div class="row">
    <div class="twelve columns cat-description">
      <h2><?php single_cat_title(); ?></h2>
      <?php echo category_description(); ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
              <div class="twelve columns category-border articles-post">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php publish_date(); ?>
              <?php the_excerpt(); ?>
              </p><a href="<?php the_permalink(); ?>">Read More...</a></p>
            </div>
            <?php
          }
        }
      ?>
    </div>
  </div>

</div>


<?php get_footer(); ?>
