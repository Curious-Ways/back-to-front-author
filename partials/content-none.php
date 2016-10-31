<?php
/**
 * @package Back to Front Author
 */
?>

<header class="page-header content-wrapper has_background_image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/main_image.jpg');">
  <div class="content">
    <div class="page-header-content">

			<h1 class="page-title"><?php _e( 'Nothing Found', 'back_to_front_author' ); ?></h1>

    	</div>
  	</div>
	</div>
</header>

<div class="content-wrapper content-wrapper_news">
	<div class="content rte">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'back_to_front_author' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'back_to_front_author' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'back_to_front_author' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</div>



