<?php
/**
 * Call to Action block template.
 *
 * @param string $block The block settings and attributes.
 */

 $bgImage         = get_field('background_image') ?? '';
 $blockBGImgSize  = get_field("background_image_size") ?? '';
 $blockTitle   = get_field('block_title') ?? '';
 $blockContent = get_field('block_content') ?? '';
 $linkBool     = get_field('contains_link') ?? false;
 $linkUrl      = get_field('link_url') ?? '#';
 $linkLabel    = get_field('link_label') ?? 'Learn More';
 $size    = get_field('block_size') === 'fullWidth'  ? 'cta-block--full' : 'cta-block--half container';
 $overlay = get_field('overlay') === 'addOverlay' ? 'cta-block--overlay' : ''; 
?>
<section 
  class="cta-block col-sm-12 <?php echo esc_attr("$size $overlay $blockBGImgSize"); ?>" 
  style="background-image: url('<?php echo esc_url($bgImage); ?>')"
>
  <?php if ($overlay === 'cta-block--overlay') : ?>
    <span class="overlay"></span>
  <?php endif; ?>

  <div class="cta-block__content">
    <?php echo $blockTitle ?>
    <?php echo $blockContent ?>

    <?php if ($linkBool && !empty($linkUrl)) : ?>
      <a 
        href="<?php echo esc_url($linkUrl); ?>" 
        class="btn btn-primary"
      ><?php echo esc_html($linkLabel); ?>
      </a> 
    <?php endif; ?>
  </div>
</section>