<?php
/**
 * The template for displaying search forms inSpace Diary
 *
 * @package Back to Front Author
 */
?>
<form role="search" method="get" class="search-form group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'back_to_front_author' ); ?></span>		
	</label>
	<input type="search" class="search-field field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'back_to_front_author' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'back_to_front_author' ); ?>" />
	<input type="submit" class="search-submit btn" value="<?php echo esc_attr_x( 'Search', 'submit button', 'back_to_front_author' ); ?>" />
</form>
