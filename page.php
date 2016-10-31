<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Back to Front Author
 */

get_header(); 

while ( have_posts() ) : the_post();

	/* Page Header
	/* --------------------------- */
	
	get_template_part( 'partials/page', 'header' );

	/* Page Content
	/* --------------------------- */
	
	get_template_part( 'partials/page', 'content' );

endwhile;

get_footer(); ?>