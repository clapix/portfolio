<style>

.block-ps-columns img{width: 100%; height: 300px; object-fit: cover; margin-bottom: 20px;}

@media (max-width: 767px) {
  .block-ps-columns.grid{display: block;}
  .block-ps-columns.grid .col{margin-bottom: 60px;}
}

</style>


<div data-scroll-section class="grid mt-3 mb-3 block-ps-columns <?php block_field('className'); ?>">

  <?php if(block_value('title-1') != '') { ?>
    <div data-scroll class="col fade-up delay-2">

      <h3><?php block_field( 'title-1' ); ?></h3>
      <p><?php block_field( 'description-1' ); ?></p>

      <?php $attachment_id = block_value( 'image-1' ); ?>
      <?php echo wp_get_attachment_image( $attachment_id, 'medium' );?>

      <?php if(block_value('cta-1') != '') { ?>
        <a class="button" href="<?php block_field( 'cta-link-1' ); ?>"><?php block_field( 'cta-1' ); ?></a>
      <?php } ?>
    </div>
  <?php } ?>

  <?php if(block_value('title-2') != '') { ?>
    <div data-scroll class="col fade-up delay-4">

      <?php $attachment_id = block_value( 'image-2' ); ?>
      <?php echo wp_get_attachment_image( $attachment_id, 'medium' );?>

      <h3><?php block_field( 'title-2' ); ?></h3>
      <p><?php block_field( 'description-2' ); ?></p>


      <?php if(block_value('cta-2') != '') { ?>
        <a class="button" href="<?php block_field( 'cta-link-2' ); ?>"><?php block_field( 'cta-2' ); ?></a>
      <?php } ?>
    </div>
  <?php } ?>

  <?php if(block_value('title-3') != '') { ?>
    <div data-scroll class="col fade-up delay-2">

      <h3><?php block_field( 'title-3' ); ?></h3>
      <p><?php block_field( 'description-3' ); ?></p>

      <?php $attachment_id = block_value( 'image-3' ); ?>
      <?php echo wp_get_attachment_image( $attachment_id, 'medium' );?>

      <?php if(block_value('cta-3') != '') { ?>
        <a class="button" href="<?php block_field( 'cta-link-3' ); ?>"><?php block_field( 'cta-3' ); ?></a>
      <?php } ?>
    </div>
  <?php } ?>

  <?php if(block_value('title-4') != '') { ?>
    <div data-scroll class="col fade-up delay-4">

      <?php $attachment_id = block_value( 'image-4' ); ?>
      <?php echo wp_get_attachment_image( $attachment_id, 'medium' );?>

      <h3><?php block_field( 'title-4' ); ?></h3>
      <p><?php block_field( 'description-4' ); ?></p>


      <?php if(block_value('cta-4') != '') { ?>
        <a class="button" href="<?php block_field( 'cta-link-4' ); ?>"><?php block_field( 'cta-4' ); ?></a>
      <?php } ?>
    </div>
  <?php } ?>

</div>
