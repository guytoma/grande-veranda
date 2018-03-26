<?php get_header();
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage grandeveranda
 * @since Grande Veranda 1.0
 */
 ?>
<section id="main">
  <div class="textbox">
    <?php if(is_front_page()) {
        $post_id = 2698; // assign post id
        $queried_post = get_page($post_id); ?>
        <div class='frontpageimage'><?php echo get_the_post_thumbnail( $post_id); ?></div>
          <?php $value = the_field( "tekst_op_homepage", 2698 ); ?>
          <a href="http://lagrandeveranda.nl/gites/"><button class="readmore">Lees meer</button></a>
    <?php  } ?>
  </div>
  <div class="textbox">
    <?php if(is_front_page()) {
        $post_id = 2702; // assign post id
        $queried_post = get_page($post_id); ?>
        <div class='frontpageimage'><?php echo get_the_post_thumbnail( $post_id); ?></div>
          <?php $value = the_field( "tekst_op_homepage", 2702 ); ?>
          <a href="<?php echo get_permalink($post_id); ?>"><button class="readmore">Lees meer</button></a>
    <?php  } ?>
  </div>
</section>
<?php get_footer(); ?>
