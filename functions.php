<?php

// WP specific function to add CSS and scripts
// https://developer.wordpress.org/themes/basics/including-css-javascript/ (Combining Enqueue Functions)

function add_theme_scripts() {
    // To include Bootstrap CSS
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    // To include style.css
	wp_enqueue_style( 'style', get_stylesheet_uri());

    // To include Bootstrap javascript
	wp_enqueue_script(
        'bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', 
        [], 
        '5.3', 
        true
    );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// To register menu navigation 
// https://developer.wordpress.org/themes/functionality/navigation-menus/ (Register Menus)
function register_my_menus() {
    register_nav_menus(
      [
        'header-menu' => __( 'Header Menu' ),
        // 'extra-menu' => __( 'Extra Menu' )
      ]
     );
   }
add_action( 'init', 'register_my_menus' );



// Custom Footer Copyright Year
function custom_footer_copyright() {
    $start_year = 2023; // Change this to the year you started your website
    $current_year = date('Y');
    if ($start_year == $current_year) {
        echo $start_year;
    } else {
        echo $start_year . ' - ' . $current_year;
    }
}

function theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('custom-header');

// Add theme color support
add_theme_support(
    'editor-color-palette',
    array(
        array(
            'name'  => 'Earthy Greens',
            'color' => '#A7C957',
        ),
        array(
            'name'  => 'Light Peach',
            'color' => '#F5CAC3',
        ),
        array(
            'name'  => 'Sky Blue',
            'color' => '#C8F1F9',
        ),
        array(
            'name'  => 'Deep Green',
            'color' => '#225218',
        ),
        array(
            'name'  => 'Soft Blue',
            'color' => '#79d7f0',
        ),
        array(
            'name'  => 'Dark Slate',
            'color' => '#2d3242',
        ),
        array(
            'name'  => 'Warm Tan',
            'color' => '#d0a973',
        ),
        array(
            'name'  => 'Muted Green',
            'color' => '#a6bba0',
        ),
        array(
            'name'  => 'Dark Olive',
            'color' => '#342f09',
        ),
        array(
            'name'  => 'Sky Blue 2',
            'color' => '#79a3e2',
        ),
        array(
            'name'  => 'Olive Green',
            'color' => '#c9b753',
        ),
        array(
            'name'  => 'Rustic Brown',
            'color' => '#6d491f',
        ),
        array(
            'name'  => 'Teal Green',
            'color' => '#38897d',
        ),
        array(
            'name'  => 'Mossy Green',
            'color' => '#517562',
        ),
        array(
            'name'  => 'Light Gray',
            'color' => '#d6dddd',
        ),
        array(
            'name'  => 'Soft Sage',
            'color' => '#b1c4ab',
        ),
    )
);
}
?>