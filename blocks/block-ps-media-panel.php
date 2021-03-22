<?php
/* Image Url */
$attachment_id = block_value( 'image' );
$image_attributes =  wp_get_attachment_image_src( $attachment_id , 'large' );
?>


<div data-scroll-section class="block-ps-panel <?php block_field('className'); ?>">

  <?php if(block_value( 'content-order' ) == 'image-left') { ?>

    <div class="grid block-ps-panel__left">

      <div class="col-50">
        <div data-scroll class="block-ps-panel__img" data-scroll-speed="-1.1">
          <img data-scroll src="<?php echo $image_attributes[0]; ?>" alt="" class="fade-left">
        </div>
      </div>
      <div class="col-40">
        <div class="block-ps-panel__text">
          <div>
            <h3 class="headline">
              <span data-scroll class="text-reveal"><b><?php block_field( 'title' ); ?></b></span>
            </h3>
            <p data-scroll class="subtitle fade-up delay-4"> <?php block_field( 'description' ); ?></p>
            <?php if(block_value('cta') != '') { ?>
              <a data-scroll class="fade-up delay-6 button" href="<?php block_field( 'cta-link' ); ?>"><?php block_field( 'cta' ); ?></a>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>

  <?php } else { ?>

    <div class="grid block-ps-panel__right">

      <div class="col-40">
        <div class="block-ps-panel__text">
          <div>
            <h3 class="headline">
              <span data-scroll class="text-reveal"><b><?php block_field( 'title' ); ?></b></span>
            </h3>
            <p data-scroll class="subtitle fade-up delay-4"> <?php block_field( 'description' ); ?></p>
            <?php if(block_value('cta') != '') { ?>
              <a data-scroll class="fade-up delay-6 button" href="<?php block_field( 'cta-link' ); ?>"><?php block_field( 'cta' ); ?></a>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-50">
        <div data-scroll class="block-ps-panel__img" data-scroll-speed="-1.1">
          <img data-scroll src="<?php echo $image_attributes[0]; ?>" alt="" class="fade-right">
        </div>
      </div>

    </div>

  <?php } ?>

</div>
