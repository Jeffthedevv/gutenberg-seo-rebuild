<?php if ( get_field( 'disable_breadcrumb', 'option' ) != 1 ) : ?>
  <?php if( 'v2' == get_field( 'breadcrumb_style' ) ): ?>
    <div class="breadcrumb-area alt" >
    <div class="container wide">
    <?php 
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumb_navigation"><ul>','</ul></div>' );
		} 
		?>
    </div>
    
    </div>
  <?php else: ?>
    <div class="breadcrumb-area" >
    <div class="container wide">
    <?php 
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumb_navigation"><ul>','</ul></div>' );
		} 
		?>
    </div>
    
    </div>
  <?php endif; ?>
    
<?php endif;