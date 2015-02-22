<div class="post blog border-dashed-bottom media clear-left" id="">  
  
  <?php if ( has_post_thumbnail()) : ?>
    <a class="thumbnail pull-left" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('thumbnail'); ?>
    </a>
  <?php endif; ?>
  
  <div class="media-body">
    <h2 class="blog-title no-margin-top"><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
    <?php the_excerpt('Read more...'); ?>
    <p class="meta">
      <?php the_time('F jS, Y'); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php the_tags(' | Tags: ', ', ', ''); ?>
    </p>
  </div>

</div>