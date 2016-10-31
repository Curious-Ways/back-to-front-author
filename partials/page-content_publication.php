<?php 

	// Get Vars + opening markup
	// ----------------------------

	get_template_part( 'partials/page', 'content_vars' ); ?>

	<div class="content">
		<div class="entry-text entry-text_publications">

			<?php 

			// Publication repeater
			// --------------------			

			if( have_rows('publication') ):

			  while ( have_rows('publication') ) : the_row(); ?>

					<div class="publication">

						<?php 

						if (get_sub_field('title')) {
							echo '<div class="publication-title">';
								echo '<h2 class="entry-title match-title">'.get_sub_field('title').'</h2>';
							echo '</div>';
						}

						if (get_sub_field('subtitle')) {
							echo '<div class="publication-subtitle">';
								echo '<h3 class="match-subtitle">'.get_sub_field('subtitle').'</h3>';
							echo '</div>';
						}

						if (get_sub_field('text')) {
							echo '<div class="publication-text match-details rte">';
								echo ''.get_sub_field('text').'';
							echo '</div>';
						}			

						$image = get_sub_field('image');
						$size = 'book';

						if( $image ) { ?>

							<div class="publication-image">

								<?php echo wp_get_attachment_image( $image, $size ); ?>

							</div>

						<?php }

						// Links
						// --------------

						if (get_sub_field('link')) {
							echo '<div class="links-group">';
								echo '<a class="btn" href="'.get_sub_field('link').'">'.get_sub_field('link_text').'</a>';
							echo '</div>';
						} ?>						

					</div>

			  <?php endwhile;			  

			else :

			  // no rows found

			endif; ?>

		</div>
	</div>	

	<?php 

	// if there's a content background image set, close the DIV
	// -----------------------------------------------------------

	$content_background_image = get_sub_field('content_background_image');

	if ($content_background_image) {
		echo '</div>';
	} ?>

</div><!-- /.content-wrapper -->			