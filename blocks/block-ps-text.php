<div data-scroll-section class="block-ps-text mt-4 mb-4 <?php block_field('className'); ?>">
  <div class="grid pt-2 pb-2">
    <div class="col-100">
      <h3 class="headline">
        <span data-scroll class="text-reveal"><b><?php block_field( 'title' ); ?></b></span>
      </h3>
      <p data-scroll class="fade-up delay-4"> <?php block_field( 'description' ); ?></p>

      <?php if(block_value('cta') != '') { ?>
        <a data-scroll class="fade-up delay-6 button" href="<?php block_field( 'cta-link' ); ?>"><?php block_field( 'cta' ); ?></a>
      <?php } ?>

    </div>
  </div>
</div>
