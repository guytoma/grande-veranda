<!doctype html>

<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="Kazeko">

    <script src="https://use.fontawesome.com/f01bc4e46c.js"></script>

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <?php wp_head();?>
  </head>
  <body>
    <div class="container">
      <div id="headerandhero">
          <?php if(is_front_page()) {
             echo do_shortcode('[metaslider id="3043"]');
           }?>
           <?php if(is_home()) { ?>
             <div id="heroimgholder" style="background-image: url(http://lagrandeveranda.nl/wp-content/uploads/2018/01/IMG_5259.jpg)">
             </div>
             <h1>blog L'Esprit Hollandaise</h1>
          <?php } else { ?>

        <div id="heroimgholder" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        </div>
        <h1><?php the_title();?></h1>
      <?php } ?>
    </div> <!--End headerandhero-->
      <header>
        <i id="mobile-menu" class="fa fa-bars fa-3x" aria-hidden="true" onmouseover="document.getElementById('hidden-menu-nav').style.top = '0px';"></i>
        <nav id="hidden-menu-nav" class="menu-nav" onmouseleave="document.getElementById('hidden-menu-nav').style.top = '-385px';">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
        <nav id="shown-menu-nav" class="menu-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
      </header>
