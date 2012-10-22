<?php
/**
 * The template for displaying search forms in Macuisine
 *
 * @package Macuisine
 * @since Macuisine 1.0
 */
?>
	<form method="get" class="site-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="site-search-search-field" class="site-search-label assistive-text"><?php _e( 'Search', 'macuisine' ); ?></label>
		<input type="search" class="site-search-input" name="site-search-search-field" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'macuisine' ); ?>" />
		<input type="submit" class="site-search-submit" name="submit" value="<?php esc_attr_e( 'Search', 'macuisine' ); ?>" />
	</form>
