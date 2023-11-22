<?php get_header(); /*her henter vi vores header fil(header.php), det er en wp funktion der er lavet i forvejen */ ?>

<div>

  <?php get_template_part('includes/section', 'archive');?> <!-- Her henter den 'includes' mappe, så 'section', og til sidst 'archive'-->

</div>

<?php get_footer(); /*her henter vi vores footer fil(footer.php), det er en wp funktion der er lavet i forvejen */ ?>