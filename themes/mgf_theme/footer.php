<footer>
  <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footermenu'
                )
            );
        ?>
</footer>
<?php /*her laver en anden theme hook(se header for den anden)*/ wp_footer(); ?>
</body>
</html>