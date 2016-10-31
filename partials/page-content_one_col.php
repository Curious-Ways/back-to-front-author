<?php 

	// Get Vars + opening markup
	// ----------------------------

	get_template_part( 'partials/page', 'content_vars' ); ?>

	<div class="content">
		<div class="entry-text entry-text_one_column">



				<?php 

				// Title
				// --------------

				if (get_sub_field('title')) {
					echo '<h2 class="entry-title">'.get_sub_field('title').'</h2>';
				} 

				// Content
				// --------------

				if (get_sub_field('content')) {
					echo '<div class="rte">'.get_sub_field('content').'</div>';
				}			

				// Links
				// --------------

				if (get_sub_field('link')) {
					echo '<div class="links-group">';
						echo '<a class="btn" href="'.get_sub_field('link').'">'.get_sub_field('link_text').'</a>';
					echo '</div>';
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