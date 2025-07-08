<?php
/**
 * Icon Block block template.
 *
 * @param string $block The block settings and attributes.
 */
  $blockTitle   = get_field('block_title') ?? '';
  $blockSubTitle = get_field('block_subtitle') ?? '';
?>

<section class="paradigm-block container col-sm-12 gray-bg rounded-corners p-5">
  <h3><?php echo $blockTitle ?></h3>
  <h4><?php echo $blockSubTitle ?></h4>
  <div class="icon-cards-wrapper col-sm-12" style="justify-content: space-evenly;">
    <?php if(have_rows('icon')): ?>
      <?php while(have_rows('icon')): the_row(); ?>
        
          <div class="icon-card col-sm-12 col-md-2">
            <span class="icon-wrapper">
              <img 
                src="<?php echo the_sub_field('icon_image') ?>"
                alt="Icon"
              />
            </span>
            <span class="copy-wrapper">
              <p><?php echo the_sub_field('icon_copy') ?></p>
            </span>
          </div>
        
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>