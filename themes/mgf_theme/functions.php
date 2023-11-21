<?php
    /*her sørger vi for at vi kan vælge de her menupunkter inde i wp-admin */
    register_nav_menus(array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    ));

    /*her enqueuer vi vores css fil, så vi kan style */
    function load_css(){
        wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
        wp_enqueue_style('main');
    }

    add_action('wp_enqueue_scripts', 'load_css');

    /*her enqueuer vi vores js fil */
    function load_js(){
        wp_register_script('script', get_template_directory_uri() . '/js/script.js', array(), false, true);
        wp_enqueue_script('script');
    }
    add_action('wp_enqueue_scripts', 'load_js');
?>

