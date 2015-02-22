<?php
/*
Template Name: Press
*/
get_header();
?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="page-header"><?php the_title(); ?></h1>
  <?php 
    endwhile; endif; 
    
    global $query_string;
    global $more;
    query_posts('paged=' . $paged .'&cat=55');
    
    // Custom the_excerpt length, default is 55
    function custom_excerpt_length( $length ) {
      return 100;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );   
    
  ?>
    <?php if (have_posts()) :
      while (have_posts()) : 
        the_post();
        get_template_part( 'templateParts/blog_post' );
      endwhile; 
    else : ?>
      <h2>Oops! Something went wrong.</h2>
    <?php endif; ?>
    
    <div class="pagination">
      <?php posts_nav_link('  ', '&laquo; newer posts', 'older posts &raquo;'); ?>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
