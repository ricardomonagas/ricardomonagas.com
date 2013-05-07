<?php
/**
 *
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: August 15, 2012
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
   <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'bootstrapwp' ), max( $paged, $page ) );

  ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Le fav and touch icons -->

    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' );?>/img/favicon.png">

  <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

   


    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/style.css">
    
  </head>
  <body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">

  <!-- Header -->

  <header class="jumbotron subhead" id="overview">

    <div class="container">

      <?php echo qtrans_generateLanguageSelectCode('text'); ?>

      <h1>Ricardo Monagas</h1>

      <p class="lead"><?php _e("<!--:en-->Entrepreneur, Software Developer, Blogger, and Speaker<!--:--><!--:es-->Emprendedor, Desarrollador de Software, Blogger y Conferencista<!--:-->"); ?></p>

      <p>

        <h3><?php _e("<!--:en-->Follow me on<!--:--><!--:es-->S&iacute;gueme en<!--:-->"); ?></h3>
      
        <button id="twitter-btn" class="btn btn-primary btn-large" type="button"><i class="icon-user icon-white"></i> <?php _e("<!--:en-->Visit my Twitter Page<!--:--><!--:es-->Visita m&iacute; Twitter<!--:-->"); ?></button>

        <button id="facebook-btn" class="btn btn-primary btn-large" type="button"><i class="icon-globe icon-white"></i> <?php _e("<!--:en-->Visit my Facebook Page<!--:--><!--:es-->Visita m&iacute; Facebook<!--:-->"); ?></button>

        <button id="linkedin-btn" class="btn btn-primary btn-large" type="button"><i class="icon-briefcase icon-white"></i> <?php _e("<!--:en-->Visit my LinkedIn Page<!--:--><!--:es-->Visita m&iacute; LinkedIn<!--:-->"); ?></button>

      </p>

      <img id="ricardo-img" src="<?php bloginfo( 'template_url' );?>/img/ricardo.png" alt="Ricardo Monagas" />

    </div>
       
  </header>
   
  <!-- End Header -->
              
  <!-- Begin Template Content -->