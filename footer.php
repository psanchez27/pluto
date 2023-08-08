<?php wp_footer(); ?>

<!-- Footer -->
<footer>
  <div class="main-footer-content">
    <div class="footer-branding"></div>
    <nav class="footer-menu">
      <?php
        wp_nav_menu(
          array(
            'theme-location' => 'pluto_footer_menu'
          )
        );
      ?>
    </nav>
  </div>
  <p class="copyright">Copyright 2023 - Pluto - Al Rights Reserved.</p>
</footer>
</body>

</html>