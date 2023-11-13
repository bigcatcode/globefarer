<?php if ( ! post_password_required() ) : ?>
	<?php
	$button_text          = isset( $button_text ) && ! empty( $button_text ) ? $button_text : esc_html__( 'Read more', 'globefarer' );
	$line_break_positions = isset( $line_break_positions ) && ! empty( $line_break_positions ) ? $line_break_positions : '';
	?>
	<div class="qodef-e-read-more">
		<?php
		if ( globefarer_post_has_read_more() ) {
			$button_params = array(
				'link'                 => get_permalink() . '#more-' . get_the_ID(),
				'button_layout'        => 'textual',
				'text'                 => $button_text,
				'line_break_positions' => $line_break_positions,
			);
		} else {
			$button_params = array(
				'link'                 => get_the_permalink(),
				'button_layout'        => 'textual',
				'text'                 => $button_text,
				'line_break_positions' => $line_break_positions,
			);
		}

		globefarer_render_button_element( $button_params );
		?>
	</div>
<?php endif; ?>
