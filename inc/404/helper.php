<?php

if ( ! function_exists( 'globefarer_set_404_page_inner_classes' ) ) {
	/**
	 * Function that return classes for the page inner div from header.php
	 *
	 * @param string $classes
	 *
	 * @return string
	 */
	function globefarer_set_404_page_inner_classes( $classes ) {

		if ( is_404() ) {
			$classes = 'qodef-content-full-width';
		}

		return $classes;
	}

	add_filter( 'globefarer_filter_page_inner_classes', 'globefarer_set_404_page_inner_classes' );
}

if ( ! function_exists( 'globefarer_get_404_page_parameters' ) ) {
	/**
	 * Function that set 404 page area content parameters
	 */
	function globefarer_get_404_page_parameters() {

		$params = array(
			'title'       => esc_html__( 'Error page 404', 'globefarer' ),
			'text'        => esc_html__( 'The page you are looking for doesn\'t exist. Return to the website\'s homepage to find what you\'re looking for.', 'globefarer' ),
			'button_text' => esc_html__( 'Back to home', 'globefarer' ),
			'image'       => GLOBEFARER_ASSETS_ROOT . '/img/404.png',
		);

		return apply_filters( 'globefarer_filter_404_page_template_params', $params );
	}
}
