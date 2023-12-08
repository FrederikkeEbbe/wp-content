<!DOCTYPE html>
<html lang="en">
    <head>
        <?php /*her laver vi en theme hook, den sørger b.l.a for at vi får wp admin bar øverst på siden, så vi ved det er hooked korrekt*/ wp_head(); ?>
        
        <!--Her linker jeg til stylesheet-->
        <link href="<?php echo get_template_directory_uri()?>/css/main.css" rel="stylesheet">
        <script src="<?php echo get_template_directory_uri()?>/js/script.js" defer></script>
        <link rel="stylesheet" href="https://use.typekit.net/pdr3yon.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
<header>
    <nav>
        <a href="<?php echo home_url()?>">
            <img class="logo" src="<?php echo get_home_url();?>/wp-content/uploads/2023/11/munkebjerg_logo.png" alt="Logo">
        </a>
        <div class="nav-items">   
            <!--Her fortæller vi wp hvilken lokation det her er (se vores functions for de forskellige menuer) -->
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'nav-menu',
                        'menu_class' => 'navmenu'
                    )
                );
                
            ?>
            <form action="https://shop.sportogprofil.dk/munkebjerg/da/735-klubdragt">
                <button class="webshop-button" type="submit">Webshop</button>
            </form> 
            <div class='burger'>
                <div class='line-1'></div>
                <div class='line-2'></div>
                <div class='line-3'></div>
            </div>
        </div>
    </nav>
</header>
