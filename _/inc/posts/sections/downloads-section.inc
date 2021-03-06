<?php 
$section_title = get_field( "downloads_section_title");	
$download_files = get_field( "download_section_files");	
?>
<section id="downloads-section" class="pg-section with-icon-logo bg-col-red">
	<div class="overlay"></div>
	<h2 class="text-center section-header bg-col-grayDk"><?php echo $section_title; ?></h2>
	
		<?php if ( !empty($download_files) ) { ?>
		<div class="download-items">

		<?php foreach ($download_files as $k => $file) { 
		$img = wp_get_attachment_image_src($file['file_image'], 'medium' );	
		?>
		<div class="text-center download-item">
			<a href="<?php echo $file['file']; ?>" target="_blank">
				<span class="img"><img src="<?php echo $img[0]; ?>" height="70" /></span>
				<span class="title"><?php echo $file['file_name']; ?></span>
			</a>
		</div>
		<?php } ?>

		</div>
		
		<?php } else { ?>
			<div class="well well-lg text-center">
				<h3>Coming soon</h3>
				<p>Downloads are not available at the moment.</p>
			</div>
		<?php } ?>
		

</section>