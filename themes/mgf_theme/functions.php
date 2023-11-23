<?php
    /*her sørger vi for at vi kan vælge de her menupunkter inde i wp-admin */
    register_nav_menus(array(
    'nav-menu' => 'Navigation menu',
    'footer-menu' => 'Footer Menu',
    'mobile-menu' => 'Mobile Menu'
    ));

    /*sørger for at vi kan tilføje billeder til vores posts i wp-admin */
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    

    /*her laves der custom fields meta boxes i wp admin(så klient kan redigere teksten)*/
    function add_custom_fields_meta_boxes(){
        add_meta_box(
            /*id*/
            'traeningssteder',
            /*titel i wp*/
            'Træningssteder',
            /*callback function der kalder det i wp admin*/
            'display_custom_fields_meta_box',
            /*bestemmer at det skal vises på vores pages og posts*/
            array('post', 'page'),
            /*kontekst af hvor den skal vises*/
            'normal',
            null,
            /*sætter det ind i et array så vi looper mellem alle sektionerne*/
            array('id' => 'footer_section_1')
        );
        add_meta_box(
            /*id*/
            'til-medlemmer',
            /*titel i wp*/
            'Til medlemmer',
            /*callback function der kalder det i wp admin*/
            'display_custom_fields_meta_box',
            /*bestemmer at det skal vises på vores pages og posts*/
            array('post', 'page'),
            /*kontekst af hvor den skal vises*/
            'normal',
            null,
            /*sætter det ind i et array så vi looper mellem alle sektionerne*/
            array('id' => 'footer_section_2')
        );
        add_meta_box(
            /*id*/
            'kontaktinfo',
            /*titel i wp*/
            'Kontaktinfo',
            /*callback function der kalder det i wp admin*/
            'display_custom_fields_meta_box',
            /*bestemmer at det skal vises på vores pages og posts*/
            array('post', 'page'),
            /*kontekst af hvor den skal vises*/
            'normal',
            null,
            /*sætter det ind i et array så vi looper mellem alle sektionerne*/
            array('id' => 'footer_section_3')
        );
        add_meta_box(
            /*id*/
            'til-instruktore',
            /*titel i wp*/
            'Til instruktøre',
            /*callback function der kalder det i wp admin*/
            'display_custom_fields_meta_box',
            /*bestemmer at det skal vises på vores pages og posts*/
            array('post', 'page'),
            /*kontekst af hvor den skal vises*/
            'normal',
            null,
            /*sætter det ind i et array så vi looper mellem alle sektionerne*/
            array('id' => 'footer_section_4')
        );
    }

    function display_custom_fields_meta_box($post, $metabox){
        /*få fat i id*/
        $footer_section_id = $metabox['args']['id'];
        /*vis html baseret på footer section id */
        ?>
        <label for="<?php echo esc_attr($footer_section_id); ?>">Footer Section <?php echo esc_html($footer_section_id); ?> </label>
        <input type="text" name="<?php echo esc_attr($footer_section_id); ?>" value= "<?php echo esc_attr(get_post_meta($post->ID, $footer_section_id, true)); ?>" style = "width: 100%;">
        <?php
    }

    function save_custom_fields_data($post_id){
        /*gemme custom fields data, når der er indtastet noget, her tjekker den om wp er igang med at autosave, og hvis den gør returner den tidligt, så den ikke gemmer unødigt*/
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        /*liste af footer sections id */
        $footer_section_ids = array('footer_section_1', 'footer_section_2', 'footer_section_3', 'footer_section_4');
        foreach($footer_section_ids as $footer_section_id){
            if (isset($_POST[$footer_section_id])){
                update_post_meta($post_id, $footer_section_id, sanitize_text_field($_POST[$footer_section_id]));
            }
        }
    }

    add_action('add_meta_boxes', 'add_custom_fields_meta_boxes');
    add_action('save_post', 'save_custom_fields_data');




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
   



