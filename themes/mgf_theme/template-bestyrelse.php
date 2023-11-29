<?php
/* 
Template Name: Bestyrelse
*/
?>

<?php get_header(); /*her henter vi vores header fil(header.php), det er en wp funktion der er lavet i forvejen */ ?>
  
<div class='bestyrelse-contain'>
    <?php get_template_part('includes/section', 'content');?>
</div>

<main>
<?php
// WP_Query for at hente medarbejderne
$bestyrelse_query = new WP_Query(array(
    'post_type' => 'bestyrelse', // Bruger den brugerdefinerede posttype
    'posts_per_page' => -1, // Vis alle medarbejdere, fjern denne linje for at begrænse antallet
));

// Loop gennem medarbejdere og vis dem
if ($bestyrelse_query->have_posts()) :
    while ($bestyrelse_query->have_posts()) : $bestyrelse_query->the_post();
?>
        <div class="bestyrelse-contain">
            <div class="bestyrelse-info">
                <p><?php the_content();?></p>
            </div>
        </div>
<?php
    endwhile;
else :
    
endif;

// Nulstil WP_Query
wp_reset_postdata();
?>

</main>
<?php get_footer(); /*her henter vi vores footer fil(footer.php), det er en wp funktion der er lavet i forvejen */ ?>