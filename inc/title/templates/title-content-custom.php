<?php 

$featured_img_url = get_the_post_thumbnail_url( $post->ID , 'full' );
$header_image = get_field( 'header_image', $post->ID );

$featured_img = '';
if ( !empty($header_image)) {
	$featured_img = $header_image['url'];
} else {
	$featured_img = $featured_img_url;
}

?>

<div class="qodef-m-content qodef-content-grid_ custom-page-header" >
	<?php if ( !empty($featured_img)) { ?>
		<div class="header_overlay"></div>
		<img src="<?php echo $featured_img; ?>">
	<?php } ?>
</div>

