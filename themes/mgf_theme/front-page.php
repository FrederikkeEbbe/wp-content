
<?php get_header(); /*her henter vi vores header fil(header.php), det er en wp funktion der er lavet i forvejen */ ?>

<section class='hero-video-contain'>
<div class='hero-video'>
  <?php //henter content på siden. Her mediefilen lagt ind i Home page
  get_template_part('includes/section', 'content');
  ?>
</div>
</section>
<div class="waves">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>
<main>
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
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/category-family-boys.jpg" alt="Familiehold">
                  <p>Familie</p>
                </a>
                
                <a class='teams-link' href="#">
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/category-child-smile.jpg" alt="Børnehold">
                  <p>Børn</p>
                </a>
                
                <a class='teams-link' href="#">
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/category-young.jpg" alt="Ungehold">
                  <p>Unge</p>
                </a>
                
                <a class='teams-link' href="#">
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/category-adult-walk.jpg" alt="Voksenhold">
                  <p>Voksen</p>
                </a>
                
                <a class='teams-link' href="#">
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/category-teamgym-boys.jpg" alt="TeamGym">
                  <p>TeamGym</p>
                </a>
                
                <a class='teams-link' href="#">
                  <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/category-gp-group.jpg" alt="GrandPrix">
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

</main>
<?php get_footer(); /*her henter vi vores footer fil(footer.php), det er en wp funktion der er lavet i forvejen */ ?>