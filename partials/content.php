<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Back to Front Author
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="featured-image">

<?php 

if ( has_post_thumbnail() ) {
	the_post_thumbnail('w400');
} 

?>

</div>

<div class="blog-content">

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php back_to_front_author_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'back_to_front_author' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<a class="btn-clear" href="<?php the_permalink(); ?>">Read more</a>
	</footer><!-- .entry-footer -->

	</div>
	
</article><!-- #post-## -->
