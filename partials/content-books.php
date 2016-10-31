<?php
/**
 * Template part for displaying Books CPT.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Back to Front Author
 */

?>

<div class="publication publication-books">

	<?php

	if ( has_post_thumbnail() ) { ?>

		<div class="publication-image">

			<a href="<?php the_permalink(); ?>">

				<?php the_post_thumbnail('w250');?>

			</a>

		</div>

	<?php } 


	echo '<div class="publication-title">';

		the_title( '<h2 class="entry-title match-title">', '</h2>' );	

	echo '</div>';	

	echo '<div class="links-group">'; ?>

	<a class="btn-clear" href="<?php the_permalink(); ?>">Read more</a>

</div>

</div>