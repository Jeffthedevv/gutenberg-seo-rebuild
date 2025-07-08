<?php
/**
 * Page Hero for Shield template.
 *
 * @param array $block The block settings and attributes.
 */
  $blockHeight     = get_field('block_height') ?? '';
  $blockTitle      = get_field("block_title") ?? '';
  $blockBGVideoSrc = get_field("background_video") ?? '';
  $exploreBtnBool  = get_field("explore_button") ?? false;
  $exploreIDURL		 = get_field("explore_id_url") ?? '#';
?>
<section class="page-hero-shield col-sm-12 <?php echo $blockHeight; ?>">
  <div class="video-overlay">
		<img src="<?php echo $blockBGVideoSrc ?>" alt="Background Image">
  </div>

	<span class="dark-overlay"></span>
	<div class="hero-copy container">
      <div class="top-split">
        <h1><span class="small-f">Introducing</span><br>SITENAME SHIELD</h1>
      </div>
      <div class="middle-split">
        <a href="#" class="interaction-btn">Explore</a>
      </div>
      <div class="bottom-split">
        <a href="<?php echo $exploreIDURL ?>" 
					 class="btn"
				>Explore 
				</a>
				<i class="fa-solid fa-angle-down"></i>
      </div>
	</div>

</section>