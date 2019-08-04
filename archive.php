<?php get_header(); ?>

<div id="archives-page" class="container container-max-width content-margin">
  <div class="row">
    <div class="twelve columns">
      <h2><?php
        if(is_category()){
          single_cat_title();
        }elseif(is_tag()){
          single_tag_title();
        }elseif(is_day()){
          echo "Daily Archives: " . get_the_date();
        }elseif(is_month()){
          echo "Monthly Archives: " . get_the_date('F Y');
        }elseif(is_year()){
          echo "Yearly Archives: " . get_the_date('Y');
        }else{
          echo "Archives";
        }
       ?>
      </h2>
    </div>
  </div>
  <div class="row">
    <div class="sidebar-inline twelve columns">
      <?php get_sidebar(); ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <div class="row category-flex category-border">
              <div class="">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
              </div>
              <div class="category-post">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php publish_date(); ?>
                <?php the_excerpt(); ?>
                </p><a href="<?php the_permalink(); ?>">Read More...</a></p>
              </div>
            </div>
            <?php
          }
        }
      ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
