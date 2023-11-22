<?php
add_action( 'wp_ajax_get_term_by_geo', 'get_term_by_geo' );
add_action( 'wp_ajax_nopriv_get_term_by_geo', 'get_term_by_geo' );

function get_term_by_geo() {

	$geo_id = $_POST['geo_id'];

	ob_start();

		$template_args = array(
		  'geo_id'  => $geo_id,
		);

		//globefarer_template_part( 'content', 'templates/parts/loop-solutions' );
		get_template_part( 'inc/content/templates/parts/loop', 'solutions', $template_args );

	$content = ob_get_contents();
	ob_end_clean();

	$res['content'] = $content;
	$res['geo_id'] = $geo_id;
	echo json_encode( $res );
	exit;

} 

function get_geo_object( $page_template_id = 9430 ) {

	$geo_object = [];

	if( have_rows('geographies', $page_template_id) ):
    	while( have_rows('geographies', $page_template_id) ): the_row(); 

        	$geo = get_row_layout($page_template_id);

            $business_areas = get_sub_field('business_areas' , $page_template_id ); 
            $brands = get_sub_field('brands' , $page_template_id ); 
            $services = get_sub_field('services' , $page_template_id ); 
			
			$geo_object[$geo]['business_areas'] = $business_areas;
			$geo_object[$geo]['brands'] = $brands;
			$geo_object[$geo]['services'] = $services;

            
	    endwhile;
	endif;

	return $geo_object;

}

function get_business_object( $geo_object ) {

	$business_object = [];
	$brands = [];
	$services = [];

	$terms_business_areas = get_terms( 'business_areas', [
		'hide_empty' => false,
	] );	
	foreach ($terms_business_areas as $kkey => $terms_business_area) {
		foreach ($geo_object  as $k => $geo_object_) {

			if ( in_array($terms_business_area->term_id, $geo_object_['business_areas']) ) {

				$business_object[$terms_business_area->term_id]['geo'][] = $k;

				$brands = array_merge($brands,$geo_object_['brands']);
				$services = array_merge($services,$geo_object_['services']);
			}
		}
		$business_object[$terms_business_area->term_id]['brands'] = array_unique($brands);
		$business_object[$terms_business_area->term_id]['services'] = array_unique($services);
	}




	return $business_object;

}

add_action( 'wp_ajax_get_term_by_business', 'get_term_by_business' );
add_action( 'wp_ajax_nopriv_get_term_by_business', 'get_term_by_business' );

function get_term_by_business() {

	$business_object = $_POST['business_object'];


	ob_start();

		$template_args = array(
		  'business_object'  => $business_object,
		);

		get_template_part( 'inc/content/templates/parts/section', 'geographies', $template_args );


	$content = ob_get_contents();
	ob_end_clean();

	ob_start();

		$template_args = array(
		  'business_object'  => $business_object,
		);

		get_template_part( 'inc/content/templates/parts/loop', 'solutions', $template_args );

	$content2 = ob_get_contents();
	ob_end_clean();

	$res['content'] = $content;
	$res['content2'] = $content2;
	$res['business_object'] = $business_object;
	echo json_encode( $res );
	exit;

}




