<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','wp_multiflex'); ?><p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number(__('No responses','wp_multiflex'), __('1 response','wp_multiflex'), __('% responses','wp_multiflex') );?> <?php _e('about','wp_multiflex'); ?> &#8220;<?php the_title(); ?>&#8221;</h3> 

<ol class="commentlist">

<?php foreach ($comments as $comment) : ?>

<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
			
<?php comment_author_link() ?> <?php _e('said','wp_multiflex'); ?>:

<?php if ($comment->comment_approved == '0') : ?>
<em><?php _e('Your comment is awaiting moderation.','wp_multiflex'); ?></em>
<?php endif; ?>
<br />

<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date(__('F jS, Y','wp_multiflex')) ?> <?php _e('at','wp_multiflex'); ?> <?php comment_time() ?></a> <?php edit_comment_link('e',' | ',''); ?></small>

<?php comment_text() ?>

</li>

<?php /* Changes every other comment to a different class */	
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>

<?php endforeach; /* end for each comment */ ?>

</ol>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
 <p class="nocomments"><?php _e('Comments are closed.','wp_multiflex'); ?></p> 
		
	<?php endif; ?>
<?php endif; ?>



<?php if ('open' == $post->comment_status) : ?>

<div id="commentwrap">

<h3 id="respond"><?php _e('Leave a Reply','wp_multiflex'); ?></h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e('You must be','wp_multiflex'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('logged in','wp_multiflex'); ?></a> <?php _e('to post a comment.','wp_multiflex'); ?></p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php _e('Logged in as','wp_multiflex'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account"><?php _e('Logout &raquo;','wp_multiflex'); ?></a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small><?php _e('Name','wp_multiflex'); ?> <?php if ($req) echo _e('(required)','wp_multiflex'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (never published)','wp_multiflex'); ?> <?php if ($req) echo _e('(required)','wp_multiflex'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website','wp_multiflex'); ?></small></label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>


</p>
<?php do_action('comment_form', $post->ID); ?>
<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment','wp_multiflex'); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</form>



<?php endif; // If registration required and not logged in ?>

</div>

<?php endif; // if you delete this the sky will fall on your head ?>