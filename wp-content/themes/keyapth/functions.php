<?php 

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
function wpdocs_filter_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'keyapth' ), max( $paged, $page ) );

	return $title;
}
	add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );

	/**
 * Add a sidebar.
 */
	function wpdocs_theme_slug_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Blog Sidebar', 'keyapth' ),
			'id'            => 'blog-sidebar',
			'description'   => __( 'This is blog sidebar', 'keypath' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		) );
	}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

?>