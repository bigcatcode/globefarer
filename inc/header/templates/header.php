<?php
// Hook to include additional content before page header
do_action( 'globefarer_action_before_page_header' );

if ( is_singular( 'post' ) ) {
	$skin = 'qodef-content-grid qodef-skin--light qodef-header-cursor--light';
} else {
	$skin = '';
}

?>
<header id="qodef-page-header" <?php globefarer_class_attribute( apply_filters( 'globefarer_filter_header_class', array() ) ); ?> role="banner">
	<?php
	// Hook to include additional content before page header inner
	do_action( 'globefarer_action_before_page_header_inner' );
	?>
	<div id="qodef-page-header-inner" class="<?php echo $skin; ?>" <?php globefarer_class_attribute( apply_filters( 'globefarer_filter_header_inner_class', array(), 'default' ) ); ?>>
		<?php
		// Include module content template
		echo apply_filters( 'globefarer_filter_header_content_template', globefarer_get_template_part( 'header', 'templates/header-content' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		?>
	</div>
	<?php
	// Hook to include additional content after page header inner
	do_action( 'globefarer_action_after_page_header_inner' );
	?>
</header>
