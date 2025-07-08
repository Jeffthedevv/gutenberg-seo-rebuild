<section class="footer-main col-sm-12">
  <div class="container">
    <div class="col-lg-12 footer-inner-wrapper">
      <div class="col-0-wrapper logo-wrapper col-sm-12 col-md-3">
        <div class="col-sm-12 top-row">
          <img 
            src="<?php echo get_template_directory_uri(); ?>/img/logos/SITENAME-logo-light.png" 
            alt="SITENAME Company Logo" 
            class="d-inline-block align-text-top footer-logo img-fluid"
          >
        </div>
        <div class="col-sm-12 bottom-row">
          <?php include __DIR__ . '/footer-socials.php'; ?>
        </div>
      </div>
      <div class="col-1-wrapper col-sm-6 col-md-3">
        <h5>Company</h5>
        <?php
          wp_nav_menu( array(
            'theme_location' => 'footer_menu_0', 
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
            'depth' => 3,
            'walker' => new bootstrap_5_wp_nav_menu_walker(),
            ));
        ?>
      </div>
      <div class="col-2-wrapper col-sm-6 col-md-3">
        <h5>Resources</h5>
        <?php
          wp_nav_menu( array(
            'theme_location' => 'footer_menu_1', 
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
            'depth' => 3,
            'walker' => new bootstrap_5_wp_nav_menu_walker(),
            ));
        ?>
      </div>
      <div class="col-3-wrapper col-sm-12 col-md-3">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'footer_menu_2', 
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
            'depth' => 4,
            'walker' => new bootstrap_5_wp_nav_menu_walker(),
          ));
        ?>
      </div>
    </div>

    <div class="col-lg-12 footer-bottom-wrapper">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'footer_menu_3', 
          'container' => false,
          'menu_class' => '',
          'fallback_cb' => '__return_false',
          'items_wrap' => '<ul id="%1$s" class="navbar-nav  %2$s">%3$s</ul>',
          'depth' => 3,
          'walker' => new bootstrap_5_wp_nav_menu_walker(),
        ));
      ?>
     <h5>© <?php echo date("Y"); ?> SITENAME</h5>
    </div>
</section>
