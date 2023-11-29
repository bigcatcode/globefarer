<?php
$post_id       = get_the_ID();
$is_enabled    = globefarer_core_get_post_value_through_levels( 'qodef_blog_single_enable_related_posts' );
$related_posts = globefarer_core_get_custom_post_type_related_posts( $post_id, globefarer_core_get_blog_single_post_taxonomies( $post_id ) );

if ( 'yes' === $is_enabled && ! empty( $related_posts ) && class_exists( 'GlobeFarerCore_Blog_List_Shortcode' ) ) { ?>
	<div id="qodef-related-posts">
		<h2><?php echo esc_html__( 'Related news', 'globefarer-core' ); ?></h2>
		<?php
		$params = apply_filters(
			'globefarer_core_filter_blog_single_related_posts_params',
			array(
				'custom_class'         => 'qodef--no-bottom-space',
				'columns'              => '3',
				'posts_per_page'       => 3,
				'additional_params'    => 'id',
				'post_ids'             => $related_posts['items'],
				'title_tag'            => 'h4',
				'excerpt_length'       => '160',
				'button_text'          => esc_html__( 'Read More', 'globefarer-core' ),
				'line_break_positions' => 2,
				'layout'               => 'standard',
				'space'                => 'normal',
				'images_proportion'    => 'medium',
				'custom_image_width'   => '640',
				'custom_image_height'  => '430',
                'hover_animation'      => 'no',
                //'text_transform'	   =>  'none'
			)
		);

		echo GlobeFarerCore_Blog_List_Shortcode::call_shortcode( $params );
		?>
	</div>
<?php } ?>
