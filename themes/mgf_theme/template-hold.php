<?php
/* 
Template Name: Hold & tilmelding
*/
?>

<?php get_header(); /*her henter vi vores header fil(header.php), det er en wp funktion der er lavet i forvejen */ ?>
<div class="header-section">
  <section class="padding">
    <h1>  <?php the_title();?>  </h1>  
    <?php get_template_part('includes/section', 'content');?>
  </section>
</div>
<main>
  
</main>
<?php get_footer(); /*her henter vi vores footer fil(footer.php), det er en wp funktion der er lavet i forvejen */ ?>