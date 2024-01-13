<?php
    /*her sørger vi for at vi kan vælge de her menupunkter inde i wp-admin + hvilke menupunkter der kan vælges */
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
    function opret_bestyrelse_posttype() {
        $labels = array( //her definere vi de forskellige labels inde i wp admin
            'name'               => 'Bestyrelse',
            'singular_name'      => 'Bestyrelse',
            'menu_name'          => 'Bestyrelses medlem',
            'add_new'            => 'Tilføj ny',
            'add_new_item'       => 'Tilføj nyt medlem',
            'edit_item'          => 'Rediger medlem',
            'new_item'           => 'Nyt medlem',
            'view_item'          => 'Se medlem'
        );
    
        $args = array( //her definere vi argumenterne 
            'labels'        => $labels, //bruger de labes vi har defineret tidligere
            'public'        => true, //det er offentligt
            'menu_position' => 5, //positionen inde i wp admin
            'menu_icon'     => 'dashicons-businessman', // Ændr ikonet efter ønske
            'supports'      => array('title', 'editor', 'thumbnail'), //
            'has_archive'   => true,
        );
    
        register_post_type('bestyrelse', $args); //første parameter her er vores slug(det der skal være i vores url), det næste er argumenterne 
    }
    add_action('init', 'opret_bestyrelse_posttype'); //vi hooker vores action og sørger for det er registreret inde i wp 


    function opret_traener_posttype() {
        $labels = array(
            'name'               => 'Træner',
            'singular_name'      => 'Træner',
            'menu_name'          => 'Trænere',
            'add_new'            => 'Tilføj ny',
            'add_new_item'       => 'Tilføj ny træner',
            'edit_item'          => 'Rediger træner',
            'new_item'           => 'Ny træner',
            'view_item'          => 'Se træner'
        );
    
        $args = array(
            'labels'        => $labels,
            'public'        => true,
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-superhero', // Ændr ikonet efter ønske
            'supports'      => array('title', 'editor', 'thumbnail'),
            'has_archive'   => true,
        );
    
        register_post_type('traener', $args);
    }
    add_action('init', 'opret_traener_posttype');



