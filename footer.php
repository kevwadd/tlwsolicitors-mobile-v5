		<?php 
		$freephone_num = get_field('freephone_num', 'option');
		$contact_pg = get_page_by_title( "Contact us");
		$location = get_field('global_location', 'options');
		global $post;
		//echo '<pre>';print_r($contact_pg);echo '</pre>';
		?>
		<!-- FOOTER START -->
		<footer id="footer-nav">
			<nav class="links">
				<?php if (!empty($freephone_num)) { ?>
				<a href="tel:<?php echo str_replace(' ', '-', $freephone_num); ?>" onclick="ga('send', 'event','Freephone click', 'tap', '<?php echo $post->post_title; ?> - Call back')" title="Call us now"><i class="fa fa-phone"></i><span class="title">Call us</span></a>
				<?php } ?>
				<a href="<?php echo get_permalink( $contact_pg->ID ); ?>" title="Contact us"><i class="fa fa-envelope"></i><span class="title"><?php echo get_the_title( $contact_pg->ID ); ?></span></a>
				<a href="<?php echo get_permalink( $contact_pg->ID ); ?>/#find-us" title="Find us"><i class="fa fa-location-arrow"></i><span class="title">Find us</span></a>
				<a href="#search" id="search-btn" title="Search"><i class="fa fa-search fa-lg"></i><span class="title">Search</span></a>
			</nav>
		</footer>
		
</div><!-- MAIN WRAPPER END -->
		
		<?php include (STYLESHEETPATH . '/_/inc/global/no-script.php'); ?>
		
		<?php include (STYLESHEETPATH . '/_/inc/global/search-pop-up.inc'); ?>
		
		<?php include (STYLESHEETPATH . '/_/inc/contact-us/route-finder-modal.inc'); ?>
		
		<?php //include (STYLESHEETPATH . '/_/inc/xmas/pop-up.inc'); ?>
				
		<?php wp_footer(); ?>
		
	</body>
</html>