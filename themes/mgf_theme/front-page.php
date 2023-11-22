
<?php get_header(); /*her henter vi vores header fil(header.php), det er en wp funktion der er lavet i forvejen */ ?>

<div class='hero-video'>
  <?php //henter content på siden. Her mediefilen lagt ind i Home page
  get_template_part('includes/section', 'content');
  ?>
</div>
<section class=home-teams>
<?php //følgende kode hjælper os med at få posts ind på siden.
    $args = array(
        'post_type' => 'post',  // Vi ønsker kun indlæg
        'cat' => 9,             // Kategori ID er 9.
        'posts_per_page' => -1, // Vis alle indlæg i kategorien
    );

    $custom_query = new WP_Query($args); //args = argumenter
 
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            ?> 

            <div class='post-frontpage post-teams'>

            <?php the_content(); ?> 

              <div class='teams-contain'>

                <a class='teams-link' href="#">
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/371521014_872576170988323_1780345655675662268_n.jpg" alt="Børnehold">
                  <p>Familie</p>
                </a>
                
                <a class='teams-link' href="#">
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/371521014_872576170988323_1780345655675662268_n.jpg" alt="Børnehold">
                  <p>Børn</p>
                </a>
                
                <a class='teams-link' href="#">
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/371521014_872576170988323_1780345655675662268_n.jpg" alt="Børnehold">
                  <p>Unge</p>
                </a>
                
                <a class='teams-link' href="#">
                  <img class="teams'img" src="http://localhost/mgf/wp-content/uploads/2023/11/371521014_872576170988323_1780345655675662268_n.jpg" alt="Børnehold">
                  <p>Voksen</p>
                </a>
                
                <a class='teams-link' href="#">
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/371521014_872576170988323_1780345655675662268_n.jpg" alt="Børnehold">
                  <p>TeamGym</p>
                </a>
                
                <a class='teams-link' href="#">
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/371521014_872576170988323_1780345655675662268_n.jpg" alt="Børnehold">
                  <p>GrandPrix</p>
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
</section>

<section class='home-post' >
  <?php //følgende kode hjælper os med at få posts ind på siden.
    $args = array(
        'post_type' => 'post',  // Vi ønsker kun indlæg
        'cat' => 8,             // Kategori ID er 8.
        'posts_per_page' => -1, // Vis alle indlæg i kategorien
    );

    $custom_query = new WP_Query($args); //args = argumenter
 
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            ?> 

            <div class='post-frontpage post-home'>

            <?php the_content(); ?> </div>
      <?php
        endwhile;

        // Ingen indlæg fundet i den specificerede kategori
    endif;

    // Gendan den oprindelige forespørgsel og nulstil postdata
    wp_reset_postdata();
  ?>
</section> 


<?php get_footer(); /*her henter vi vores footer fil(footer.php), det er en wp funktion der er lavet i forvejen */ ?>