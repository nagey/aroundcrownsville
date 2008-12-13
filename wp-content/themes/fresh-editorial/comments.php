<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<div id="commentreplies">
<?php if ($comments) : ?>

	<div class="commentitle">
		<h3 id="respond"><?php comments_number();?></h3>
	</div>

	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">

			<div class="commentwrapper">

				<div class="commentleft">
					<div class="commentsavatar">
						<?php echo get_avatar( $comment, 16 ); ?>
					</div>
				</div>
				<div class="commentcentre">
					<div class="commentauthor">
						<?php comment_author_link() ?>
					</div>
					<div class="commentdate">
						<?php comment_date('d/m/Y') ?>
					</div>
				</div>
				<div class="commentright">
					<div class="commentcomment">

						<?php if ($comment->comment_approved == '0') : ?>
						<em>Your comment is awaiting moderation.</em>
						<?php endif; ?>

						<?php comment_text() ?>
						<div class="commentedit">
							<?php edit_comment_link('edit','',''); ?>
						</div>
					</div>
				</div>

			</div>

		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<div class="nocomments">
			Comments are closed.
		</div>

	<?php endif; ?>
<?php endif; ?>
</div>

<?php if ('open' == $post->comment_status) : ?>

		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

			<div id="commentwrap">
				<div class="commentitle">
					<h3 id="respond">Leave a Reply</h3>
				</div>

					<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">


					<div id="youmustbe">
						<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
					</div>

					<div class="commentformlabel">
						<input disabled type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
						<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label>
					</div>
					<div class="commentformlabel">
						<input disabled type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
						<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label>
					</div>
					<div class="commentformlabel">
						<input disabled type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
						<label for="url"><small>Website</small></label>
					</div>

					<textarea disabled name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>

					<input disabled name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

					<?php do_action('comment_form', $post->ID); ?>

					</form>

			</div>


		<?php else : ?>


			<div id="commentwrap">
				<div class="commentitle">
					<h3 id="respond">Leave a Reply</h3>
				</div>

					<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

					<?php if ( $user_ID ) : ?>

					<div id="commentloggedin">
						Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
					</div>
					<?php else : ?>

					<div class="commentformlabel">
						<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
						<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label>
					</div>
					<div class="commentformlabel">
						<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
						<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label>
					</div>
					<div class="commentformlabel">
						<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
						<label for="url"><small>Website</small></label>
					</div>
					<?php endif; ?>


					<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>

					<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

					<?php do_action('comment_form', $post->ID); ?>

					</form>

			</div>



<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
