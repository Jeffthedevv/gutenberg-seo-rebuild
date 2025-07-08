<?php
/**
 * split block template.
 *
 * @param string $block The block settings and attributes.
 */

  $block_title = get_field('block_title');
  $block_subtitle = get_field('block_subtitle');
  $block_id = !empty($block['id']) ? $block['id'] : 'block-' . uniqid();
?>
<section id="form-block-<?php echo $block_id ?>" class="form-responsive-block container col-sm-12">
  <div class="inner-copy col-sm-12">
    <h4><?php echo $block_title; ?></h4>
    <p><?php echo $block_subtitle; ?></p>
  </div>
  <div class="inner-form-wrapper col-sm-12">
    <form id="hubspotForm" class="form">

      <div class="row">
        <div class="col-sm-6">
          <input type="text" name="firstname" placeholder="First Name *" required>
        </div>
        <div class="col-sm-6">
          <input type="text" name="lastname" placeholder="Last Name *" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <input type="text" name="company" placeholder="Company *" required>
        </div>
        <div class="col-sm-6">
          <input type="text" name="position" placeholder="Position | Job Title *" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <input type="tel" name="phone" placeholder="Phone *" required>
        </div>
        <div class="col-sm-6">
          <input type="email" name="email" placeholder="Email *" required>
        </div>
      </div>
     
      <button
        class="form-submit-btn" 
        type="submit">Submit</button>
    </form>
  </div>
</section>