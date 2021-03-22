<?php
/* Image Url */
$attachment_id = block_value( 'image' );
$image_attributes =  wp_get_attachment_image_src( $attachment_id , 'large' );
?>
<div data-scroll-section class="block-ps-cover <?php block_field('className'); ?>" style="background: url(<?php echo $image_attributes[0]; ?>) center center;  background-size: cover;">
  <div class="grid pt-2 pb-2">
    <div class="col-100">
      <h3 class="headline">
        <span data-scroll class="text-reveal"><b><?php block_field( 'title' ); ?></b></span>
      </h3>
      <p data-scroll class="subtitle fade-up delay-4"> <?php block_field( 'subtitle' ); ?></p>
      <?php if(block_value('cta') != '') { ?>
        <a data-scroll class="fade-up delay-6 button" href="<?php block_field( 'cta-link' ); ?>"><?php block_field( 'cta' ); ?></a>
      <?php } ?>
    </div>
  </div>
</div>
