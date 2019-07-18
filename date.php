<?php get_header(); ?>

<div id="date-page" class="container content-margin">

  <div class="row">
    <div class="twelve columns">
      <?php
        if(is_day()){
          echo "<h2>Daily Archives: " . get_the_date() . "</h2>";
        } elseif(is_month()){
          echo "<h2>Monthly Archives: " . get_the_date('F Y') . "</h2>";
        } elseif(is_year()){
          echo "<h2>Year Archives: " . get_the_date('Y') . "</h2>";
        }
       ?>
     </div>
   </div>

   <div class="row">
     <div class="nine columns">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>
                <?php the_post_thumbnail('medium'); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php publish_date(); ?>
                <?php the_excerpt(); ?>
                </p><a href="<?php the_permalink(); ?>">Read More...</a></p>
            <?php
          }
        } ?>
      </div>

    <div class="three columns">
      <?php get_sidebar(); ?>
    </div>
  </div>

</div>


<?php get_footer(); ?>
