<?php
/**
 * The template for displaying the Search Form
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package nakedpress
 */
 ?>
 <form class="search-form" role="search" method="get" action="<?php echo home_url(); ?>">

    <input  type="text" placeholder="<?php esc_html_e('Search', 'nakedpress'); ?>" name="s">

    <button type="submit"><i class="icon-search"></i></button>

</form>
