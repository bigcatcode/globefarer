<?php if ( globefarer_is_footer_middle_area_enabled() ) { ?>
	<div id="qodef-page-footer-middle-area">
		<div id="qodef-page-footer-middle-area-inner" class="<?php echo esc_attr( globefarer_get_footer_middle_area_classes() ); ?>">
			<div class="<?php echo esc_attr( globefarer_get_footer_middle_area_columns_classes() ); ?>">
				<div class="qodef-grid-inner clear">
					<?php for ( $i = 1; $i <= intval( globefarer_get_page_footer_sidebars_config_by_key( 'footer_middle_sidebars_number' ) ); $i ++ ) { ?>
						<div class="qodef-grid-item">
							<?php globefarer_get_footer_widget_area( 'middle', $i ); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
