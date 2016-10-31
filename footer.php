<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Back to Front Author
 */
?>

</div>

</main>

<footer class="site-footer" role="contentinfo">
	
	<div class="content-wrapper">
		<div class="content">

			<nav class="secondary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => '', 'menu_class' => 'menu-piped' ) ); ?>
			</nav>			

			<?php 

			// Social Links
			// ---------------------

			if( have_rows('social_links', 'option') ):

				echo '<div><nav class="social-navigation">';

					echo '<ul class="menu-inline">';

					  while ( have_rows('social_links', 'option') ) : the_row(); ?>

					  	<li>
								<a href="<?php the_sub_field('link'); ?>">
									<span class="fa-stack fa-lg">
								  	<i class="fa fa-circle fa-stack-2x"></i>
								  	<i class="fa <?php the_sub_field('link_icon'); ?> fa-stack-1x"></i>
									</span>
								</a>
							</li>

					  <?php endwhile;

				  echo '</ul>';

			  echo '</div>';

			else :
			  // no rows found
			endif;

			?>

		</div>
	</div>

</footer>

<?php wp_footer(); ?>

<!-- Older IE polyfills -->
<!--[if IE 8]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->

<script src="<?php echo get_template_directory_uri(); ?>/inc/dropit.js"></script>

<script>
	jQuery('#menu-primary-menu').dropit({
		action: 'hover'
	});	
</script>

<script src="https://use.fontawesome.com/f96037327d.js"></script>

</body>
</html>