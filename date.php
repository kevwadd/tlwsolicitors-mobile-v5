<?php get_header(); ?>

<!-- MAIN CONTENT START -->

<?php
$news_page_id = get_option('page_for_posts');
$news_page = get_page($news_page_id);
$page_icon = get_field('page_icon', $news_page->ID);
	
	if ( has_post_thumbnail($news_page_id) ) {
	$img_post = get_page($news_page_id);
	}
?>

<main class="page-col-red">
	
	<?php include (STYLESHEETPATH . '/_/inc/global/awards-strip.inc'); ?>	
	
	<?php if ($img_post) { ?>
	<?php include (STYLESHEETPATH . '/_/inc/banners/blog/img-banner-index-pg.inc'); ?>		
	<?php } ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/sections/global-telephone-number.inc'); ?>		
	
	<?php include (STYLESHEETPATH . '/_/inc/global/col-strip.inc'); ?>
	
	<!-- PAGE TOP BAR SECTION -->
	<?php include (STYLESHEETPATH . '/_/inc/posts/index-top-bar.inc'); ?>	
	
	<!-- POSTS LIST -->
	<?php include (STYLESHEETPATH . '/_/inc/posts/index-post-list.inc'); ?>	
	
	<!-- SOCIAL FEED -->
	<?php include (STYLESHEETPATH . '/_/inc/posts/social-feed-slider.inc'); ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/global/footer-info.inc'); ?>	
</main>

<?php get_footer(); ?>
