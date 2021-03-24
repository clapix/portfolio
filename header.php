<?php

/**
* Header template for our theme
*
* Displays all of the <head> section and everything up till <div class="container">.
*
* @since nakedpress
*/

?>

<!DOCTYPE html>

<html <?php language_attributes(); /* add attributes */ ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo( 'description' );   /* insert wp blog description */ ?>" />

  <!-- Meta for IE support -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <?php wp_head(); /* insert scripts and tags in header */ ?>

</head>
<body <?php body_class(); /* add class to body */  ?>>



  <div class="preloader"></div>
      
    <a href="<?php echo home_url(); ?>" class="logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="">
    </a>
  

    <div class="menu-side">

      <?php /* add menu set in location header */
      wp_nav_menu(array(
        'theme_location' => 'header',
        'walker' => new Clean_Walker_Nav(),
        'container' => false,
        'items_wrap' => '<ul class="">%3$s</ul>'
      ));
      ?>

    </div>

    <div class="menu-hidden">

      <div class="grid">
        <div class="col-50 vertical-center">

          <?php /* add menu set in location header */
          wp_nav_menu(array(
            'theme_location' => 'header',
            'walker' => new Clean_Walker_Nav(),
            'container' => false,
            'items_wrap' => '<ul class="menu-hidden__items">%3$s</ul>'
          ));
          ?>

        </div>

        <div class="col-50 vertical-center">

          <div>
            <h3>Titolo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed perferendis repudiandae magni ullam tenetur, possimus soluta, omnis facere, quas eius hic obcaecati ducimus sunt excepturi quaerat dolores nihil ex blanditiis.</p>
            <a href="<?php echo get_permalink( get_page_by_path( 'contatti' ) ) ?>" class="button">Contatti</a>
          </div>

        </div>
      </div>
    </div>

    <div class="hamburger">
      <div class="icon-hamburger">
        <span></span>
      </div>
    </div>




  <?php if (is_page_template( 'page-templates/home-page.php' )) { /* if is home page template show the code inside */ ?>

    <!-- seo title home -->
    <h1 class="display-none"><?php bloginfo('name'); /* insert blog name */ ?> -  <?php bloginfo('description'); /* insert blog description */  ?></h1>

  <?php } /* end if */ ?>



  <div class="scroll-container" data-scroll-container>

    <div id="swup" class="transition-fade">
