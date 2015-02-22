<?php
/**
 * Template: comments.php
 *
 * @package WordPress
 */

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
  <?php
    return;
  }
//
?>

<?php if ( comments_open() ) : ?>
  <div id="respond" class="">
    <h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?> <small class="pull-right">* Required</small></h3>
    <div class="cancel-comment-reply">
      <small><?php cancel_comment_reply_link(); ?></small>
    </div>
    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
      <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <textarea name="comment" id="comment" cols="100%" rows="3" tabindex="4"></textarea>

        <?php if ( is_user_logged_in() ) : ?>
          <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
          <button name="submit" type="submit" id="submit" tabindex="5" class="btn btn-success">Post Comment</button>
          <?php comment_id_fields(); ?>
        <?php else : ?>
          <div class="row">
            <div class="span2">
              <label for="author"><small>Name <?php if ($req) echo "*"; ?></small></label>
              <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
            </div>
            <div class="span3">
              <label for="email"><small>E-Mail <?php if ($req) echo "*"; ?> (will not be published) </small></label>
              <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
            </div>
            <div class="span2">
              <label for="url"><small>Website</small></label>
              <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="" tabindex="3" />
            </div>
            <div class="span2">
              <label>&nbsp;</label>
              <button name="submit" type="submit" id="submit" tabindex="5" class="btn btn-success">Post Comment</button>
              <?php comment_id_fields(); ?>
            </div>
          </div>
        <?php endif; ?>

        
        <?php do_action('comment_form', $post->ID); ?>
      </form>
    <?php endif;  ?>
  </div>
<?php endif;?>

<?php if ( have_comments() ) : ?>
  <h2>comments:</h2>
  <ul class="commentlist">
    <!-- <?php //wp_list_comments('avatar_size=50'); ?> -->
    <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
  </ul>
  
 <?php else : ?>

  <?php if ( comments_open() ) : ?>

   <?php else : ?>
    <p class="nocomments">Comments are closed.</p>

  <?php endif; ?>
<?php endif; ?>