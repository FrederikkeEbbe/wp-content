<footer>
  <div class="traeningssteder">
    <?php echo get_post_meta(get_the_ID(), 'footer_section_1', true); ?>
  </div>
  <div class="til-medlemmer">
    <?php echo get_post_meta(get_the_ID(), 'footer_section_2', true); ?>
  </div>
  <div class="kontaktinfo">
    <?php echo get_post_meta(get_the_ID(), 'footer_section_3', true); ?>
  </div>
  <div class="til-instruktore">
    <?php echo get_post_meta(get_the_ID(), 'footer_section_4', true); ?>
  </div>
</footer>
<?php /*her laver en anden theme hook(se header for den anden)*/ wp_footer(); ?>
</body>
</html>