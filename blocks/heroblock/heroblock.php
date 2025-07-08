<?php
/**
 * Page Hero template.
 *
 * @param array $block The block settings and attributes.
 */

 	$bgtype				   = get_field('background_type') ?? '';
  $blockHeight     = get_field('block_height') ?? '';
  $blockTitle      = get_field("block_title") ?? '';
  $blockBGVideoSrc = get_field("background_video") ?? '';
	$exploreBtnBool  = get_field("explore_button") ?? false;
	$exploreIDURL		 = get_field("explore_id_url") ?? '#';
?>

<section class="page-hero col-sm-12 fullScreen_hero">
	<div class="video-overlay">
		<?php if ($bgtype == 'video' ) { ?>
			<video autoplay muted loop id="bg-video">
				<source src="<?php echo $blockBGVideoSrc ?>" type="video/mp4">
				<!-- Fallback image for browsers that don’t support video -->
				<!-- <img src="" alt="Background Image"> -->
			</video>			
		<?php } else if ($bgtype == 'image' ) { ?>
			<img src="<?php echo $blockBGVideoSrc ?>" alt="Background Image">
		<?php } ?>
  </div>

	<span class="dark-overlay"></span>
	<div class="hero-copy container">
		<span class="wrapper-left col-sm-12 col-md-6">
		  <?php echo $blockTitle ?>
		</span>
		<span class="wrapper-right col-sm-12 col-md-6">
			<?php if ($exploreBtnBool) : ?>
				<a href="<?php echo $exploreIDURL ?>" 
					 class="btn"
				>Explore 
				</a>
				<i class="fa-solid fa-angle-down"></i>
			<?php endif; ?>
		</span>
	</div>
</section>