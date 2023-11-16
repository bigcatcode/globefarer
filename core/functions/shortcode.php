<?php 

add_shortcode( 'ascendum_solutions', 'ascendum_solutions_func' );
function ascendum_solutions_func( $atts ){

	$html = '';
	ob_start();


		globefarer_template_part( 'content', 'templates/parts/section-geographies' );

		?>
			<div class="loop-solutions">
				<?php globefarer_template_part( 'content', 'templates/parts/loop-solutions' ); ?>
			</div>
		<?php


	$html .= ob_get_contents();
	ob_end_clean();

	return $html;
}