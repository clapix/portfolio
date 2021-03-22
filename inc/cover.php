
<?php
/* Image */
$image_url =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'nakedpress_big' );
?>

<div data-scroll-section class="cover" style="background: url(<?php echo  $image_url[0]; ?>) no-repeat center center; background-size: cover;">
  <div class="cover__content">
    <h1 class="headline">
      <span data-scroll class="text-reveal"><b><?php the_title(); ?></b></span>
    </h1>
    <p data-scroll class="subtitle fade-up delay-7 max-width">  <?php echo get_the_excerpt();?>  </p>
</div>

<div class="scroll-down-icon">
  <div class="line-center">
    <span>scroll<span>
    </div>
  </div>
</div>
