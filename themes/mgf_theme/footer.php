<footer>
    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'footermenu'
                )
            );
    ?>
    <?php //følgende kode hjælper os med at få posts ind på siden.
    $args = array(
        'post_type' => 'post',  // Vi ønsker kun indlæg
        'cat' => 10,             // Kategori ID er 8.
        'posts_per_page' => -1, // Vis alle indlæg i kategorien
    );

    $custom_query = new WP_Query($args); //args = argumenter
 
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            ?> 

            <div class='footersection'>
            <?php the_title(); ?>
            <?php the_content(); ?> </div>
      <?php
        endwhile;

        // Ingen indlæg fundet i den specificerede kategori
    endif;

    // Gendan den oprindelige forespørgsel og nulstil postdata
    wp_reset_postdata();
  ?>
</footer>
<?php /*her laver en anden theme hook(se header for den anden)*/ wp_footer(); ?>
</body>
</html>