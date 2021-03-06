<?php  
$post_thumbnail_id = get_post_thumbnail_id($img_post);
$banner_feat_full_src = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
$banner_feat_thumb_src = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
//echo '<pre class="debug">';print_r($banner_feat_thumb_src);echo '</pre>';
?>

<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700);
</style>

<section class="toolkit-banner full-bg-img" data-src="<?php echo $banner_feat_full_src[0]; ?>" data-src="<?php echo $banner_feat_full_src[0]; ?>"style="background-image: url(<?php echo $banner_feat_thumb_src[0]; ?>)">
				
	<div class="tk-title-strip col-<?php echo (!empty($color)) ? $color : 'red'; ?>">
		<div class="container-fluid text-center">
			<?php echo get_the_title($post->post_parent); ?>
		</div>
	</div>
	
	<div class="tk-banner-txt">
		<div class="container-fluid">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>

	<div class="bg-lines col-<?php echo (!empty($color)) ? $color : 'red'; ?>"></div>
	<div class="top-drk-grad"></div>
	
</section>