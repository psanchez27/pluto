<?php wp_footer(); ?>

<!-- Footer -->
<footer>
  <div class="main-footer-content">
  <p class="copyright">Copyright 2023 - Pluto - Al Rights Reserved.</p>
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
</footer>
</body>

</html>