<footer>

  <div class="container">
    <div class="row top-footer-row">
      <div class="seven columns">
        <!-- Navigation -->
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
          ));
        ?>
      </div>
      <div class="five columns">
        <!-- Social Media Icons -->
        <?php dynamic_sidebar('right-footer'); ?>
      </div>
    </div>

    <div class="row bottom-text">
      <h4 class="one-half column"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h4>
      <p class="one-half column">Site Created by Christie Knudson, Nicole Gunter &amp; Samantha Webb</p>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

<!--<script src="js/script.js"></script>-->
</body>
</html>
