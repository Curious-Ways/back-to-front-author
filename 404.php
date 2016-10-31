<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Back to Front Author
 */

get_header(); ?>

<header class="page-header content-wrapper has_background_image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/main_image.jpg');">
  <div class="content">
    <div class="page-header-content">

			<h1 class="page-title"><?php _e( 'That page can&rsquo;t be found.', 'back_to_front_author' ); ?></h1>
			<h2><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links above', 'back_to_front_author' ); ?></h2>

    	</div>
  	</div>
	</div>
</header>

<?php get_footer(); ?>