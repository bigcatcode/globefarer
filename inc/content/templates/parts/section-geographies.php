<?php

$geo_active = '';
$geo_business = [];

$geo_object = get_geo_object();
$business_object =  get_business_object( $geo_object );

if ( isset($args['business_object']) ) {
	$business_id = $args['business_object'];
	$geo_business = $business_object[$business_id]["geo"];
} else {
	$business_id = '';
}
// var_dump($business_id);
// var_dump($geo_business);

?>


<div class="reset-section">
	<span class="reset-filters"><?php _e( 'RESET FILTERS', 'globefarer' ); ?></span>
</div>

<!-- geographies -->
<div class="line-section"></div>

<div class="qodef-grid-item animating qodef-page-content-section qodef-col--12 geographies-section">
	<div class="solution-selector-block__solutions solution-selector-block__solutions--all">
		<div class="solution-selector-block__solutions-row solution-selector-block__solutions-row--not-relevant">
			<div class="solution-selector-block__solutions-row-content">

				<?php foreach ($geo_object as $geo => $geosvalue) { ?>
					
					<?php
						$selected = '';
						if ( $geo == $geo_active || in_array($geo, $geo_business)) { 
							$selected = 'selected'; 
						}
					?>
						<div class="solution-selector-block__solutions-row-content--item geo-item <?php echo $selected; ?> " geo_id="<?php echo $geo; ?>" >						
							<button type="button" aria-haspopup="dialog" >
								<svg class="qodef-svg--plus qodef-menu-item-plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="8" viewBox="0 0 14 14"><path class="qodef-m-horizontal" d="M0,0H14V2H0Z" transform="translate(0 6)"></path><path class="qodef-m-vertical" d="M0,0H2V14H0Z" transform="translate(6)"></path></svg>
								<?php echo $geo; ?>
							</button>
						</div>
				<?php } ?>

			</div>	
		</div>
	</div>
</div>