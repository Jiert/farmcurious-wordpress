<?php
/**
 * Template: Index.php
 *
 * @package WordPress
 * @subpackage FARMcurious
 */
get_header(); ?>

<div id="featured" class="flex-container">
  <div class="flexslider clear-left">
    <ul class="slides">
      <?php
        $args = array(
          'posts_per_page' => '3',
          'product_cat' => 'classes',
          'post_type' => 'product'
        );
        query_posts($args);
        if (have_posts()): ?>

          <li>
            <div class="media">
              <a class="pull-left thumbnail" href="<?php bloginfo(url); ?>/product-category/classes">
                <img class="media-object" src="<?php bloginfo('template_url'); ?>/images/cheeseEvent.jpg" alt="events"/>
              </a>
              <div class="media-body">
                <h2 id="upcoming-events" class="product-title no-margin-top">
                  <a href="<?php bloginfo(url); ?>/events">Upcoming Classes <i class="icon-calendar"></i></a>
                </h2>
                <ul class="pull-left featured-events clear-list-style"> 
                  <?php while (have_posts()) : the_post(); ?> 
                    <li class="panelItem">
                      <h3 class="product-title no-margin-top">
                        <a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>
                      </h3>
                    </li>
                  <?php endwhile; wp_reset_query(); ?>
                </ul>
              </div>
            </div>
          </li>
      
        <?php endif;
          $args = array(
            'post_type' => 'product',
            'product_tag' => 'featured'
          );
          query_posts($args);
          if (have_posts()) : while (have_posts()) : the_post(); ?>

            <li>  
              <div class="media">
                <a class="pull-left thumbnail" href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium'); ?> 
                </a>
                <div class="media-body">
                  <h2 class="product-title no-margin-top"><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>         
              
                  <div class="post" id="post-<?php the_ID(); ?>">  
                    <?php the_excerpt('read more'); ?>
                    <div class="data-cell">
                      <div class="product-price"><?php echo get_post_meta($post->ID, "Product_Price", $single = true); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>    
    </ul>
  </div>
</div>

