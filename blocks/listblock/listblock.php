<?php
/**
 * List block template.
 *
 * @param string $block The block settings and attributes.
 */

 $bgImage         = get_field('background_image') ?? '';
 $blockTitle   = get_field('block_title') ?? '';

 $size    = get_field('block_size') === 'fullWidth'  ? 'list-block--full' : 'list-block--half container';
 $overlay = get_field('overlay') === 'addOverlay' ? 'list-block--overlay' : ''; 
?>
<section 
  class="list-block col-sm-12 <?php echo esc_attr("$size $overlay $blockBGImgSize"); ?>" 
  style="background-image: url('<?php echo esc_url($bgImage); ?>')"
>
  <span class="overlay"></span>

  <div class="list-block__content">
    <h3><?php echo esc_html($blockTitle); ?></h3>
    <ul>
      <?php if(have_rows('list_items')): ?>
        <?php while(have_rows('list_items')): the_row(); ?>
          <li><a href="<?php echo the_sub_field('list_item_link') ?>"><?php echo the_sub_field('list_item_copy'); ?></a></li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
</section>