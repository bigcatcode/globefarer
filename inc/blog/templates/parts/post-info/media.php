<div class="qodef-e-media">
	<?php
	switch ( get_post_format() ) {
		case 'gallery':
			globefarer_template_part( 'blog', 'templates/parts/post-format/gallery' );
			break;
		case 'video':
			globefarer_template_part( 'blog', 'templates/parts/post-format/video' );
			break;
		case 'audio':
			globefarer_template_part( 'blog', 'templates/parts/post-format/audio' );
			break;
		default:
			globefarer_template_part( 'blog', 'templates/parts/post-info/image' );
			break;
	}
	?>
</div>
