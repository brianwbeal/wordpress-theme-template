<?php

// enqueue stylesheets
function load_stylesheets() {

  // style.css
  wp_register_style('styles', get_template_directory_uri() . '/style.css',
    array(), false, 'all');
  wp_enqueue_style('styles');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// enqueue scripts
function loadjs() {

  // scripts.js
  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

// add thumbnails for blog posts
add_theme_support('post-thumbnails');

// include sidebar
get_sidebar("sidebar.php");

// add custom navigation walker class
// class Brian_Beal_Nav_Walker extends Walker_Nav_Menu {
//   //
// }


/********************
    Custom Fields
*********************/
function Main_Customization($wp_customize) {

  //  section
  $wp_customize->add_section('main_content', array(
    'title' => 'Main'
  ));

  //  logo_image
  //  usage: inside img src attr = echo get_theme_mod('setting_logo_image');
  $wp_customize->add_setting('setting_logo_image');
  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'control_logo_image', array(
    'label' => 'logo image',
    'section' => 'main_content',
    'settings' => 'setting_logo_image',
    'width' => 500,
    'height' => 500
  )));

  //  name
  //  usage: inside text tags = echo get_theme_mod('setting_name');
  $wp_customize->add_setting('setting_name', array(
    'default' => 'name'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'control_name', array(
    'label' => 'organization name',
    'section' => 'main_content',
    'settings' => 'setting_name'
  )));

  //  address
  //  usage: inside text tags = echo get_theme_mod('setting_address');
  $wp_customize->add_setting('setting_address', array(
    'default' => 'address'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'control_address', array(
    'label' => 'address (if applicable)',
    'section' => 'main_content',
    'settings' => 'setting_address'
  )));

  //  phone_number
  //  usage: inside text tags = echo get_theme_mod('setting_phone_number');
  $wp_customize->add_setting('setting_phone_number', array(
    'default' => 'phone number'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'control_phone_number', array(
    'label' => 'phone',
    'section' => 'main_content',
    'settings' => 'setting_phone_number'
  )));
}
add_action('customize_register', 'Main_Customization');  // customize_register is wp native

 ?>
