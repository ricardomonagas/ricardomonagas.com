<?php
/**
 * Template Name: Custom Home Page
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>


<div class="bar"></div>

<!-- Begin Social Bar -->

<div class="bs-docs-social">

  <div class="container">

    <ul class="bs-docs-social-buttons">

      <li class="follow-btn">
        <a href="https://twitter.com/rmmonagas" class="twitter-follow-button" data-show-count="false" data-lang="en"><?php _e("<!--:en-->Follow @rmmonagas<!--:--><!--:es-->S&iacute;gue a @rmmonagas<!--:-->"); ?></a>
      </li>

      <li class="facebook-btn">
        <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FRicardo-Monagas%2F156824174474383&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35&amp;appId=188373647894963" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:25px;" allowTransparency="true"></iframe>
      </li>

      <li class="google-plus-btn">
        <div class="g-plusone" data-annotation="inline" data-width="300"></div>
      </li>

    </ul>

  </div>

</div>

<!-- End Social Bar -->

<!-- Begin What Do I Do Content -->

<div class="container">

  <div class="marketing">

    <h1><?php _e("<!--:en-->What do I do?<!--:--><!--:es-->¿A qu&eacute; me dedico?<!--:-->"); ?></h1>
    <p class="marketing-byline"><?php _e("<!--:en-->Know more about what I enjoy to do<!--:--><!--:es-->Conoce m&aacute;s acerca de lo que me gusta realizar<!--:-->"); ?></p>

    <div class="row-fluid">
      <div class="span4">
        <img class="marketing-img" src="<?php bloginfo( 'template_url' );?>/img/companies.png">
        <h2><?php _e("<!--:en-->Projects<!--:--><!--:es-->Proyectos<!--:-->"); ?></h2>
        <p>
          <?php _e("<!--:en-->Actually I'm working on these Startups:<!--:--><!--:es-->Actuamente me encuentro trabajando en las siguientes startups:<!--:-->"); ?>
          <ul class="nav nav-pills nav-stacked">
            <li><a href="http://uppersky.co" target="_blank">Uppersky</a></li>
            <li><a href="http://www.eventosvenezuela.com" target="_blank">Eventosvenezuela.com</a></li>
            <li><a href="http://www.decohierros.com" target="_blank">Decohierros</a></li>
          </ul> 
        </p>
      </div>
      <div class="span4">
        <img class="marketing-img" src="<?php bloginfo( 'template_url' );?>/img/blogging.png">
        <h2><?php _e("<!--:en-->Blogging<!--:--><!--:es-->Blogging<!--:-->"); ?></h2>
        <p><?php _e("<!--:en-->Since December 2011, I've been colaborating to TodoStartups.com. I've written articles about market tendencies, entrepreneurship and important events from Venezuela.<!--:--><!--:es-->Desde Diciembre del 2011, he estado colaborando con el sitio web TodoStartups.com en la publicaci&oacute;n de noticias de tendencias, emprendimientos y eventos.<!--:-->"); ?></p>
      </div>
      <div class="span4">
        <img class="marketing-img" src="<?php bloginfo( 'template_url' );?>/img/conferences.png">
        <h2><?php _e("<!--:en-->Conferences<!--:--><!--:es-->Conferencias<!--:-->"); ?></h2>
        <p><?php _e("<!--:en-->I like to share knowledge about technology, entrepreneurship and market tendencies. It's the reason cos' I've been participating as Speaker on different events.<!--:--><!--:es-->Para compartir los conocimientos adquiridos en el d&iacute;a a d&iacute;a, me he interesado por participar como Conferencista en diversos eventos de Inform&aacute;tica y Emprendimientos en el pa&iacute;s.<!--:-->"); ?></p>
      </div>
    </div>

  </div>

</div>

<!-- End What Do I Do Content -->

<!-- End Template Content -->

<?php get_footer(); ?>