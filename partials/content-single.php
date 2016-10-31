<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Back to Front Author
 */

?>

<div class="content-wrapper content-wrapper_news">
	<div class="content">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="entry-content">

				<?php 

				// Title
				// --------------

				the_title( '<h1 class="entry-title">', '</h1>' );

				?>

				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'back_to_front_author' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

		</article><!-- #post-## -->

	</div>
</div>