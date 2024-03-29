<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">פוסט זה מוגן בססמה, עליך להיות מחובר על מנת להגיב.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<div id="commentsbox">
<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('אין תגובות', 'תגובה אחת', '% תגובות' );?> עד כה.</h3>



	<ol class="commentlist">
	<?php wp_list_comments(); ?>
	</ol>

	<div class="comment-nav">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>

	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">סגור לתגובות.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>
<div id="comment-form">
<div id="respond">

<h3><?php comment_form_title( 'השאר תגובה', 'השאר תגובה ל %s' ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>עליך <a href="<?php echo wp_login_url( get_permalink() ); ?>">מחובר</a> כדי להגיב.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p>מחובר כ <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">התנתק &raquo;</a></p>

<?php else : ?>
<label for="author">שם <small><?php if ($req) echo "(חובה)"; ?></small></label>
<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />

<label for="email">אימייל <small><?php if ($req) echo "(חובה)"; ?></small></label>
<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />

<label for="url">אתר</label>
<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />


<?php endif; ?>

<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea><br />

<input name="submit" type="submit" id="commentSubmit" tabindex="5" value="שליחה" />
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
</div>