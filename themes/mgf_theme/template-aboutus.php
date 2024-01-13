<?php
/* 
Template Name: Om os
*/
?>

<?php get_header(); /*her henter vi vores header fil(header.php), det er en wp funktion der er lavet i forvejen */ ?>



<section class='about-blue'>
  <div class='blue-post'>
    <?php get_template_part('includes/section', 'content');?>
  </div>
  <img class="about-img" src="<?php echo get_home_url();?>/wp-content/uploads/2023/11/mgf-about.jpg" alt="Ungehold">
</section>

<section class='about-reg' >
  <img class="about-img" src="<?php echo get_home_url();?>/wp-content/uploads/2023/11/mgf-goals.jpg" alt="Ungehold">
  <?php //følgende kode hjælper os med at få posts ind på siden.
    $args = array(
        'post_type' => 'post',  // Vi ønsker kun indlæg
        'cat' => 14,             // Kategori ID er 8.
        'posts_per_page' => -1, // Vis alle indlæg i kategorien
    );

    $custom_query = new WP_Query($args); //args = argumenter
    
    //her ses en the loop, hvor vi får fat i postene 
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post(); //loopet kører så længe der er posts
            ?> 

            <div class='reg-post'>

            <?php the_content(); ?> </div>
      <?php
        endwhile;

        // Ingen indlæg fundet i den specificerede kategori
    endif;

    // Gendan den oprindelige forespørgsel og nulstil postdata
    wp_reset_postdata();
  ?>
</section> 

<section class='about-blue' >
  <div class='blue-post'>
  <?php //følgende kode hjælper os med at få posts ind på siden. Den bruges til at hente de kategorier vi har lavet i admin og poste tingene i den kategori
    $args = array(
        'post_type' => 'post',  // Vi ønsker kun indlæg
        'cat' => 13,             // Kategori ID er 13.
        'posts_per_page' => -1, // Vis alle indlæg i kategorien
    );

    $custom_query = new WP_Query($args); //args = argumenter
 
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post(); //loopet kører så længe der er posts
            ?> 

            <div class='blue-posts'>

            <?php the_content(); ?> </div>
      <?php
        endwhile;

        // Ingen indlæg fundet i den specificerede kategori
    endif;

    // Gendan den oprindelige forespørgsel og nulstil postdata
    wp_reset_postdata();
  ?>
  </div>
  <img class="about-img" src="<?php echo get_home_url();?>/wp-content/uploads/2023/11/mgf-forall.jpg" alt="Ungehold">
</section> 


<?php get_footer(); /*her henter vi vores footer fil(footer.php), det er en wp funktion der er lavet i forvejen */ ?>