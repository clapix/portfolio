<?php
/**
* Template for displaying Slider with Post
*
* @package nakedpress
*/
/*

Template Name: Home Page

*/
?>
<?php get_header(); ?>


<?php if ( has_post_thumbnail() ) { ?>

  <?php get_template_part('inc/cover'); ?>

<?php } ?>


<?php if (have_posts()) :?>
  <?php while(have_posts()) : the_post(); ?>


    <?php the_content();?>
    

  <?php endwhile; ?>
<?php else : ?>

  <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nakedpress'); ?></p>

<?php endif; ?>



<?php get_footer(); ?>
