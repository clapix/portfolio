<?php
/**
* The sidebar containing the main widget area
*
* If no active widgets are in the sidebar, hide it completely.
*
* @package nakedpress
*/
?>

<div data-scroll class="sidebar fade-up delay-7">

  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('primary') ) : /* display widget of primary sidebar */ ?>


  <?php endif; ?>

</div>
