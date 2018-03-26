<?php get_header();
/**
 * Template Name: Contact page
 *
 * @package WordPress
 * @subpackage grandeveranda
 * @since Grande Veranda 1.0
 */
 ?>
<section id="main">
  <div class="textbox" id="contactinfo">
    <h3>Adresgegevens</h3>
    <p>Ton en Ingrid Witteman-Visser<br>
       Le Crot au Meunier<br>
       71990 La Grande Verrière<br>
       Frankrijk.<br>
      <br>
    <a href="mailto:ingrid@ingridvisserconsult.nl"><i class="fa fa-envelope-o"></i>ingrid@ingridvisserconsult.nl</a><br>
    <a href="tel:+31653805087"><i class="fa fa-phone"></i>Ingrid: +31 (0) 653 805 087</a><br>
    <a href="tel:+310624888904"><i class="fa fa-phone"></i>Ton: +31 (0) 624 888904</a></p>
    <div id="social-icons">
      <a href="https://twitter.com/IngridVisserFR"><i class="fa fa-twitter-square fa-2x"></i></a>
      <a href="https://www.facebook.com/ingrid.visser.319"><i class="fa fa-facebook-square fa-2x"></i></a>
      <a href="https://www.linkedin.com/in/adviestalent"><i class="fa fa-linkedin-square fa-2x"></i></a>
    </div>
  </div>
  <div class="textbox" id="contactform">
    <h3>Contactformulier</h3>
    <p>Heb je een opmerking of vraag? Vul ons contactformulier in en we nemen zo spoedig mogelijk contact met je op.</p>
    <form action="https://formspree.io/ingrid@ingridvisserconsult.nl" method="post">
      <fieldset>
        <input class="halfinput" type="text" name="voornaam" placeholder="Voornaam">
        <input class="halfinput" type="text" name="achternaam" placeholder="Achternaam">
        <input class="fullinput" type="text" name="_replyto" placeholder="E-mail">
        <textarea name="bericht" placeholder="Uw bericht"></textarea>
        <input class="button" type="submit" value="Versturen">
      </fieldset>
    </form>
    </form>
  </div>
</section>
<?php get_footer(); ?>
