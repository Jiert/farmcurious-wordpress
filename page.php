<?php
/**
 * Template: Page.php
 *
 * @package WordPress
 */
get_header();
?>

<div id="content" class="single-page">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="" id="post-<?php the_ID(); ?>">
    <h1 class="page-header"><?php the_title(); ?></h1>
    <div class="post">    
      <?php the_content(); ?> 
    </div>
    <?php endwhile; endif; ?>
  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>