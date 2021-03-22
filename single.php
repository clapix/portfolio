<?php get_header(); ?>

<div data-scroll-section class="grid page-min-height mt-4">

  <main class="col-70">

    <?php if (have_posts()) :?>
      <?php while(have_posts()) : the_post(); ?>

        <article <?php post_class(); ?>>



          <h1 class="headline">
            <span data-scroll class="text-reveal"><b><?php the_title(); ?></b></span>
          </h1>

          <div data-scroll class="fade-up delay-4 mb-3">


          <?php
          if ( has_excerpt( $post->ID ) ) {
            echo ' <h2>' . get_the_excerpt() . '</h2>';
          } ?>



            <p><strong> <?php the_time('j M , Y') ?></strong>	 <?php the_category(', '); ?></p>

            <?php the_post_thumbnail('nakedpress_single', array('class' => 'img-article','alt' => get_the_title())); ?>

            <?php the_content(esc_html__('Read More...', 'nakedpress'));?>

            <?php wp_link_pages('pagelink=Page %'); ?>

            <?php $post_tags = wp_get_post_tags($post->ID); if(!empty($post_tags)) {?>
              <p><span> <i class="fa fa-tag"></i> <?php the_tags('', ', ', ''); ?> </span></p>
            <?php } ?>

            <div class="mt-2">
              <?php comments_template(); ?>
            </div>




          </div>

        </article>

      <?php endwhile;?>
    <?php else : ?>

      <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nakedpress'); ?></p>

    <?php endif; ?>

  </main>

  <aside class="col-30">

    <?php get_sidebar(); /* insert sidebar */ ?>

  </aside>

</div>

<?php get_footer(); ?>
