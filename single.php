<?php
  /**
  * Template: single.php
  *
  * @package WordPress
  */
  get_header();
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <div id="<?php the_ID(); ?>" class="post blog-single border-dashed-bottom">
    <h1 class="blog-title"><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>           
    <div id="post-meta">
      <?php the_date() ?>
    </div>
    <?php the_content(); ?>
  </div>

  <div id="single-post-social">
    <h3 class="pull-left no-margin-top">Share:</h3>
    <ul class="pull-left">
      <li id="stumble-badge">                 
        <script src="http://www.stumbleupon.com/hostedbadge.php?s=2"></script>
      </li>
      <li id="twitter-badge">                    
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
      </li>                
      <li id="facebook-badge"> 
        <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like layout="button_count" show_faces="false" width="450"></fb:like>
      </li>
      <li id="pin-badge">
        <a href="//pinterest.com/pin/create/button/?url=<?php echo the_permalink(); ?>&media=<?php echo get_post_meta($post->ID, 'Product_Image', $single = true); ?>&description=<?php echo strip_tags(get_the_excerpt()); ?>" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
      </li>
    </ul>
  </div>

  <div class="comments-template clear-left">
    <?php comments_template(); ?>
  </div>
      
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>