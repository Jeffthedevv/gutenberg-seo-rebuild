<?php
/**
 * Page Hero with Form template.
 *
 * @param array $block The block settings and attributes.
 */

 	$bgtype				   = get_field('background_type') ?? '';
  $blockHeight     = get_field('block_height') ?? '';
  $blockTitle      = get_field("block_title") ?? '';
  $blockBGVideoSrc = get_field("background_video") ?? '';
	$exploreBtnBool  = get_field("explore_button") ?? false;
	$exploreIDURL		 = get_field("explore_id_url") ?? '#';
  $formID          = get_field("form_shortcode") ?? '';
?>

<section class="page-hero page-hero-w-form col-sm-12 fullScreen_hero">
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
    
  <div class="form-wrapper">
    <div class="button-wrapper">
      <button 
        class="">RESERVE NOW
      </button>
    </div>
    <div class="form-wrapper-inner">
    <?php if ($formID != ''): ?>
      <?= do_shortcode($formID); ?>
    <?php endif; ?>
    </div>
  </div>

	<div class="hero-copy container">
		<span class="wrapper-left col-sm-12 col-md-6">
		  <h1><?php echo $blockTitle ?></h1>
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

<script type="text/javascript">
  // Add your JavaScript code here
  document.addEventListener('DOMContentLoaded', function() {
    const reserveButton = document.querySelector('.button-wrapper button');
    const formWrapper = document.querySelector('.form-wrapper-inner');
    const formButton = document.querySelector('.form-wrapper .button-wrapper');

    reserveButton.addEventListener('click', function() {
      formWrapper.classList.toggle('active');
      formButton.classList.toggle('d-none');
    });
  });

</script>