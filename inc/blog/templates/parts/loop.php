<?php

// Hook to include additional content before blog post item
do_action( 'globefarer_action_before_blog_post_item' );

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
