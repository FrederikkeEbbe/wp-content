<?php
    /*her sørger vi for at vi kan vælge de her menupunkter inde i wp-admin */
    register_nav_menus(array(
    'nav-menu' => 'Vis i navigationen',
    'footer-menu' => 'Vis i footer',
    'mobile-menu' => 'Mobile Menu'
    ));

    /*sørger for at vi kan tilføje billeder til vores posts i wp-admin */
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    

    /*Kommenteret ud. Vi behøver ikke denne del. Det bruges til hvis man skal lave child themes.
    her enqueuer vi vores css fil, så vi kan style 
    function load_css(){
        wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
        wp_enqueue_style('main');
    }

    add_action('wp_enqueue_scripts', 'load_css');

    
    her enqueuer vi vores js fil 
    function load_js(){
        wp_register_script('script', get_template_directory_uri() . '/js/script.js', array(), false, true);
    }
    add_action('wp_enqueue_scripts', 'load_js'); */
   
    /* Bestyrelses medlems funktion */
    function opret_medarbejder_posttype() {
        $labels = array(
            'name'               => 'Medarbejdere',
            'singular_name'      => 'Medarbejder',
            'menu_name'          => 'Medarbejdere',
            'add_new'            => 'Tilføj ny',
            'add_new_item'       => 'Tilføj ny medarbejder',
            'edit_item'          => 'Rediger medarbejder',
            'new_item'           => 'Ny medarbejder',
            'view_item'          => 'Se medarbejder',
            'search_items'       => 'Søg efter medarbejder',
            'not_found'          => 'Ingen medarbejdere fundet',
            'not_found_in_trash' => 'Ingen medarbejdere fundet i papirkurven',
        );
    
        $args = array(
            'labels'        => $labels,
            'public'        => true,
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-businessman', // Ændr ikonet efter ønske
            'supports'      => array('title', 'editor', 'thumbnail'),
            'has_archive'   => true,
        );
    
        register_post_type('medarbejder', $args);
    }
    add_action('init', 'opret_medarbejder_posttype');



