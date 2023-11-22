<?php 

$featured_img_url = get_the_post_thumbnail_url( $post->ID , 'full' );

?>

<div class="qodef-m-content qodef-content-grid_ custom-page-header" style="background-image: url(<?php echo $featured_img_url; ?>);">
	
</div>

