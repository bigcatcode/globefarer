<?php
// Hook to include additional content before page content holder
do_action( 'globefarer_action_before_page_content_holder' );
?>
<main id="qodef-page-content" class="qodef-grid qodef-layout--template <?php echo esc_attr( globefarer_get_grid_gutter_classes() ); ?>" role="main">
	<div class="qodef-grid-inner clear">
		
		<?php
			// Include page content loop
			globefarer_template_part( 'content', 'templates/parts/loop' );
		?>

			<div class="loop-geo">
				<?php globefarer_template_part( 'content', 'templates/parts/section-geographies' ); ?>
			</div>
		
		
			<div class="loop-solutions">
				<?php globefarer_template_part( 'content', 'templates/parts/loop-solutions' ); ?>
			</div>

		<?php
			// Include page content sidebar
			//globefarer_template_part( 'sidebar', 'templates/sidebar' );		
		?>

	</div>
</main>
<?php
// Hook to include additional content after main page content holder
do_action( 'globefarer_action_after_page_content_holder' );
?>
