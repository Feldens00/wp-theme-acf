<?php

function dm_add_styles() 
{
  $dir = get_template_directory_uri().'/public/assets/stylesheets/';
  wp_enqueue_style('owlcarousel', get_template_directory_uri().'/node_modules/owl.carousel/dist/assets/owl.carousel.min.css', array(), '1.0');
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '1.0');
  //wp_enqueue_style('fontsgoogleapis', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '');
  wp_enqueue_style('fontawesome', get_template_directory_uri().'/node_modules/@fortawesome/fontawesome-free/css/all.css', array(), '1.0');
  
  wp_enqueue_style('main', $dir.'main.css', array(), '4.4');
}

function dm_add_scripts() 
{
  $dir = get_template_directory_uri().'/public/assets/javascript/';
  wp_deregister_script('jquery'); // remove default wp jquery
  wp_enqueue_script('jquerymin', get_template_directory_uri().'/node_modules/jquery/dist/jquery.min.js', array(), '1.0', true);
  wp_enqueue_script('popper', get_template_directory_uri().'/node_modules/popper.js/dist/umd/popper.min.js', array(), '1.0', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), '1.0', true);
  wp_enqueue_script('owlcarousel', get_template_directory_uri().'/node_modules/owl.carousel/dist/owl.carousel.min.js', array(), '1.0', true);

  wp_enqueue_script('maskedinput', get_template_directory_uri().'/node_modules/jquery.maskedinput/src/jquery.maskedinput.js', array(), '1.0', true);
  wp_enqueue_script('sweetalert', get_template_directory_uri().'/node_modules/sweetalert/dist/sweetalert.min.js', array(), '1.0', true);
  wp_enqueue_script('bundle', $dir.'bundle.js', array(), '1.4', true);


}

add_action('wp_enqueue_scripts', 'dm_add_styles');
add_action('wp_enqueue_scripts', 'dm_add_scripts');
