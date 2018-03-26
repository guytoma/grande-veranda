<?php get_header(); ?>
<section id="main">
  <div class="textarea">
    <?php while ( have_posts() ) : the_post(); ?>

         <?php the_content();?>

  </div>

         <div class="metabox">
           <?php echo get_avatar( get_the_author_meta( 'ID' ), 54 ); ?>
           <p>
             <b><?php echo get_the_author(); ?><br>
             <?php the_date(); ?></b>
           <p>
       </div>
       <?php
       // Previous/next post navigation.
         the_post_navigation( array(
             'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Volgend bericht:', 'twentyfifteen' ) . '</span> ' .
                 '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                 '<span class="post-title">%title</span>',
             'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Vorig bericht:', 'twentyfifteen' ) . '</span> ' .
                 '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                 '<span class="post-title">%title</span>',
         ) );?>

     <?php endwhile; ?>
     <?php // If comments are open or we have at least one comment, load up the comment template.
     if ( comments_open() || get_comments_number() ) :
       comments_template();
     endif;?>

</section>
<?php get_footer(); ?>
