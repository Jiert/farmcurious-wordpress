<?php
/*
Template Name: Blog
*/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h1 class="page-header">The FARMcurious Blog</h1>
<?php 
  endwhile; 
  endif;

  global $query_string;
  global $more;
  query_posts('paged=' . $paged .'&cat=6');
  
  // Custom the_excerpt length, default is 55
  function custom_excerpt_length( $length ) {
    return 100;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );   
  
  if (have_posts()) :?> 
  <div class="scrollBox">
    <?php while (have_posts()) :
      the_post();
      get_template_part( 'templateParts/blog_post' );
    endwhile;?>
    <div class="pagination navigation">
      <?php posts_nav_link('  ', '&laquo; newer posts', 'older posts &raquo;'); ?>
    </div>
  </div>
<?php else :  endif; ?>
      
<?php get_sidebar(); ?>
<?php get_footer(); ?>