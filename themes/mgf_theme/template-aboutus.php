<?php
/* 
Template Name: Om os
*/
?>

<?php get_header(); /*her henter vi vores header fil(header.php), det er en wp funktion der er lavet i forvejen */ ?>

<div>
  <h1>  <?php the_title();?>  </h1>
  
  
  <?php get_template_part('includes/section', 'content');?>
</div>

<?php get_footer(); /*her henter vi vores footer fil(footer.php), det er en wp funktion der er lavet i forvejen */ ?>