<?php
/**
 * Template name: Comments
 *
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
	
	get_template_part( 'partials/page', 'content' ); ?>
	


			<?php 

			// Comments
			// --------------

			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
			endif; ?>		



<?php endwhile;

get_footer(); ?>