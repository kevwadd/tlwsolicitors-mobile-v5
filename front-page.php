<?php get_header(); ?>
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
	<?php 
	$hp_sections = get_field('hp_sections', 'option');
	$banner_active = get_field('hp_top_banner_active', 'option');	
	?>
	<!-- MAIN CONTENT START -->
	<main id="main-content">
				
		<?php include (STYLESHEETPATH . '/_/inc/xmas/pop-up.inc'); ?>
		
		<?php include (STYLESHEETPATH . '/_/inc/global/awards-strip.inc'); ?>	

		<!-- BANNER SECTION -->
		<?php if ($banner_active) { 
		$hp_banner_type = get_field('hp_banner_type', 'option');	
			if ($hp_banner_type == "video") {
			$hp_banner_type = "img";	
			}
		?>
			<?php if ($hp_banner_type == "img") { ?>
			<?php include (STYLESHEETPATH . '/_/inc/banners/homepage/img-banner.inc'); ?>		
			<?php } ?>		
		<?php } ?>
		
		<!-- MAIN TEXT SECTION -->
		
		<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/main-content-section.inc'); ?>

		<?php if (!empty($hp_sections)) { ?>		
			<?php foreach ($hp_sections as $section) { ?>
				
				<?php if ($section['acf_fc_layout'] == 'feedback-section') { ?>
				<!-- FEEDBACK SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/feedback-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'form-section') { ?>
				<!-- FORM SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/form-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'blog-posts') { ?>
				<!-- FORM SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/blog-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'downloads-section') { ?>
				<!-- FORM SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/downloads-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'toolkit-section') { ?>
				<!-- FORM SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/toolkit-section.inc'); ?>		
				<?php } ?>

			<?php } ?>
		<?php } ?>
		
		<?php include (STYLESHEETPATH . '/_/inc/global/footer-info.inc'); ?>	
		
	</main>	
	<?php endwhile; ?>
	<?php endif; ?>
	
<?php get_footer(); ?>
