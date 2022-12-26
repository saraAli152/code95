<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
   wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
add_action('wp_enqueue_scripts', 'add_normalize_CSS');
// Register a new sidebar simply named 'sidebar'
/*function add_widget_support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_widget_support' );*/
// Register a new navigation menu
function add_Main_Nav() {
    register_nav_menus(array(
        'primary' => 'header',
        'secondry' => 'footer',
    ));
  }
  function code95_theme_support(){
    add_theme_support('tite-tag');
  }
  add_action( 'after_setup_theme', 'add_Main_Nav' );
  // Hook to the init action hook, run our navigation menu function
  add_action( 'init', 'add_Main_Nav' );

  function addstyle1() {
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/style/css/bootstrap.min.css' );
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('stylesheet',get_template_directory_uri().'/style/css/stylesheet.css' );

  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'wp_enqueue_scripts', 'addstyle1' );
  function addscript1() {
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/style/js/bootstrap.bundle.js' );
   
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'wp_enqueue_scripts', 'addscript1' );
   add_theme_support('post-thumbnails');
   Add_theme_support( 'header');
   add_theme_support( 'custom-background');
  // require_once('')

 