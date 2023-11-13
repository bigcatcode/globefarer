<?php if ( get_the_posts_pagination() !== '' ) : ?>
	<div class="qodef-m-pagination qodef--wp">
		<?php
		// Load posts pagination (in order to override template use navigation_markup_template filter hook)
		the_posts_pagination(
			array(
				'prev_text'          => '<span class="qodef-m-pagination-label">' . esc_html__( 'Prev', 'globefarer' ) . '</span>' . globefarer_get_svg_icon( 'pagination-arrow-left', 'qodef-m-pagination-icon' ),
				'next_text'          => '<span class="qodef-m-pagination-label">' . esc_html__( 'Next', 'globefarer' ) . '</span>' . globefarer_get_svg_icon( 'pagination-arrow-right', 'qodef-m-pagination-icon' ),
				'before_page_number' => '0',
			)
		);
		?>
	</div>
<?php endif; ?>
