<?php 

if( have_rows('block') ) : 

	while ( have_rows('block') ) : the_row();

	  // ---------------------------------------------
	  // Single  Column
	  // ---------------------------------------------

	  if( get_row_layout() == 'one_column' ) : 

			get_template_part( 'partials/page', 'content_one_col' );

	  // ---------------------------------------------
	  // Two Column
	  // ---------------------------------------------

	  elseif( get_row_layout() == 'two_column' ) : 

	  	get_template_part( 'partials/page', 'content_two_col' );

	  // ---------------------------------------------
	  // Quote
	  // ---------------------------------------------

	  elseif( get_row_layout() == 'quote' ) : 

	  	get_template_part( 'partials/page', 'content_quote' );

	  // ---------------------------------------------
	  // Publication
	  // ---------------------------------------------

	  elseif( get_row_layout() == 'publications' ) : 

	  	get_template_part( 'partials/page', 'content_publication' );

	  endif;

	endwhile;

else :
    // no layouts found
endif; ?>