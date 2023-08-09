<?php

//Load main scripts
function pluto_load_scripts(){
  //styles
  wp_enqueue_style( 'pluto-main-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all' );
  wp_enqueue_style( 'pluto-font-awesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '6.4.2', 'all' );

  //scripts
  wp_enqueue_script( 'pluton-main-script', get_template_directory_uri() . '/assets/js/script.js', array(), wp_get_theme()->get('Version'), true );
}

add_action( 'wp_enqueue_scripts', 'pluto_load_scripts' );



function pluto_config(){
  //Assign Nav manu locations
  $nav_locations = array(
    'pluto_primary_menu' => 'Main Menu',
    'pluto_footer_menu' => 'Footer Menu'
  );
  //Register nav menu locations
  register_nav_menu( $nav_locations );

  //Add theme supports
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'pluto_config' );