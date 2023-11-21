<!DOCTYPE html>
<html lang="en">
    <head>
        <?php /*her laver vi en theme hook, den sørger b.l.a for at vi får wp admin bar øverst på siden, så vi ved det er hooked korrekt*/ wp_head(); ?>
        
        <!--Her linker jeg til stylesheet-->
        <link href="<?php echo get_template_directory_uri()?>/css/main.css" rel="stylesheet">
        <script src="<?php echo get_template_directory_uri()?>/js/script.js" defer></script>
        <link rel="stylesheet" href="https://use.typekit.net/pdr3yon.css">
    </head>
<body>
<header>
    <!--Her fortæller vi wp hvilken lokation det her er (se vores functions for de forskellige menuer) -->
    <nav>
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'nav-menu',
                    'menu_class' => 'navmenu'
                )
            );
        ?>
        <!-- her skal der være plads til en knap, til webshoppen-->
    </nav>
</header>
