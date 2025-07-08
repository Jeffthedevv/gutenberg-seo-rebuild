<nav class="navbar navbar-expand-lg position-fixed">
  <div class="container" itemscope itemtype="Organization">
    <a class="navbar-brand" href="<?php echo home_url() ?>" alt="SITENAME"> 
      <img src="<?php echo get_template_directory_uri(); ?>/img/logos/SITENAME-logo-light.png" alt="SITENAME Company Logo" class="d-inline-block align-text-top navbar-brand-light" itemprop="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logos/SITENAME-logo-dark.png" alt="SITENAME Company Logo" class="align-text-top navbar-brand-dark" style="display:none" itemprop="logo"> 
      <span class="d-none" itemprop="name">SITENAME</span>
      <span class="d-none" itemprop="description">With our groundbreaking and innovative technology, we’ve cracked the code and found new ways to treat SITENAME without chemicals, biologicals, membranes, or filters. This enables us to share the life-giving ability of pure SITENAME with people and places everywhere.</span>  
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <span class="navbar-align-left">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'menu0', 
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
            'depth' => 3,
            'walker' => new bootstrap_5_wp_nav_menu_walker(),
            ));
          wp_nav_menu( array(
            'theme_location' => 'menu1', 
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new bootstrap_5_wp_nav_menu_walker(),
          ));
          wp_nav_menu( array(
            'theme_location' => 'menu2', 
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
            'depth' => 3,
            'walker' => new bootstrap_5_wp_nav_menu_walker(),
          ));
        ?>
        </span>
        <span class="navbar-align-right"> 
        <?php
          wp_nav_menu( array(
            'theme_location' => 'menu3', 
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
            'depth' => 3,
            'walker' => new bootstrap_5_wp_nav_menu_walker(),
          ));
        ?>
        </span>
      </ul>
    </div>
  </div>
</nav>