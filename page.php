<?php
/**
* Template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package nakedpress
*/
get_header(); ?>

<?php if ( has_post_thumbnail() ) { ?>

  <?php get_template_part('inc/cover'); ?>

<?php } ?>

<div data-scroll-section class="grid page-min-height <?php if ( has_post_thumbnail() ) { echo ' mt-sma-1 mt-2'; } else { echo ' mt-4'; } ?>">

  <div class="col-60">


    <?php if (have_posts()) :?>
      <?php while(have_posts()) : the_post(); ?>


        <article  <?php post_class(); ?>>

          <?php if ( has_post_thumbnail() ) { ?>

            <div data-scroll class="fade-up delay-3">

              <?php the_content(esc_html__('Read More...', 'nakedpress'));?>

            </div>

          <?php } else { ?>

            <h1 class="headline">
              <span data-scroll class="text-reveal"><b><?php the_title(); ?></b></span>
            </h1>

            <div data-scroll class="fade-up delay-7">

              <?php the_content(esc_html__('Read More...', 'nakedpress'));?>

            </div>

          <?php } ?>





        </article>


      <?php endwhile; ?>
    <?php else : ?>

      <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nakedpress'); ?></p>

    <?php endif; ?>

  </div>


</div>


<?php get_footer(); ?>
