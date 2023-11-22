<div class="qodef-page-title qodef-m <?php echo esc_attr( globefarer_get_page_title_classes() ); ?>">
	<?php
	// Hook to include additional content before page title inner
	do_action( 'globefarer_action_before_page_title_inner' );
	?>
	<div class="qodef-m-inner">
		<?php
		// Include module content template
		if ( is_single() ) { 
			echo apply_filters( 'globefarer_filter_title_content_template_custom', globefarer_get_template_part( 'title', 'templates/title-content-custom' ) ); 
		} else {
			echo apply_filters( 'globefarer_filter_title_content_template', globefarer_get_template_part( 'title', 'templates/title-content' ) ); 
		}
		?>
	</div>
	<?php
	// Hook to include additional content after page title inner
	do_action( 'globefarer_action_after_page_title_inner' );
	?>
</div>
