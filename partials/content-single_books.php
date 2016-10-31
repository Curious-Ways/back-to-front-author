<?php
/**
 * Template part for displaying Books CPT.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Back to Front Author
 */
?>


<div class="content-wrapper has_background_color content-wrapper_narrow">
	<div class="content rte">
		<div class="entry-text">

			<div class="publications-intro">


				<?php 

				// Title
				// --------------

				the_title( '<h1>', '</h1>' );

				// Description
				// --------------

				if (get_field('book_description_short')) {
					echo ''.get_field('book_description_short').'';
				} 

				?>

				</div>

			

			<div style="width: 45%; float:left">

			<?php 

			// Book Cover
			// -----------------

			if ( has_post_thumbnail() ) { ?>

				<div class="publication-image">
					<?php the_post_thumbnail('w250');?>
				</div>

			<?php } ?>	

			</div>			


<div style="width: 45%; float:right">

			<ul class="list-plain" style="margin-top: 0;">

				<?php 

				// Date
				// --------------

				if (get_field('published_date')) {
					echo '<li><strong>Published</strong>: '.get_field('published_date').'</li>';
				}		

				// Publisher name / website
				// --------------------------

				$publisher_name = get_field('publisher_name'); 

				if (get_field('publisher_website')) {
					
					echo '<li><strong>Publisher</strong>: <a target="_blank" href="'.get_field('publisher_website').'">';
						echo $publisher_name->name;
					echo '</a></li>';

				}	else {

					echo '<li><strong>Published by</strong>: '. $publisher_name->name .'</li>';

				}

				// Book type
				// ------------------

				/* $terms = get_field('book_type');

				if( $terms ): $numItems = count($terms); $i = 0; ?>

					<li><strong>Book Type: </strong>

					<?php foreach( $terms as $term ): ?>

						<?php echo $term->name; if (++$i != $numItems) {echo ', ';}?>
					
					<?php endforeach; ?>

					</li>

				<?php endif; */						

				// Book format
				// ------------------

				$book_format_terms = get_field('book_format');

				if( $book_format_terms ): $numItems = count($book_format_terms); $i = 0; ?>

					<li><strong>Book Format: </strong>

					<?php foreach( $book_format_terms as $term ): ?>

						<?php echo $term->name; if (++$i != $numItems) {echo ', ';}?>
					
					<?php endforeach; ?>

					</li>

				<?php endif;	

				// RRP
				// ------------------

				if (get_field('rrp')) {
					echo '<li><strong>RRP</strong>: '.get_field('rrp').'</li>';
				}		

				// ISBN numbers
				// ------------------

				if( have_rows('isbn_numbers') ):  while ( have_rows('isbn_numbers') ) : the_row(); ?>

					<li><strong><?php the_sub_field('isbn_label'); ?></strong>: <?php the_sub_field('isbn_number'); ?></li>

				<?php endwhile; 

				else :

				// no rows found

				endif; ?>

			</ul>


				<?php 

				// Sales links
				// ------------------

				if( have_rows('sales_links') ): ?>

					<h3>Available at these locations</h3>

					<ul class="list-plain">

				  	<?php while ( have_rows('sales_links') ) : the_row(); ?>

				    	<li><a target="_blank" href="<?php the_sub_field('retailer_link'); ?>"><?php the_sub_field('retailer_name'); ?></a></li>

				  	<?php endwhile; ?>

				  </ul>

				<?php else :

				    // no rows found

				endif; ?>			

			</div>




		</div>
	</div>
</div>


<div class="content-wrapper has_background_color content-wrapper_narrow clr-white">
	<div class="content rte">
		<div class="entry-text">

			<?php

			// Title
			// --------------

			the_title( '<h2>', '</h2>' );

			// Description
			// --------------

			if (get_field('book_description')) { 

				echo '<div class="align-l">'.get_field('book_description').'</div>'; 

			} ?>								

		</div>
	</div>
</div>


	<?php 

	// Related books
	// -------------------

	$posts = get_field('related_books');

	if( $posts ): ?>

	<div class="content-wrapper has_background_color clr-orange">
		<div class="content rte">
			<div class="entry-text entry-text_publications">		

			<h2 class="entry-title">More books</h2>


							<?php foreach( $posts as $post): ?>
								<?php setup_postdata($post); ?>

<div class="publication publication-books">
									<a href="<?php the_permalink(); ?>">

										<?php if ( has_post_thumbnail() ) { ?>

											<div class="publication-image">
												<?php the_post_thumbnail('w250');?>
											</div>

										<?php } ?>

									</a>

									<a class="btn" href="<?php the_permalink(); ?>">Read more</a>

									</div>
			

							<?php endforeach; ?>

</div>
</div>
</div>

						<?php wp_reset_postdata();  ?>

					<?php endif;?>	