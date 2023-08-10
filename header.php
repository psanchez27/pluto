<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Header -->
  <header>
    <div class="top-header"></div>
    <div class="main-header top">
      <!-- Logo or site title name -->
      <div class="branding">
        <!-- Logo -->
        <?php
        if ( has_custom_logo() ) :
          the_custom_logo(); ?>
        <?php else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <p class="site-title"><?php bloginfo( 'title' ); ?></p>
        </a>
      </div>

      <?php endif; ?>

      <!-- Mobile menu toggle -->
      <button type="button" name="mobile-menu-toggle" id="mobile-menu-toggle" class="mobile-menu-toggle"><i class="fa-solid fa-bars fa-lg"></i></button>

      <!-- Nav menu -->
      <nav id="main-menu" class="main-menu">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'pluto_primary_menu'
            )
          );
        ?>
      </nav>
    </div>
  </header>