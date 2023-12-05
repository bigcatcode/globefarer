<?php

// Hook to include additional content before blog post item
do_action( 'globefarer_action_before_blog_post_item' );

if ( is_singular( 'post' )  && is_single() ) { ?>

	<a href="<?php echo home_url( '/news/' ); ?>" class="back-to-news">
		<span class="back-to-news-icon">
			<svg class="qodef-svg--back-to-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24.042" height="26.433" viewBox="0 0 24.042 26.433">
				<g transform="translate(-1740.938 -900.216)">
					<g class="qodef-m-hover"><rect width="16" height="2" transform="translate(1754.373 901.63) rotate(135)"></rect><rect width="24" height="2" transform="translate(1753.958 902.649) rotate(90)"></rect><rect width="16" height="2" transform="translate(1752.958 900.216) rotate(45)"></rect></g>
				</g>
			</svg>	
		</span>
	</a>
<?php
}

if ( have_posts() ) {
	while ( have_posts() ) :
		the_post();

		// Include post item
		if ( is_single() ) {
			echo apply_filters( 'globefarer_filter_blog_single_template', globefarer_get_template_part( 'blog', 'templates/parts/single/post', get_post_format() ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		} else {
			echo apply_filters( 'globefarer_filter_blog_list_post_template', globefarer_get_template_part( 'blog', 'templates/parts/list/post', get_post_format() ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	endwhile; // End of the loop.
} else {
	// Include global posts not found
	globefarer_template_part( 'content', 'templates/parts/posts-not-found' );
}

if ( is_singular( 'post' ) ) {
	globefarer_template_part( 'blog', 'templates/single/single-post-navigation/templates/single-post-navigation' );
	globefarer_template_part( 'blog', 'templates/single/related-posts/templates/related-posts' );
} else {
	// Hook to include additional content after blog post item
	do_action( 'globefarer_action_after_blog_post_item' );
}

//echo do_shortcode( '[globefarer_core_blog_list images_proportion="medium" posts_per_page="3" text_transform="none" button_text="Read more" pagination_type="no-pagination" enable_filter="no" behavior="columns" columns="3" columns_responsive="predefined" space="normal" orderby="rand" order="DESC" layout="standard" title_tag="h4" hover_animation="no" _transform_keep_proportions="yes" _transform_keep_proportions_hover="yes"]' );

wp_reset_postdata();
