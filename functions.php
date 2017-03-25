<?php 
/**
 * Solarmove functions and definitions
 */

/**
 * Register Options.
 */
require get_template_directory() . '/../solarmove/inc/options.php';

/**
 * Register Widgets.
 */
require get_template_directory() . '/../solarmove/inc/widgets.php';

/**
 * Add SVG definitions to the footer.
 */
function solarmove_include_svg_icons() {
	
	$svg_icons = get_parent_theme_file_path( '/../solarmove/assets/images/solarmove-icons.svg' );

	if ( file_exists( $svg_icons ) ) {
		require_once( $svg_icons );
	}
}
add_action( 'wp_footer', 'solarmove_include_svg_icons', 9999 );