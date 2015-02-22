<?php
  /**
   * Template: search.php
   * @package WordPress
   */
  get_header();
  $postsFound;
?>
<div id="content" class="search"> 
  <div id="content-inner">
  <?php query_posts($query_string . "&posts_per_page=-1&post_type=product");
    if (have_posts()) : $postsFound = true; ?>
      <div class="ribbonHeader ribbonColor3">
        <h2>Shop Results:</h2>
        <i class="icon-tags"></i>
      </div>
      <?php while (have_posts()) : 
        the_post();
        get_template_part( 'templateParts/product_post' );
      endwhile; 
    endif;
    rewind_posts(); 
    query_posts($query_string . "&cat=6"); 
    if (have_posts()) : $postsFound = true; ?>
      <div class="ribbonHeader ribbonColor1">
        <h2 class="ribbon">Blog Results:</h2>
        <i class="icon-pencil"></i>
      </div>
      <?php while (have_posts()) : 
        the_post();
        get_template_part( 'templateParts/blog_post' );
      endwhile;
    endif;
    if (!$postsFound){
      echo('<div class="post">');
      echo('<h2 class="product-title">Sorry, no results found.</h2><br/>');
      echo('<p>Please try searching with different keywords.  If you\'re not able to find what you\'re looking for, please <a href="<?php bloginfo(\'url\');?>/contact-us">contact us.</a></p>');
      echo('</div>');  
    } ?>
  </div>  
</div>
<?php get_sidebar(); get_footer(); ?>