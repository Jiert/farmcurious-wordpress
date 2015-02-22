<div id="<?php the_ID(); ?>" class="product post media search-item">
  <a class="pull-left thumbnail" href="<?php the_permalink(); ?> "><?php the_post_thumbnail('thumbnail'); ?></a>
  <div class="media-body">
    <h2 class="product-title no-margin-top">
      <a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>
    </h2>
    <?php the_excerpt(); ?>
  </div>
</div>