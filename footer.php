<?php wp_footer(); ?>

<!-- Footer -->
<footer>
  <nav class="footer-nav">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'mercury_footer_menu',
        'depth' => 1
      )
    );
    ?>
  </nav>
  <p>Copyright 2023 - Pluto - Al Rights Reserved.</p>
  <!-- <p><?php echo get_theme_mod('set_copyright', 'Powered By Pluto'); ?></p> -->
</footer>
</body>

</html>