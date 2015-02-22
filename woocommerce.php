<?php
/**
 * Template: Page.php
 *
 * @package WordPress
 *
 * This is the 'easy' method from http://docs.woothemes.com/document/third-party-custom-theme-compatibility/
 */
get_header();
?>

<div id="woocommerce-shop-template" class="woocommerce">

  <?php 

    wp_nav_menu( array(
      'menu'       => 'Product Menu',
      'depth'      => 2,
      'container'  => false,
      'menu_class' => 'nav nav-pills',
      'fallback_cb' => 'wp_page_menu',
      //Process nav menu using our custom nav walker
      'walker' => new twitter_bootstrap_nav_walker())
    );

    woocommerce_content(); 
  ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>