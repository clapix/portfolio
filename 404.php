<?php
/**
* Template for displaying 404 pages (Not Found)
*
* @package nakedpress
*/

get_header(); ?>

<div data-scroll-section class="grid page-min-height mt-4">

  <div class="col-100">

    <h1 class="title">
      <span data-scroll class="text-reveal"><b class="delay-1"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nakedpress' ); ?></b></span>
    </h1>

    <div data-scroll class="fade-up delay-4">

      <h2><?php esc_html_e( '404 Error', 'nakedpress' ); ?></h2>

      <p><?php esc_html_e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'nakedpress' ); ?></p>

      <?php get_search_form(); ?>

    </div>

  </div>

</div>

<?php get_footer(); ?>
