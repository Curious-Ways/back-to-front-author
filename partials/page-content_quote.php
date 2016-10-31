<?php 

	// Get Vars + opening markup
	// ----------------------------

	get_template_part( 'partials/page', 'content_vars' ); ?>

	<div class="content rte">
		<div class="entry-text entry-text_one_column entry-text_quote">

			<?php 

			// Quote
			// --------------

			if (get_sub_field('quote')) { ?>

				<?php echo '<h2>'.get_sub_field('quote').'</h2>';
			} 

			// Source
			// --------------

			if (get_sub_field('source_name')) {
				echo '<p class="quote-source"><span>&#45;</span>'.get_sub_field('source_name').'</p>';
			}	

			if (get_sub_field('source_organisation')) {
				echo '<p class="quote-org"><span>&#44;</span> '.get_sub_field('source_organisation').'</p>';
			}				

			?>

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