<?php get_header(); ?>
<section id="main">
  <div class="textarea">
    <?php while ( have_posts() ) : the_post();
         the_content();
        endwhile;
        ?>
  </div>
</section>
<?php get_footer(); ?>
