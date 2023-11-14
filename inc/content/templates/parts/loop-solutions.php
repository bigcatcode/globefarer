<?php

$page_template_id = 9430;

$terms_business_areas = get_terms( 'business_areas', [
	'hide_empty' => false,
] );
$tax_business_areas = get_taxonomy('business_areas');

$terms_brands = get_terms( 'brands', [
	'hide_empty' => false,
] );
$tax_brands = get_taxonomy('brands');

$terms_services = get_terms( 'services', [
	'hide_empty' => false,
] );
$tax_services = get_taxonomy('services');

//echo "<pre>", var_dump($tax_business_areas->labels->name), "</pre>";
//echo "<pre>", var_dump($terms_business_areas), "</pre>";

$geo_active = '';
$geo_object = [];

?>


<div class="reset-section">
	<span><?php _e( 'Apagar filtros', 'globefarer' ); ?></span>
</div>

<!-- geographies -->
<div class="line-section"></div>

<div class="qodef-grid-item animating qodef-page-content-section qodef-col--12 geographies-section">
	<div class="solution-selector-block__solutions solution-selector-block__solutions--all">
		<div class="solution-selector-block__solutions-row solution-selector-block__solutions-row--not-relevant">
			<div class="solution-selector-block__solutions-row-content">

				<?php if( have_rows('geographies') ): ?>
				    <?php while( have_rows('geographies') ): the_row(); ?>

				        <?php

				        	$geo = get_row_layout();

				            $business_areas = get_sub_field('business_areas' , $page_template_id ); 
				            $brands = get_sub_field('brands' , $page_template_id ); 
				            $services = get_sub_field('services' , $page_template_id ); 
							
							$geo_object[$geo]['business_areas'] = $business_areas;
							$geo_object[$geo]['brands'] = $brands;
							$geo_object[$geo]['services'] = $services;

				            
				        ?>
				        

						<div class="solution-selector-block__solutions-row-content--item <?php if ($geo == $geo_active) { echo 'selected'; } ?> ">						
							<button type="button" aria-haspopup="dialog">
								<svg class="qodef-svg--plus qodef-menu-item-plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="8" viewBox="0 0 14 14"><path class="qodef-m-horizontal" d="M0,0H14V2H0Z" transform="translate(0 6)"></path><path class="qodef-m-vertical" d="M0,0H2V14H0Z" transform="translate(6)"></path></svg>
								<?php echo $geo; ?>
							</button>
						</div>


				    <?php endwhile; ?>
				<?php endif; ?>

			</div>	
		</div>
	</div>
</div>

<?php //echo "<pre>", var_dump($geo_object), "</pre>"; ?>

<!-- business_areas -->
<div class="line-section"></div>

<div class="qodef-grid-item animating qodef-page-content-section qodef-col--12 sec-business_areas">
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
					?>

					<div class="solution-selector-block__solutions-row-content--item <?php echo $sel; ?>">
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

					<div class="solution-selector-block__solutions-row-content--item <?php echo $sel; ?>">
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

					<div class="solution-selector-block__solutions-row-content--item <?php echo $sel; ?>">
						<button type="button" aria-haspopup="dialog"><?php echo $terms_service->name; ?></button>
					</div>

				<?php } ?>

			</div>	
		</div>
	</div>
</div>

<div class="line-section"></div>





