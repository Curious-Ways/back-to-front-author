<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Back to Front Author
 */

get_header();

while ( have_posts() ) : the_post(); ?>

<!-- 
	<header class="page-header content-wrapper content-wrapper_news_single">

		<div class="content">
			<div class="page-header-content">

				<?php 

				// Title
				// --------------

				the_title( '<h1 class="entry-title">', '</h1>' );

				// Subtitle
				// --------------

				echo '<h2>';

					back_to_front_author_posted_on();

				echo '</h2>';

				?>

			</div>
		</div>
	</header>	

-->
 
	<?php get_template_part( 'partials/content', 'single' );

endwhile;

get_sidebar();

get_footer(); ?>