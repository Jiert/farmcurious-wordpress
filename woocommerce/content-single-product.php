<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php
  /**
   * woocommerce_before_single_product hook
   *
   * @hooked woocommerce_show_messages - 10
   */
   do_action( 'woocommerce_before_single_product' );
?>

<div itemscope itemtype="http://schema.org/Product" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php
    /**
     * woocommerce_show_product_images hook
     *
     * @hooked woocommerce_show_product_sale_flash - 10
     * @hooked woocommerce_show_product_images - 20
     */
    do_action( 'woocommerce_before_single_product_summary' );
  ?>

  <div class="summary entry-summary">

    <?php
      /**
       * woocommerce_single_product_summary hook
       *
       * @hooked woocommerce_template_single_title - 5
       * @hooked woocommerce_template_single_price - 10
       * @hooked woocommerce_template_single_excerpt - 20
       * @hooked woocommerce_template_single_add_to_cart - 30
       * @hooked woocommerce_template_single_meta - 40
       * @hooked woocommerce_template_single_sharing - 50
       */
      do_action( 'woocommerce_single_product_summary' );
    ?>

    <ul id="product-social" class="pull-left">
      <li id="facebook-badge">  
        <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like layout="button_count" show_faces="false" width="450"></fb:like>
      </li>
      <li id="twitter-badge">             
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
      </li>           
      <li id="pin-badge">
        <a href="//pinterest.com/pin/create/button/?url=<?php echo the_permalink(); ?>&media=<?php echo get_post_meta($post->ID, 'Product_Image', $single = true); ?>&description=<?php echo strip_tags(get_the_excerpt()); ?>" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
      </li>
    </ul>

  </div><!-- .summary -->
  <?php
    /**
     * woocommerce_after_single_product_summary hook
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_output_related_products - 20
     */
    do_action( 'woocommerce_after_single_product_summary' );
  ?>

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>