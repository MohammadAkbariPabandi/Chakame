<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aiia
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

<div id="comments" class="container px-0 comments-area">

	<?php
	$args_comment = array(
		// Change the title of send button 
		'label_submit'		=> __('Comment'),
        // Change the title of the reply section
        'title_reply' => __( '', ''),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        // Redefine your own textarea (the comment body).
        'comment_field' => '<textarea class="w-100 mb-3 text-truncate input-box form-control p-3 border rounded-0" id="comment" name="comment" aria-required="true" placeholder="What are your thoughts?"></textarea>',
	);

	comment_form($args_comment);

	$args_list_comment = array(
		'walker'            => null,
		'max_depth'         => '1',
		'style'             => 'ul',
		'callback'          => null,
		'end-callback'      => null,
		'type'              => 'all',
		'page'				=> '',
		'reply_text'        => null,
		'per_page'          => '',
		'avatar_size'       => 32,
		'reverse_top_level' => null,
		'reverse_children'  => '',
		'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
		'short_ping'        => false,   // @since 3.6
		'echo'              => true     // boolean, default is true
	);

	echo '<div class="mt-5 px-4 px-md-0 js-comments-list">';
		echo '<div class="d-flex"> <h4 class="mb-5">Responses
			  <h4 class="js-commentCount">(0)</h4> </h1> 
			  </div>';
		echo '<div class="row responses">';
		wp_list_comments($args_list_comment);
		echo '</div>';
		echo '<div class="responses__Button">
				<form class="d-flex justify-content-center my-2" role="subscribe">
					<a class="Button ZodiacButton js-LoadMoreComments">See All Comments</a>
				</form>
			  </div>';
	echo '</div>';
	?>
</div>
