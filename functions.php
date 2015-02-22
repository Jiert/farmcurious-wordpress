<?php
  show_admin_bar(false);
  
  // NAVIGATION MENU
  function register_my_menus() {
    register_nav_menus(
      array('header-menu' => __( 'Choose Your Menu' ) )
    );
  }
  add_action( 'init', 'register_my_menus' );
  require_once('twitter_bootstrap_nav_walker.php');

  // CUSTOM COMMENT THEME
  function mytheme_comment($comment, $args, $depth) {
      $GLOBALS['comment'] = $comment;
      extract($args, EXTR_SKIP);

      if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
      } else {
        $tag = 'li';
        $add_below = 'div-comment';
      }
  ?>
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
      <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body pull-left">
      <?php endif; ?>
      
      <div class="comment-author vcard pull-left">
        <?php echo get_avatar( $comment, 40 ); ?>
      </div>
      <div class="pull-left comment-author-detail">  
        <ul class="pull-left">
          <li class="pull-left"><?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?></li>
          <?php if ($comment->comment_approved == '0') : ?>
          <li class="pull-left">
            <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
          <?php endif; ?>
          <li class="pull-left">
            <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
              <?php
                /* translators: 1: date, 2: time */
                printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
              ?>
            </div>
          </li>
        </ul>
      <div class="comment-text">
        <?php comment_text() ?>
        <span class="reply">
          <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </span>
      </div>
      <?php if ( 'div' != $args['style'] ) : ?>
      </div>
      <?php endif; ?>
    <?php
  }

  // POST THUMBNAILS
  if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
  }

  //change woocommerce 'out of stock' product status
  add_filter('woocommerce_get_availability', 'custom_get_availability');

  function custom_get_availability($availability) {
    $availability['availability'] = str_ireplace('Out of stock', 'SOLD OUT', $availability['availability']);
    return $availability;
  }
  
  // Puts link in excerpts more tag
  function new_excerpt_more($more) {
    global $post;
    //return '...<a class="moretag" href="'. get_permalink($post->ID) . '">See More</a>';
    //return '...';
    return '...  <a href="'. get_permalink($post->ID) . '">more</a>';
  }
  add_filter('excerpt_more', 'new_excerpt_more');

  function the_post_thumbnail_caption() {
    global $post;
  
    $thumbnail_id    = get_post_thumbnail_id($post->ID);
    $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
  
    if ($thumbnail_image && isset($thumbnail_image[0])) {
      echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
    }
  }
  
  //colorbox shortcode
  function jgallery_sc() {  
      wp_enqueue_script('colorbox-js', get_template_directory_uri().'/js/jquery.colorbox.js',array('jquery'));  
      wp_enqueue_style('colorbox-css', get_template_directory_uri().'/css/colorbox.css');  
      return do_shortcode('[gallery link="file"]');  
  }  
  add_shortcode('jgallery','jgallery_sc'); 
  
  /*** VARS ***/
  $domain = $_SERVER['HTTP_HOST'];
  
  if ($domain == 'localhost:8888') {
    
    /****** LOCALHOST VARIABLES ******/   
    $blogCategoryID = 6;
    $slide = 15; //"SLIDE" CATEGORY
    $eventCategoryID = 36;
    //$productCategoryID = 19;
  
  } else {
  
    /****** PRODUCTION VARIABLES ******/
    $blogCategoryID = 6;
    $slide = 15;
  
  }