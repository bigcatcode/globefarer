<?php

$terms_business_areas = get_terms( 'business_areas', [
	'hide_empty' => false,
] );
$tax_business_areas = get_taxonomy('business_areas');

$terms_brands = get_terms( 'brands', [
	'hide_empty' => false,
] );
//echo "<pre>", var_dump($terms_brands), "</pre>";
$tax_brands = get_taxonomy('brands');

$terms_services = get_terms( 'services', [
	'hide_empty' => false,
] );
$tax_services = get_taxonomy('services');


$geo_object = get_geo_object();
//echo "<pre>", var_dump($geo_object), "</pre>";

$business_object =  get_business_object( $geo_object );
//echo "<pre>", var_dump($business_object), "</pre>";


if ( isset($args['geo_id']) ) {
	$geo_active = $args['geo_id'];
} else {
	$geo_active = '';
}
//var_dump($geo_active);



?>

<script>

	var business_object = JSON.parse(`<?php echo json_encode($business_object) ?>`);
	var geo_object = JSON.parse(`<?php echo json_encode($geo_object) ?>`);

</script>

<!-- business_areas -->
<div class="line-section"></div>

<div class="qodef-grid-item animating qodef-page-content-section qodef-col--12 sec-business_areas">

	<div class="labes_mobile">
		<button type="button" aria-haspopup="dialog"><?php echo $tax_business_areas->labels->name; ?></button>
	</div>

	<div class="solution-selector-block__solutions solution-selector-block__solutions--all">
		<div class="solution-selector-block__solutions-row solution-selector-block__solutions-row--not-relevant">
			<div class="solution-selector-block__solutions-row-content">

				<div class="solution-selector-block__solutions-row-content--item _selected item-label">
					<button type="button" aria-haspopup="dialog"><?php echo $tax_business_areas->labels->name; ?></button>
				</div>

				<?php foreach ($terms_business_areas as $key => $terms_business_area) { ?>

					<?php if ( $key == 4 || $key == 8 || $key == 12 || $key == 16 || $key == 20 || $key == 24 ) { ?>

						<div class="solution-selector-block__solutions-row-content--item _selected item-label">
							<button type="button" aria-haspopup="dialog"></button>
						</div>

					<?php } ?>

					<?php
						$sel = '';
						if ( !empty($geo_active) && in_array($terms_business_area->term_id, $geo_object[$geo_active]['business_areas']) ) {
							$sel = 'selected';							 
						}

						$geo_logic = get_field( 'geographies' , 'business_areas_'.$terms_business_area->term_id );
						$services_logic = get_field( 'services' , 'business_areas_'.$terms_business_area->term_id );
						
						$geo_logic_object = [];
						if( have_rows('geographies', 'business_areas_'.$terms_business_area->term_id) ):
					    	while( have_rows('geographies', 'business_areas_'.$terms_business_area->term_id) ): the_row(); 

					        	$geo = get_row_layout('business_areas_'.$terms_business_area->term_id);
								$brands = get_sub_field('brands' , 'business_areas_'.$terms_business_area->term_id ); 
					            $geo_logic_object[$geo]['brands'] = $brands;
					            
						    endwhile;
						endif;

	 					?>
							<script>
								var business_area_to_brand_<?php echo $terms_business_area->term_id; ?> = JSON.parse(`<?php echo json_encode($geo_logic_object) ?>`);
								var business_area_to_services_<?php echo $terms_business_area->term_id; ?> = JSON.parse(`<?php echo json_encode($services_logic) ?>`);
							</script>
						<?php 
					?>

					<div class="solution-selector-block__solutions-row-content--item business_areas-item <?php echo $sel; ?>" business-id="<?php echo $terms_business_area->term_id; ?>">
						<button type="button" aria-haspopup="dialog"><?php echo $terms_business_area->name; ?></button>
					</div>

				<?php } ?>

			</div>	
		</div>
	</div>
</div>

<!-- brands -->
<div class="line-section"></div>

<div class="qodef-grid-item animating qodef-page-content-section qodef-col--12 sec-brands">

	<div class="labes_mobile">
		<button type="button" aria-haspopup="dialog"><?php echo $tax_brands->labels->name; ?></button>
	</div>

	<div class="solution-selector-block__solutions solution-selector-block__solutions--all">
		<div class="solution-selector-block__solutions-row solution-selector-block__solutions-row--not-relevant">
			<div class="solution-selector-block__solutions-row-content">

				<div class="solution-selector-block__solutions-row-content--item _selected item-label">
					<button type="button" aria-haspopup="dialog"><?php echo $tax_brands->labels->name; ?></button>
				</div>

				<?php foreach ($terms_brands as $key => $terms_brand) { ?>

					<?php if ( $key == 4 || $key == 8 || $key == 12 || $key == 16 || $key == 20 || $key == 24 ) { ?>

						<div class="solution-selector-block__solutions-row-content--item _selected item-label">
							<button type="button" aria-haspopup="dialog"></button>
						</div>

					<?php } ?>

					<?php
						$sel = '';
						if ( !empty($geo_active) && in_array($terms_brand->term_id, $geo_object[$geo_active]['brands']) ) {
							$sel = 'selected';							 
						}
					?>

					<div class="solution-selector-block__solutions-row-content--item brand-item <?php echo $sel; ?>" brand-id="<?php echo $terms_brand->term_id; ?>">
						<button type="button" aria-haspopup="dialog"><?php echo $terms_brand->name; ?></button>
					</div>

				<?php } ?>

			</div>	
		</div>
	</div>
</div>

<!-- services -->
<div class="line-section"></div>

<div class="qodef-grid-item animating qodef-page-content-section qodef-col--12 sec-services">

	<div class="labes_mobile">
		<button type="button" aria-haspopup="dialog"><?php echo $tax_services->labels->name; ?></button>
	</div>

	<div class="solution-selector-block__solutions solution-selector-block__solutions--all">
		<div class="solution-selector-block__solutions-row solution-selector-block__solutions-row--not-relevant">
			<div class="solution-selector-block__solutions-row-content">

				<div class="solution-selector-block__solutions-row-content--item _selected item-label">
					<button type="button" aria-haspopup="dialog"><?php echo $tax_services->labels->name; ?></button>
				</div>

				<?php foreach ($terms_services as $key => $terms_service) { ?>

					<?php if ( $key == 4 || $key == 8 || $key == 12 || $key == 16 || $key == 20 || $key == 24 ) { ?>

						<div class="solution-selector-block__solutions-row-content--item _selected item-label">
							<button type="button" aria-haspopup="dialog"></button>
						</div>

					<?php } ?>

					<?php
						$sel = '';
						if ( !empty($geo_active) && in_array($terms_service->term_id, $geo_object[$geo_active]['services']) ) {
							$sel = 'selected';							 
						}
					?>

					<div class="solution-selector-block__solutions-row-content--item service-item <?php echo $sel; ?>" services-id="<?php echo $terms_service->term_id; ?>">
						<button type="button" aria-haspopup="dialog"><?php echo $terms_service->name; ?></button>
					</div>

				<?php } ?>

			</div>	
		</div>
	</div>
</div>

<div class="line-section"></div>





