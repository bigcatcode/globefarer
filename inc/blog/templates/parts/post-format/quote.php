<?php
$quote_meta = get_post_meta( get_the_ID(), 'qodef_post_format_quote_text', true );
$quote_text = ! empty( $quote_meta ) ? $quote_meta : get_the_title();
?>

<?php if ( ! empty( $quote_text ) ) : ?>
	<?php
	$quote_author_position     = get_post_meta( get_the_ID(), 'qodef_post_format_quote_author_position', true );
	$quote_author_name         = get_post_meta( get_the_ID(), 'qodef_post_format_quote_author_name', true );
	$title_tag                 = isset( $title_tag ) && ! empty( $title_tag ) ? $title_tag : 'h3';
	$author_position_title_tag = isset( $author_position_title_tag ) && ! empty( $author_position_title_tag ) ? $author_position_title_tag : 'h6';
	$author_name_title_tag     = isset( $author_name_title_tag ) && ! empty( $author_name_title_tag ) ? $author_name_title_tag : 'h4';
	?>
	<div class="qodef-e-quote">
	<?php globefarer_render_svg_icon( 'quote', 'qodef-e-quote-icon' ); ?>
	<div data-clear="qodef-e-quote-content">
	<?php echo '<' . esc_attr( $title_tag ); ?> class="qodef-e-quote-text"><?php echo esc_html( $quote_text ); ?></<?php echo esc_attr( $title_tag ); ?>>
	<?php if ( ! empty( $quote_author_name ) ) : ?>
		<?php echo '<' . esc_attr( $author_position_title_tag ); ?> class="qodef-e-quote-author-position"><?php echo esc_html( $quote_author_position ); ?></<?php echo esc_attr( $author_position_title_tag ); ?>>
		<?php echo '<' . esc_attr( $author_name_title_tag ); ?> class="qodef-e-quote-author-name"><?php echo esc_html( $quote_author_name ); ?></<?php echo esc_attr( $author_name_title_tag ); ?>>
	<?php endif; ?>
	</div>
	<?php if ( ! is_single() ) : ?>
		<a itemprop="url" class="qodef-e-quote-url" href="<?php the_permalink(); ?>"></a>
	<?php endif; ?>
	</div>
<?php endif; ?>
