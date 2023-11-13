<?php //qodef_var_dump( $image ); ?>
<div id="qodef-404-page">
	<div class="qodef-404-content">
		<?php if ( ! empty( $title ) ): ?>
			<h1 class="qodef-404-title"><?php echo esc_html( $title ); ?></h1>
		<?php endif; ?>
		<?php if ( ! empty( $text ) ): ?>
			<p class="qodef-404-text"><?php echo esc_html( $text ); ?></p>
		<?php endif; ?>
		<div class="qodef-404-button">
			<?php
			$button_params = array(
				'link' => esc_url( home_url( '/' ) ),
				'text' => esc_html( $button_text ),
				'button_layout' => 'filled',
			);

			globefarer_render_button_element( $button_params );
			?>
		</div>
	</div>
	<?php if ( ! empty( $image ) ): ?>
		<div class="qodef-404-image">
			<img alt="<?php echo esc_attr__( 'Error page 404', 'globefarer' ) ?>" src="<?php echo esc_url( $image ); ?>">
		</div>
	<?php endif; ?>
</div>
