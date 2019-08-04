<?php /* Template Name: Search Page */
get_header();
?>

<div class="container content-margin">
  <div class="row">
    <div class="twelve columns">
      <?php if(have_posts()){?>
              <h2 class="text-align-left"><?php printf(__('Search Results for : %s'), '<span>' . get_search_query() . '</span>');?></h2>
              <?php while(have_posts()){
                the_post(); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt();?>
              </p><a href="<?php the_permalink(); ?>">Read More...</a></p><?php
              }
            }else{?>
              <h1>Nothing was found</h1>
              <p>Please try another search term.</p>
              <?php
              get_search_form();
            }
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
