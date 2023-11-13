<?php

if ( ! function_exists( 'globefarer_load_page_mobile_header' ) ) {
	/**
	 * Function which loads page template module
	 */
	function globefarer_load_page_mobile_header() {
		// Include mobile header template
		echo apply_filters( 'globefarer_filter_mobile_header_template', globefarer_get_template_part( 'mobile-header', 'templates/mobile-header' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	add_action( 'globefarer_action_page_header_template', 'globefarer_load_page_mobile_header' );
}

if ( ! function_exists( 'globefarer_register_mobile_navigation_menus' ) ) {
	/**
	 * Function which registers navigation menus
	 */
	function globefarer_register_mobile_navigation_menus() {
		$navigation_menus = apply_filters( 'globefarer_filter_register_mobile_navigation_menus', array( 'mobile-navigation' => esc_html__( 'Mobile Navigation', 'globefarer' ) ) );

		if ( ! empty( $navigation_menus ) ) {
			register_nav_menus( $navigation_menus );
		}
	}

	add_action( 'globefarer_action_after_include_modules', 'globefarer_register_mobile_navigation_menus' );
}
