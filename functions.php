<?php

//Load main scripts
function pluto_load_scripts()
{
  //styles
  wp_enqueue_style('pluto-main-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all');

  //scripts
  wp_enqueue_script('pluton-main-script', get_template_directory_uri() . '/assets/js/script.js', array(), wp_get_theme()->get('Version'), true);
}

add_action('wp_enqueue_scripts', 'pluto_load_scripts');
