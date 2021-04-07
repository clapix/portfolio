<?php
use function Genesis\CustomBlocks\add_block;
use function Genesis\CustomBlocks\add_field;


/* Intro */

function register_ps_intro_block() {
  add_block( 'ps-intro', array( 'icon' => 'waves' ) );

  add_field( 'ps-intro', 'frase-1', array(
    'control' => 'text'
  ) );

  add_field( 'ps-intro', 'frase-2', array(
    'control' => 'text'
  ) );

  add_field( 'ps-intro', 'frase-3', array(
    'control' => 'text'
  ) );

  add_field( 'ps-intro', 'frase-4', array(
    'control' => 'text'
  ) );

  add_field( 'ps-intro', 'cta', array(
    'control' => 'text',
    'width' => '50'
  ) );

  add_field( 'ps-intro', 'cta-link', array(
    'control' => 'text',
    'width' => '50'
  ) );
}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ps_intro_block' );



/* Big Text */

function register_ps_big_text_block() {
  add_block( 'ps-big-text', array( 'icon' => 'waves' ) );

  add_field( 'ps-big-text', 'title' );

  add_field( 'ps-big-text', 'description-1', array(
    'control' => 'textarea',
    'width' => '25'
  ) );
  add_field( 'ps-big-text', 'description-2', array(
    'control' => 'textarea',
    'width' => '25'
  ) );
  add_field( 'ps-big-text', 'description-3', array(
    'control' => 'textarea',
    'width' => '25'
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ps_big_text_block' );





/* Media Panel */

function register_ps_media_panel_block() {
  add_block( 'ps-media-panel', array( 'icon' => 'waves' ) );

  add_field( 'ps-media-panel', 'title' );
  add_field( 'ps-media-panel', 'description', array(
    'control' => 'textarea'
  ) );
  add_field( 'ps-media-panel', 'image', array(
    'control' => 'image'
  ) );
  add_field( 'ps-media-panel', 'cta', array(
    'control' => 'text',
    'width' => '50'
  ) );
  add_field( 'ps-media-panel', 'cta-link', array(
    'control' => 'text',
    'width' => '50'
  ) );

  add_field( 'ps-media-panel', 'content-order', array(
    'control' => 'select',
    'width' => '25',
    'options' => array(
      array(
        'label' => 'Image Right',
        'value' => 'image-right',
      ),
      array(
        'label' => 'Image Left',
        'value' => 'image-left',
      )
    ),
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ps_media_panel_block' );


/* Text */

function register_ps_text_block() {
  add_block( 'ps-text', array( 'icon' => 'waves' ) );

  add_field( 'ps-text', 'title' );
  add_field( 'ps-text', 'description', array(
    'control' => 'textarea'
  ) );
  add_field( 'ps-text', 'cta', array(
    'control' => 'text',
    'width' => '50'
  ) );
  add_field( 'ps-text', 'cta-link', array(
    'control' => 'text',
    'width' => '50'
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ps_text_block' );



/* Cover */

function register_ps_cover_block() {
  add_block( 'ps-cover', array( 'icon' => 'waves' ) );

  add_field( 'ps-cover', 'title' );
  add_field( 'ps-cover', 'subtitle' );
  add_field( 'ps-cover', 'image', array(
    'control' => 'image'
  ) );
  add_field( 'ps-cover', 'cta', array(
    'control' => 'text',
    'width' => '50'
  ) );
  add_field( 'ps-cover', 'cta-link', array(
    'control' => 'text',
    'width' => '50'
  ) );
}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ps_cover_block' );

/* Columns */

function register_ps_columns_block() {
  add_block( 'ps-columns', array( 'icon' => 'waves' ) );

  // title

  add_field( 'ps-columns', 'title-1', array(
    'control' => 'text',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'title-2', array(
    'control' => 'text',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'title-3', array(
    'control' => 'text',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'title-4', array(
    'control' => 'text',
    'width' => '25'
  ) );

  // desc

  add_field( 'ps-columns', 'description-1', array(
    'control' => 'textarea',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'description-2', array(
    'control' => 'textarea',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'description-3', array(
    'control' => 'textarea',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'description-4', array(
    'control' => 'textarea',
    'width' => '25'
  ) );

  // image

  add_field( 'ps-columns', 'image-1', array(
    'control' => 'image',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'image-2', array(
    'control' => 'image',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'image-3', array(
    'control' => 'image',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'image-4', array(
    'control' => 'image',
    'width' => '25'
  ) );

  // cta

  add_field( 'ps-columns', 'cta-1', array(
    'control' => 'text',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'cta-2', array(
    'control' => 'text',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'cta-3', array(
    'control' => 'text',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'cta-4', array(
    'control' => 'text',
    'width' => '25'
  ) );

  // cta link

  add_field( 'ps-columns', 'cta-link-1', array(
    'control' => 'text',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'cta-link-2', array(
    'control' => 'text',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'cta-link-3', array(
    'control' => 'text',
    'width' => '25'
  ) );
  add_field( 'ps-columns', 'cta-link-4', array(
    'control' => 'text',
    'width' => '25'
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_ps_columns_block' );
