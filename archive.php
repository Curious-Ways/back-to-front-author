<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Back to Front Author
 */

get_header();

	if ( have_posts() ) : ?>


<!-- 
		<?php 

		// Main header image
		// -------------------

		$size = 'widescreen';

		$background_style_image = get_field('news_image', 'option');
		$background_style_image_array = wp_get_attachment_image_src($background_style_image, $size);
		$background_style_image_url = $background_style_image_array[0];

		// Fallback header image
		// -----------------------

		$fallback_header_image = get_field('fallback_header_image', 'option');
		$fallback_header_image_array = wp_get_attachment_image_src($fallback_header_image, $size);
		$fallback_header_image_url = $fallback_header_image_array[0];	

	if (get_field('news_image', 'option')) { ?>

		<header class="page-header content-wrapper has_background_img" style="background-image: url('<?php echo $background_style_image_url; ?>');">

	<?php } else { ?>

		<header class="page-header content-wrapper has_background_img" style="background-image: url('<?php echo $fallback_header_image_url; ?>');">

	<?php } ?>
	
		<div class="content">
			<div class="page-header-content">

				<?php 

				// Title
				// --------------

				if (get_field('news_title', 'option')) {
					echo '<h1>'.get_field('news_title', 'option').'</h1>';
				} else {
					the_archive_title( '<h1>', '</h1>' );
				}

				// Subtitle
				// --------------

				if (get_field('news_subtitle', 'option')) {
					echo '<h2>'.get_field('news_subtitle', 'option').'</h2>';
				} else {
					the_archive_description( '<h2>', '</h2>' );
				}

				?>

			</div>
		</div>
	</header>			

-->

		<div class="content-wrapper has_background_color content-wrapper_news clr-white">
			<div class="content rte">
	<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'partials/content', get_post_format() ); ?>


	<?php endwhile;

	the_posts_navigation();

else : 

	get_template_part( 'partials/content', 'none' );

endif; ?>


			</div>
		</div>

<?php get_footer(); ?>