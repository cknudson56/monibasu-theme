<?php /* Template Name: Search Page */
get_header();
?>

<div class="container">
  <div class="row">
    <div class="twelve columns">
      <?php if(have_posts()){?>
              <h1><?php printf(__('Search Results for : %s'), '<span>' . get_search_query() . '</span>');?></h1>
              <?php while(have_posts()){
                the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
