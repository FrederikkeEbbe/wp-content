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
<div class ="teamtypes">
  <a class='teamtypeslink' href="#"> 
    <img class="teams-img" src="http://localhost/mgf/wp-content/uploads/2023/11/371521014_872576170988323_1780345655675662268_n.jpg" alt="Familie hold">
    <h1>Familie</h1>
  </a>
                
</div>
<?php get_footer(); /*her henter vi vores footer fil(footer.php), det er en wp funktion der er lavet i forvejen */ ?>