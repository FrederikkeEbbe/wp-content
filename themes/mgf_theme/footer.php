<footer>
    <div class="footer-grid">
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
        'cat' => 10,             // Kategori ID er 10.
        'posts_per_page' => -1, // Vis alle indlæg i kategorien
    );

    $custom_query = new WP_Query($args); //args = argumenter
 
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            ?> 

            <div class='footersection'>
            <?php the_content(); ?> </div>
      <?php
        endwhile;

        // Ingen indlæg fundet i den specificerede kategori
    endif;

    // Gendan den oprindelige forespørgsel og nulstil postdata
    wp_reset_postdata();
  ?>
  </div>
  <?php //følgende kode hjælper os med at få posts ind på siden.
    $args = array(
        'post_type' => 'post',  // Vi ønsker kun indlæg
        'cat' => 11,             // Kategori ID er 11.
        'posts_per_page' => -1, // Vis alle indlæg i kategorien
    );

    $custom_query = new WP_Query($args); //args = argumenter
 
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            ?> 

            <div class='somefooter'>
                <?php the_content(); ?>
                <div class="links">
                    <a href="https://www.facebook.com/MunkebjergGymnastikforening">
                        <img src="http://localhost/mgf/wp-content/uploads/2023/11/fb.png" alt="Facebook link">
                    </a> 
                    <a href="https://www.instagram.com/">
                        <img src="http://localhost/mgf/wp-content/uploads/2023/11/insta.png" alt="Instagram link">
                    </a> 
                    <a href="https://www.tiktok.com/explore">
                        <img src="http://localhost/mgf/wp-content/uploads/2023/11/tiktok.png" alt="Tiktok link">
                    </a>
                </div>
            </div>
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