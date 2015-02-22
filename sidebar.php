<?php
  /**
   * Template: sidebar.php
   * @package WordPress
   */
?>
</div><!-- closing span9 -->

<div id="sidebar" class="span3 margin-fix" style="margin-top:60px;">
  
  <div id="social">
    <div class="ribbonHeader ribbonColor1">
      <a href="<?php echo get_option('home'); ?>/contact-us/">  
        <h2 class="">Follow</h2>
        <i class="icon-comment"></i>
      </a>
    </div>
    
    <div id="facebook-button" class="pull-left">
      <div class="fb-like" data-href="http://www.facebook.com/farmcurious" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
    </div>

    <div id="twitter-button" class="pull-left">
      <a href="//twitter.com/farmcurious" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false" data-size="medium" data-lang="en">Follow</a>
    </div>
  </div>
      
  <div id="emailSignUp" class="pull-left border-dashed-top">
    <form name="ccoptin" action="http://visitor.constantcontact.com/d.jsp" target="_blank" method="post" class="form-inline">
      <fieldset>
        <input type="text" name="ea" value="" placeholder="Your Email Address" class="search-input">
        <input type="hidden" name="m" value="1103624070277">
        <input type="hidden" name="p" value="oi">
        <button name="go" value="Subscribe" class="btn">Get Newsletter <i class="icon-envelope"></i></button>
      </fieldset>
    </form>
  </div>
  
  <div id="twitterFeed" class="sideBarBox border-dashed-top">
    <div id="twitterBox">
      <a class="twitter-timeline" href="https://twitter.com/FARMcurious" height="300" data-widget-id="357358654514667520" data-chrome="transparent nofooter">Tweets by @FARMcurious</a>
    </div>
  </div>
  
  <div id="reading" class="sideBarBox pull-left">
    <div class="ribbonHeader ribbonColor2">
      <a href="<?php echo get_option('home'); ?>/product-category/books/">  
        <h2 class="">Books</h2>
        <i class="icon-book"></i>
      </a>
    </div>


    <div id="readingBox" class="pull-left">
      <?php 
        $args = array(
          'posts_per_page' => '4',
          'post_type' => 'product',
          'product_cat' => 'books'
        );
        query_posts($args);
      ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
        <div class="product thumbnail post">
          <h3 class="product-title no-margin-top"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="">
            <a href="<?php the_permalink(); ?> ">
              <?php the_post_thumbnail(); ?> 
            </a>
          </div>
        </div>
      <?php endwhile; wp_reset_query(); ?>
      <?php else : endif; ?>
    </div>

  </div> 
</div>