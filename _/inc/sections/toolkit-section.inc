<?php  
$toolkit_active = $section['toolkit_active'];		
?>
<?php if ($toolkit_active) { ?>

<?php 
$toolkit_page = $section['toolkit_page'];
$toolkit_page_parent = get_page($toolkit_page);
$pg = get_page_by_path($toolkit_page_parent->post_name."/toolkit");
$color = get_field('page_colour', $toolkit_page);
$toolkit_content = apply_filters('the_content', $pg->post_content );
$section_title = "TLW Toolkit";	
//echo '<pre class="debug">';print_r($toolkit_page_parent);echo '</pre>';
$page_icon = get_field('page_icon', $pg->ID);

$post_thumbnail_id = get_post_thumbnail_id( $pg->ID );
$feat_img = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
$feat_img_thumb = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
?>

<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section links-1 bg-col-<?php echo $color; ?>">
	
	<h2 class="text-center section-header bg-col-grayDk"><?php echo get_the_title($toolkit_page); ?> <?php echo get_the_title($pg->ID); ?></h2>
	
	<div class="bg-img full-bg-img" data-src="<?php echo $feat_img[0];?>" style="background-image: url(<?php echo $feat_img_thumb[0] ; ?>)"><div class="img-overlay"></div></div>

	<div class="tk-text">
		<div class="container-fluid">
		<?php echo $toolkit_content; ?>
		
		
		<a href="<?php echo get_permalink($pg->ID); ?>" class="toolkit-link link-col-<?php echo $color; ?>">	
			<i class="fa <?php echo $page_icon; ?> link-icon"></i>
			View our <span><?php echo get_the_title($toolkit_page); ?> Toolkit</span> 
		</a>
	</div>

</section>

<?php } ?>