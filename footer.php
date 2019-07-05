<footer>

  <div class="container">
    <div class="row">
      <div class="nine columns">
        <!-- Navigation -->
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
          ));
        ?>
      </div>
      <div class="three columns">
        <!-- Social Media Icons -->
        <?php dynamic_sidebar('right-footer'); ?>
      </div>
    </div>

    <div class="row">
      <h4><a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a></h4>
      <p>Site Created by Christie Knudson, Nicole Gunter, &amp; Samantha Webb</p>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
