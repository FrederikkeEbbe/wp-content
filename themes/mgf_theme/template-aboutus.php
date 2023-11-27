<?php
/* 
Template Name: Om os
*/
?>

<?php get_header(); /*her henter vi vores header fil(header.php), det er en wp funktion der er lavet i forvejen */ ?>
<main>
<div>
  <h1>  <?php the_title();?>  </h1>
  <?php get_template_part('includes/section', 'content');?>
</div>
<?php //følgende kode hjælper os med at få posts ind på siden.
    $args = array(
        'post_type' => 'post',  // Vi ønsker kun indlæg
        'cat' => 12,             // Kategori ID er 12.
        'posts_per_page' => -1, // Vis alle indlæg i kategorien
    );

    $custom_query = new WP_Query($args); //args = argumenter
 
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            ?> 

            <div>
            <?php the_content(); ?> </div>
      <?php
        endwhile;

        // Ingen indlæg fundet i den specificerede kategori
    endif;

    // Gendan den oprindelige forespørgsel og nulstil postdata
    wp_reset_postdata();
  ?>
</main>
<?php get_footer(); /*her henter vi vores footer fil(footer.php), det er en wp funktion der er lavet i forvejen */ ?>