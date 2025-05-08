<?php

function enqueue_child_theme_scripts() {
  // Get the theme directory URI
  $theme_version = wp_get_theme()->get('Version');
  
  // Enqueue the main.js script
  wp_enqueue_script(
    'child-main-js', 
    get_stylesheet_directory_uri() . '/js/main.js',
    array('jquery'), // Dependencies (modify if needed)
    $theme_version, // Versioning
    true // Load in footer
  );

    // Enqueue Slick Carousel scripts and styles
    wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/css/slick.css', array(), null);
    //wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css', array('slick-css'), null);
    
    wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_child_theme_scripts');

function theme_gsap_script() {
  wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js', array(), false, true );
  // Scroll Trigger - with gsap.js passes as a dependency
  wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
  // Animation code file
  wp_enqueue_script( 'gsap-custom-js', get_stylesheet_directory_uri() . '/js/app.js', array('gsap-js'), false, true)
;}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

function twentytwentyfive_child_enqueue_styles() {
  // Enqueue the parent theme stylesheet
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Enqueue the child theme stylesheet
  wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_styles');

// function twentytwentyfive_child_register_block_patterns() {
//   if ( function_exists( 'register_block_pattern' ) ) {
//     register_block_pattern(
//       'twentytwentyfive-child/homepage-banner',
//       array(
//         'title'       => __( 'Homepage Banner', 'twentytwentyfive-child' ),
//         'description' => __( 'An animated banner for the homepage.', 'twentytwentyfive-child' ),
//         'categories'  => array( 'featured' ),
//         'content'     => file_get_contents( get_theme_file_path( 'patterns/homepage-banner.php' ) ),
//       )
//     );
//   }
// }
// add_action( 'init', 'twentytwentyfive_child_register_block_patterns' );