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
  //Register nav menu locations
  register_nav_menus(
    array(
      'pluto_primary_menu' => 'Main Menu',
      'pluto_footer_menu' => 'Footer Menu'
    )
  );

  //Add theme supports
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );

  // Block editor support
  // add_theme_support( 'align-wide' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'editor-styles' );
  add_editor_style( 'style-editor.css' );
  add_theme_support( 'wp-block-styles' );
  // add_theme_support( 'editor-color-palette', array(
  //   array(
  //     'name' => 'Primary',
  //     'slug' => 'primary',
  //     'color' => '#001e32'
  //   ),
  //   array(
  //     'name' => 'Secondary',
  //     'slug' => 'secondary',
  //     'color' => '#ff1e32'
  //   )
  // ) );

  wp_register_style( 'pluto-block-style', get_template_directory_uri() . '/block-style.css' );

  register_block_style(
    'core/quote',
    array(
      'name' => 'red-quote',
      'label' => 'Red Quote',
      'is_default' => true,
      'style_handle' => 'pluto-block-style'
    )
  );
}

add_action( 'after_setup_theme', 'pluto_config' );