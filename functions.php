<?php 
add_action('wp_enqueue_scripts', 'insert_css');
function insert_css() {
    // On ajoute le css general du theme
    wp_enqueue_style('style', get_stylesheet_uri());

     // FontAwesome
     wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
     wp_enqueue_style('fontawesome');

    // Chargement de Bootstrap
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('style2', get_template_directory_uri() .'/style2.css');
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() .'/bootstrap.min.css');
    
    
    
}


function add_js_scripts() {
   //On  ajoute le jQuery au thème
   wp_register_script('jquery2','https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js');
   wp_enqueue_script('jquery2');
    
    wp_enqueue_script( 'fa-js', 'https://use.fontawesome.com/releases/v5.6.3/js/all.js');
    wp_enqueue_script('fa-js');

    // On ajoute le js au thème
    wp_enqueue_script( 'script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.js', array('jquery'), '1.0', true );
    
   

    

    
}
add_action('wp_enqueue_scripts', 'add_js_scripts');


// Insertion menu back office
add_theme_support('menus');
register_nav_menus(array(
    'menu-principal' => 'Navigation principale',
    'menu-secondaire' => 'Navigation secondaire',
    'menu-footer' => 'Navigation footer'
));

// Insertion sidebar back office
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

add_theme_support('post-thumbnails');

?>