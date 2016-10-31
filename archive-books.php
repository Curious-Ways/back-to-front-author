<?php
/**
 * The template for displaying archive Books CPT.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Back to Front Author
 */

get_header();

	if ( have_posts() ) :

		// Main header image
		// -------------------

		$size = 'widescreen';

		$background_style_image = get_field('books_image', 'option');
		$background_style_image_array = wp_get_attachment_image_src($background_style_image, $size);
		$background_style_image_url = $background_style_image_array[0];

		// Fallback header image
		// -----------------------

		$fallback_header_image = get_field('fallback_header_image', 'option');
		$fallback_header_image_array = wp_get_attachment_image_src($fallback_header_image, $size);
		$fallback_header_image_url = $fallback_header_image_array[0];
	

	if (get_field('books_image', 'option')) { ?>

		<header class="page-header content-wrapper has_background_img" style="background-image: url('<?php echo $background_style_image_url; ?>');">

	<?php } else { ?>

		<header class="page-header content-wrapper has_background_img" style="background-image: url('<?php echo $fallback_header_image_url; ?>');">

	<?php } ?>
	
		<div class="content">
			<div class="page-header-content">

				<?php 

				// Title
				// --------------

				if (get_field('books_title', 'option')) {
					echo '<h1>'.get_field('books_title', 'option').'</h1>';
				} else {
					the_archive_title( '<h1>', '</h1>' );
				}

				// Subtitle
				// --------------

				if (get_field('books_subtitle', 'option')) {
					echo '<h2>'.get_field('books_subtitle', 'option').'</h2>';
				} else {
					the_archive_description( '<h2>', '</h2>' );
				}

				?>

			</div>
		</div>
	</header>		

	<div class="content-wrapper has_background_color clr-white">
		<div class="content rte">
			<div class="entry-text entry-text_publications">		

		<?php while ( have_posts() ) : the_post(); ?>



					<?php get_template_part( 'partials/content', 'books'); ?>



		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>