<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Back to Front Author
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

	<div class="content rte content_comments">
		<div class="entry-text entry-text_one_column entry-text_comments">

	<?php 

	// https://codex.wordpress.org/Function_Reference/comment_form

	$fields =  array(

	  'author' =>
	    '<p class="comment-form-author"><label for="author">' . __( 'Name', 'back_to_front_author' ) . '</label> ' .
	    ( $req ? '<span class="required">*</span>' : '' ) .
	    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
	    '" size="30"' . $aria_req . ' /></p>',

	  'email' =>
	    '<p class="comment-form-email"><label for="email">' . __( 'Email', 'back_to_front_author' ) . '</label> ' .
	    ( $req ? '<span class="required">*</span>' : '' ) .
	    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	    '" size="30"' . $aria_req . ' /></p>',
	);

	$comments_args = array(
		// change the title of send button 
		//'label_submit'=>'Send',
		// change the title of the reply section
		// 'title_reply'=>'',
		// remove "Text or HTML to be displayed after the set of comment fields"
		//'comment_notes_after' => '',
		// Fields
		// 'fields' => 'author', 'email',
		// Notes before
		// 'comment_notes_before' => '',
		// redefine your own textarea (the comment body)
		//'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
		// 'fields' => apply_filters( 'comment_form_default_fields', $fields )
	);

	comment_form($comments_args); ?>

</div>
</div>

	<div class="content rte content_comments">
		<div class="entry-text entry-text_one_column entry-text_comments">


<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'back_to_front_author' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'back_to_front_author' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'back_to_front_author' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'back_to_front_author' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'back_to_front_author' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'back_to_front_author' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'back_to_front_author' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_typeback_to_front_author-upports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'back_to_front_author' ); ?></p>
	<?php endif; ?>

</div><!-- #comments -->

</div>
</div>