<div id="mainColumn" class="<?php echo($productsClass); ?>">

  <div class="row">
    <div id="home-product-categories" class="span6">

      <div class="ribbonHeader ribbonColor3">
        <a href="<?php echo get_option('home'); ?>/shop">
          <h2>Product Categories</h2>
          <i class="icon-tags"></i>
        </a>
      </div>
      <div class="row">

        <div class="media span6">
          <a class="pull-left" href="<?php echo get_option('home'); ?>/product-category/garden">
            <img src="<?php bloginfo('template_url'); ?>/images/garden.jpg" alt="Grow" class="thumbnail" style="width:140px;"/>
          </a>
          <div class="media-body">
            <a href="<?php echo get_option('home'); ?>/product-category/garden">
              <h2 class="media-heading product-title no-margin-top">Garden</h2>
            </a>
            <p>Organic products and inspiration to help your edible landscape bloom.</p>
          </div>
        </div>

        <div class="media span6">
          <a class="pull-left" href="<?php echo get_option('home'); ?>/product-category/ferment">
            <img src="<?php bloginfo('template_url'); ?>/images/ferment.jpg" alt="Brew" class="thumbnail" style="width:140px;" />
          </a>
          <div class="media-body">
            <a href="<?php echo get_option('home'); ?>/product-category/ferment">
              <h2 class="media-heading product-title no-margin-top">Ferment</h2>
            </a>
            <p>Kits, equipment and ingredients for lacto-fermentation plus brewing wine, beer, vinegar and more.</p>
          </div>
        </div>

        <div class="media span6">
          <a class="pull-left" href="<?php echo get_option('home'); ?>/product-category/classes">
            <img src="<?php bloginfo('template_url'); ?>/images/cheeseEvent.jpg" alt="Brew" class="thumbnail" style="width:140px;" />
          </a>
          <div class="media-body">
            <a href="<?php echo get_option('home'); ?>/product-category/classes">
              <h2 class="media-heading product-title no-margin-top">Classes</h2>
            </a>
            <p>Join a small group of eager students and a knowledgeable instructor to pick up a new skill – learn cheesemaking, brewing, fermenting, keeping backyard chickens and more.</p>
          </div>
        </div>

        <div class="media span6">
          <a class="pull-left" href="<?php echo get_option('home'); ?>/product-category/preserve">
            <img src="<?php bloginfo('template_url'); ?>/images/preserve.jpg" alt="Brew" class="thumbnail" style="width:140px;" />
          </a>
          <div class="media-body">
            <a href="<?php echo get_option('home'); ?>/product-category/preserve">
              <h2 class="media-heading product-title no-margin-top">Preserve</h2>
            </a>
            <p>Unique tools and supplies for preserve the harvest through canning, drying, fermenting and other time-honored methods.</p>
          </div>
        </div>
                <div class="media span6">
          <a class="pull-left" href="<?php echo get_option('home'); ?>/product-category/lifestyle">
            <img src="<?php bloginfo('template_url'); ?>/images/lifestyle.jpg" alt="Brew" class="thumbnail" style="width:140px;" />
          </a>
          <div class="media-body">
            <a href="<?php echo get_option('home'); ?>/product-category/lifestyle">
              <h2 class="media-heading product-title no-margin-top">Lifestyle</h2>
            </a>
            <p>A collection of useful, whimsical and beautiful items to help you live a more sustainable, earth-friendly existence. Pick up supplies for your backyard beasts here as well.</p>
          </div>
        </div>
                <div class="media span6">
          <a class="pull-left" href="<?php echo get_option('home'); ?>/product-category/cheesemaking">
            <img src="<?php bloginfo('template_url'); ?>/images/cheese.jpg" alt="Brew" class="thumbnail" style="width:140px;" />
          </a>
          <div class="media-body">
            <a href="<?php echo get_option('home'); ?>/product-category/cheesemaking">
              <h2 class="media-heading product-title no-margin-top">Cheesemaking</h2>
            </a>
            <p>Kits, ingredients, books and more to boost your cheesemaking addiction.</p>
          </div>
        </div>
      </div>
    
      <div id="homeBlog">
        <div class="ribbonHeader ribbonColor1">
          <a href="<?php echo get_option('home'); ?>/blog">     
            <h2>Latest from the Blog:</h2>
            <i class="icon-pencil"></i>
          </a>
        </div>
        <?php 
          query_posts($query_string . '&cat=6&posts_per_page=3');
          if (have_posts()) : 
            while (have_posts()) : 
              the_post(); 
              get_template_part( 'templateParts/blog_post' ); 
            endwhile; 
          endif; 
        ?>
      </div>
    </div>

    <div class="span3">

      <?php 
        $args = array(
          'posts_per_page' => '4',
          'post_type' => 'product',
          'product_cat' => 'classes'
        );
        query_posts($args);
        function custom_excerpt_length( $length ) {
          return 35;
        }
        add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );   
        if (have_posts()) : ?>    
          
          <div id="events" class="pull-left">
            <div class="ribbonHeader ribbonColor2">
              <a href="<?php echo get_option('home'); ?>/product-category/classes">
                <h2 class="">Classes</h2>
                <i class="icon-calendar"></i>
              </a>
            </div>
            
            <div class="row">
              <div class="span3">
              <?php while (have_posts()) : the_post(); ?> 
                <div class="post thumbnail product pull-left" id="post-<?php the_ID(); ?>">  
                  <h3 class="product-title no-margin-top"><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3>
                  <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail( ); ?></a>
                  <?php the_excerpt(); ?>
                </div>
              <?php 
                endwhile; 
                wp_reset_query();
              ?>
              </div>
            </div>
          </div>
        
      <?php else : endif; ?>
    </div>
  </div>
</div>
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>