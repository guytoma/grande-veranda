<?php get_header(); ?>
<section id="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="textbox">
      <a href="<?php the_permalink(); ?>">
      <div class='frontpageimage'><?php echo get_the_post_thumbnail( $post_id); ?></div>
      <h3><?php the_title(); ?></h3></a>
      <?php  // Declare global $more (before the loop).
      global $more;

      // Set (inside the loop) to display content above the more tag.
      $more = 0;

      the_content( 'More ...' );
      ?>
      <div class="metabox">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 54 ); ?>
        <p>
          <b><?php echo get_the_author(); ?><br>
          <?php echo get_the_date(); ?></b>
        <p>
    </div>
    </div>
  <?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  <?php wpbeginner_numeric_posts_nav(); ?>
</section>
<?php get_footer(); ?>
