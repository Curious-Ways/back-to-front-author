<?php
/**
 * The Template for displaying all single Books CPT.
 *
 * @package Back to Front Author
 */

get_header();

while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'partials/content', 'single_books' );

endwhile;

get_sidebar();

get_footer(); ?>