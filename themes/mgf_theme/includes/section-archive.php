<!-- arkiv section. Der loop'er posts -->

<?php if( have_posts() ): while( have_posts() ): the_post();?>
 
  <div class="card"> <!-- Til at style et card -->

    <div class="card-body"> <!-- Til at style indhold card -->

      <h1>  <?php the_title();?>  </h1>
      <?php the_excerpt();?> <!-- Samler tekst i stedet for at vise hele content -->
      <a href="<?php the_permalink();?>">Læs mere</a> <!-- Link der sender en til post -->

    </div>

  </div>

<?php endwhile; else: endif;?>

<!--  -->