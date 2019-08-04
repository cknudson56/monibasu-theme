<footer>

  <div class="container">
    <div class="row top-footer-row">
      <div class="nine columns pad-left">
        <!-- Navigation -->
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
          ));
        ?>
      </div>
      <div class="three columns pad-right">
        <!-- Social Media Icons -->
        <?php dynamic_sidebar('right-footer'); ?>
      </div>
    </div>

    <div class="row bottom-text">
      <h4 class="pad-left"><a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a></h4>
      <p class="pad-right">Site Created by Christie Knudson &amp; Nicole Gunter</p>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

<!--<script src="js/script.js"></script>-->
</body>
</html>
