<div data-scroll-section class="block-ps-intro<?php block_field('className'); ?>">


  <div class="grid">
    <div class="col-100">

      <div class="text-container">
        <h3 class="text-container__hidden"><?php block_field( 'frase-1' ); ?></h3>
        <h3 class="text-container__hidden"><?php block_field( 'frase-2' ); ?></h3>
        <h3 class="text-container__hidden"><?php block_field( 'frase-3' ); ?></h3>

        <div class="text-container__hidden">
          <h3 class=""><?php block_field( 'frase-4' ); ?></h3>
      
          <?php if(block_value('cta') != '') { ?>
            <a data-scroll class="button" href="<?php block_field( 'cta-link' ); ?>"><?php block_field( 'cta' ); ?></a>
          <?php } ?>
        </div>
        

      </div>

    </div>
  </div>
</div>
