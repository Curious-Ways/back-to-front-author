<?php 

	// Get Vars + opening markup
	// ----------------------------

	get_template_part( 'partials/page', 'content_vars' ); ?>

	<div class="content">
		<div class="entry-text entry-text_two_column">

			<?php 

			// Title
			// --------------

			if (get_sub_field('title')) {
				echo '<h2 class="entry-title">'.get_sub_field('title').'</h2>';
			} 

			// Content
			// --------------

			if (get_sub_field('content_column_1') || get_sub_field('content_column_2')) {
				echo '<div class="columns">';
			}

				if (get_sub_field('content_column_1')) {

					echo '<div class="column">';

						// Content
						// ---------------

						echo '<div class="rte">';

							the_sub_field('content_column_1');

						echo '</div>';

						// Links
						// --------------

						if (get_sub_field('column_one_link')) {
							echo '<div class="links-group">';
								echo '<a class="btn" href="'.get_sub_field('column_one_link').'">'.get_sub_field('column_one_link_text').'</a>';
							echo '</div>';
						}						

					echo '</div>';
				}	

				if (get_sub_field('content_column_2')) {

					echo '<div class="column">';

						echo '<div class="rte">';

							the_sub_field('content_column_2');

						echo '</div>';

						// Links
						// --------------

						if (get_sub_field('column_two_link')) {
							echo '<div class="links-group">';
								echo '<a class="btn" href="'.get_sub_field('column_two_link').'">'.get_sub_field('column_two_link_text').'</a>';
							echo '</div>';
						}							

					echo '</div>';
				}	

			if (get_sub_field('content_column_1') || get_sub_field('content_column_2')) {
				echo '</div>';
			} ?>

		</div>
	</div>

</div><!-- /.content-wrapper -->