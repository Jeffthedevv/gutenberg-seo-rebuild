<?php
/**
 * split block template.
 *
 * @param string $block The block settings and attributes.
 */

  $contentLeft = get_field('content_left');
  $contentRight = get_field('content_right');
  $block_id = !empty($block['id']) ? $block['id'] : 'block-' . uniqid();
?>
<section id="split-block-<?php echo $block_id ?>" class="split-content-block container col-sm-12">
  <div class="content-left col-sm-12 col-md-12 col-lg-6">
    <?php echo $contentLeft ?>
  </div>
  <div class="content-right col-sm-12 col-md-12 col-lg-6">
    <?php echo $contentRight ?>
  </div>
</section>