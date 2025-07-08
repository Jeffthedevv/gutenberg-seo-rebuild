<?php
/**
 * Vdeo Block Template.
 *
 * @param array $block The block settings and attributes.
 */

  $blockHeight     = get_field('block_height') ?? '';
  $blockBGVideoSrc = get_field("background_video") ?? '';
?>

<section class="page-video col-sm-12 <?php echo $blockHeight; ?>">
	<div class="video-overlay">
		<video autoplay muted loop id="bg-video">
			<source src="<?php echo $blockBGVideoSrc ?>" type="video/mp4">
			<!-- Fallback image for browsers that don’t support video -->
			<!-- <img src="" alt="Background Image"> -->
		</video>			
  </div>
	<span class="dark-overlay"></span>
</section>