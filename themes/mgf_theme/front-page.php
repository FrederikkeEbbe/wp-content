
<?php get_header(); /*her henter vi vores header fil(header.php), det er en wp funktion der er lavet i forvejen */ ?>

<section class='hero-video-contain'>
  <div class='hero-video'>
    <?php //henter content på siden. Her mediefilen lagt ind i Home page
    get_template_part('includes/section', 'content');
    ?>
  </div>
</section>
<div class="waves blue">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
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

                <a class='teams-link' href="http://mgf.claralacour.com/hold-tilmelding/familie/">
                  <img class="teams-img" src="<?php echo get_home_url();?>/wp-content/uploads/2023/11/category-family-boys.jpg" alt="Familiehold">
                  <p>Familie</p>
                </a>
                
                <a class='teams-link' href="http://mgf.claralacour.com/hold-tilmelding/born/">
                  <img class="teams-img" src="<?php echo get_home_url();?>/wp-content/uploads/2023/11/category-child-smile.jpg" alt="Børnehold">
                  <p>Børn</p>
                </a>
                
                <a class='teams-link' href="http://mgf.claralacour.com/hold-tilmelding/unge/">
                  <img class="teams-img" src="<?php echo get_home_url();?>/wp-content/uploads/2023/11/category-young.jpg" alt="Ungehold">
                  <p>Unge</p>
                </a>
                
                <a class='teams-link' href="http://mgf.claralacour.com/hold-tilmelding/voksen/">
                  <img class="teams-img" src="<?php echo get_home_url();?>/wp-content/uploads/2023/11/category-adult-walk.jpg" alt="Voksenhold">
                  <p>Voksen</p>
                </a>
                
                <a class='teams-link' href="http://mgf.claralacour.com/hold-tilmelding/teamgym/">
                  <img class="teams-img" src="<?php echo get_home_url();?>/wp-content/uploads/2023/11/category-teamgym-boys.jpg" alt="TeamGym">
                  <p>TeamGym</p>
                </a>
                
                <a class='teams-link' href="http://mgf.claralacour.com/hold-tilmelding/grandprix">
                  <img class="teams-img" src="<?php echo get_home_url();?>/wp-content/uploads/2023/11/category-gp-group.jpg" alt="GrandPrix">
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

<section class='home-news'>
  <?php //følgende kode hjælper os med at få posts ind på siden.
    $args = array(
        'post_type' => 'post',  // Vi ønsker kun indlæg
        'cat' => 16,             // Kategori ID er 8.
        'posts_per_page' => -1, // Vis alle indlæg i kategorien
    );

    $custom_query = new WP_Query($args); //args = argumenter
 
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            ?> 

            <div class='post-frontpage post-news'>

            <?php the_content(); ?> 
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

            <?php the_content(); ?> 
          </div>
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