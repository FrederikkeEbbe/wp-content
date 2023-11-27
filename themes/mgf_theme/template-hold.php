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
    <img src="http://localhost/mgf/wp-content/uploads/2023/11/team-family.jpg" alt="Familiehold">
    <h1>Familiehold</h1>
  </a>
  <a class='teamtypeslink' href="#"> 
    <img src="http://localhost/mgf/wp-content/uploads/2023/11/team-children.jpg" alt="Børnehold">
    <h1>Børnehold</h1>
  </a>
  <a class='teamtypeslink' href="#"> 
    <img src="http://localhost/mgf/wp-content/uploads/2023/11/team-young.jpg" alt="ungdomshold">
    <h1>Ungdomshold</h1>
  </a>
  <a class='teamtypeslink' href="#"> 
    <img src="http://localhost/mgf/wp-content/uploads/2023/11/team-adult.jpg" alt="Voksenhold">
    <h1>Voksenhold</h1>
  </a>
  <a class='teamtypeslink' href="#"> 
    <img src="http://localhost/mgf/wp-content/uploads/2023/11/team-tg.jpg" alt="Team gym">
    <h1>Team gym</h1>
  </a>
  <a class='teamtypeslink' href="#"> 
    <img src="http://localhost/mgf/wp-content/uploads/2023/11/team-gp.jpg" alt="Grand prix">
    <h1>Grand prix</h1>
  </a>

</div>
<?php get_footer(); /*her henter vi vores footer fil(footer.php), det er en wp funktion der er lavet i forvejen */ ?>