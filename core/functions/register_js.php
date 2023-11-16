<?php

function custom_child_scripts() {

	global $post;

	if ( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'ascendum_solutions') ) {

		wp_enqueue_style(
			'solution-selector-block', 
			CORE_URL . '/css/solution-selector-block.css',
			array(),
			rand()
		);

		wp_enqueue_style(
			'shortcode-css', 
			CORE_URL . '/css/shortcode.css',
			array(),
			rand()
		);


		wp_enqueue_script(
		    'custom_core',
		    CORE_URL . '/js/custom_core.js',
	        array('jquery'), 
	        rand(),
	        true  
		);

		wp_localize_script( 'custom_core', 'js_url', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	}

	if ( is_page_template('template-ascendum-solutions.php')  ) {

		wp_enqueue_style(
			'solution-selector-block', 
			CORE_URL . '/css/solution-selector-block.css',
			array(),
			rand()
		);


		wp_enqueue_script(
		    'custom_core',
		    CORE_URL . '/js/custom_core.js',
	        array('jquery'), 
	        rand(),
	        true  
		);

		wp_localize_script( 'custom_core', 'js_url', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

	}



	
	
}
add_action( 'wp_enqueue_scripts', 'custom_child_scripts' ); 

