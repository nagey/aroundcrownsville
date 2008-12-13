<?php

// Do not delete these lines :

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) {
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.'); ?></p>
			<?php return;
		}
	}
	$oddcomment = 'class="alt commento" '; ?>

<?php

// You can start editing here :

if ($comments) : ?>
	<h3 id="comments"><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments'));?></h3>
	<ol class="commentlist">
		<?php foreach ($comments as $comment) : ?>
			<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment, 32 ); ?>
				<cite><?php comment_author_link() ?></cite>
				<?php if ($comment->comment_approved == '0') : ?>
					<em><?php _e('Your comment is awaiting moderation.'); ?></em>
				<?php endif; ?>
				<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?><!-- at <?php comment_time() ?>--></a> <?php edit_comment_link(__('Edit'),'&nbsp;&nbsp;',''); ?></small>
				<?php comment_text() ?>
			</li>
			<?php $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt commento" ' : ''; ?>
		<?php endforeach; ?>
	</ol>
 <?php else : ?>
	<?php if ('open' == $post->comment_status) : ?>
	<?php else : ?>
		<p><strong><?php _e('Sorry, comments are closed for this item.'); ?></strong></p>
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<h3 id="respond"><?php _e('Leave a comment'); ?></h3>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p><?php _e('You must be'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('logged in'); ?></a> <?php _e('to post a comment.'); ?></p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
	<p><?php printf(__('Logged in as %s.')," <a href=\"" . get_option('siteurl') . "/wp-admin/profile.php\">" . $user_identity . "</a>"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account'); ?>"><?php _e('Log out &raquo;'); ?></a></p>
<?php else : ?>
	<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
	<label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>
	<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
	<label for="email"><small><?php _e('Mail (will not be published)'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>
	<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
	<label for="url"><small><?php _e('Website'); ?></small></label></p>
<?php endif; ?>
<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Leave a comment'); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; ?>
<?php endif; ?>
