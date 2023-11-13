<article <?php post_class( 'qodef-blog-item qodef-e' ); ?>>
	<div class="qodef-e-inner">
		<?php
		// Include post media
		globefarer_template_part( 'blog', 'templates/parts/post-info/media' );
		?>
		<div class="qodef-e-content">
			<div class="qodef-e-top-holder">
				<div class="qodef-e-info">
					<?php
					// Include post date info
					globefarer_template_part( 'blog', 'templates/parts/post-info/date' );

					// Include post category info
					globefarer_template_part( 'blog', 'templates/parts/post-info/categories' );
					?>
				</div>
			</div>
			<div class="qodef-e-text">
				<?php
				// Include post title
				globefarer_template_part( 'blog', 'templates/parts/post-info/title', '', array( 'title_tag' => 'h2' ) );

				// Include post excerpt
				globefarer_template_part( 'blog', 'templates/parts/post-info/excerpt' );

				// Hook to include additional content after blog single content
				do_action( 'globefarer_action_after_blog_single_content' );
				?>
			</div>
			<div class="qodef-e-bottom-holder">
				<?php
				// Include post read more
				globefarer_template_part( 'blog', 'templates/parts/post-info/read-more', '', $params );
				?>
			</div>
		</div>
	</div>
</article>
