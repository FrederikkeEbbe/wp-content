<?php
    register_nav_menus(array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    ));

    function load_css(){
        wp_register_style('main', get_stylesheet_directory_uri() . '/css/main.css', array(), false, 'all');
        wp_enqueue_style('main');
    }

    add_action('wp_enqueue_scripts', 'load_css');
?>

