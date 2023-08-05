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
    <div class="main-header">
      <!-- Logo or site title name -->
      <div class="branding">
        <!-- Logo -->
        <?php
        if ( has_custom_logo() ) ?
          the_custom_logo();
        else: ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <p class="site-title"><?php blog_info( 'title' ); ?></p>
        </a>
      </div>

      <!-- Nav menu -->
      <nav class="main-menu">
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