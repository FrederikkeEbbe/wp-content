<!DOCTYPE html>
<html lang="en">
    <head>
        <?php /*her laver vi en theme hook, den sørger b.l.a for at vi får wp admin bar øverst på siden, så vi ved det er hooked korrekt*/ wp_head(); ?>
        
        <!--Her linker jeg til stylesheet-->
        <link href="<?php echo get_template_directory_uri()?>/css/main.css" rel="stylesheet">
    </head>
<body>
<?php wp_nav_menu(); 
