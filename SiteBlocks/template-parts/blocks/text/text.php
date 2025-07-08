<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

    echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
    echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';

else : /* rendering in editor body */
    
    // Retrieve color fields
    $background_color = get_field('background_color');
    $text_color = get_field('text_color');

    // Retrieve padding fields
    $padding_top = get_field('padding_top');
    $padding_bottom = get_field('padding_bottom');
    $padding_left = get_field('padding_left');
    $padding_right = get_field('padding_right');

    // Prepare inline style for the section
    $section_style = '';
    if ($background_color) {
        $section_style .= "background-color: " . esc_attr($background_color) . ";";
    }
    
    // Add padding to style if set
    if ($padding_top) $section_style .= "padding-top: " . esc_attr($padding_top) . "px;";
    if ($padding_bottom) $section_style .= "padding-bottom: " . esc_attr($padding_bottom) . "px;";
    if ($padding_left) $section_style .= "padding-left: " . esc_attr($padding_left) . "px;";
    if ($padding_right) $section_style .= "padding-right: " . esc_attr($padding_right) . "px;";

    // Prepare inline style for text color
    $text_style = '';
    if ($text_color) {
        $text_style = "color: " . esc_attr($text_color) . ";";
    }

    $shapeClass = array();
    if( $shape = get_field( 'background_shape' ) ):
        $shapeClass[] = 'bg_area';
    endif;

    $alignShape = array();
    if( 'v2' == get_field( 'shape_alignment' ) ):
        $alignShape[] = 'bg2';
    elseif ( 'v1' == get_field( 'shape_alignment' ) ):
        $alignShape[] = 'bg1';
    endif;

    if( 'v2' == get_field( 'style' ) ): ?>
        <section class="content-area <?php echo esc_attr(join( ' ', $shapeClass )); ?>" <?php echo $section_style ? "style=\"" . esc_attr($section_style) . "\"" : ''; ?>>
            <div class="container">
            <?php $background_shape = get_field( 'background_shape' ); ?>
            <?php if ( $background_shape ) : ?>
                <img class="<?php echo esc_attr(join( ' ', $alignShape )); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
            <?php endif; ?>
                <div class="row">
                    <div class="col-xxl-11 mx-auto">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="content-text text-sm-start text-center" <?php echo $text_style ? "style=\"" . esc_attr($text_style) . "\"" : ''; ?>>
                                    <div class="mb-3">
                                        <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                            <span class="d-block sub_heading"><?php echo esc_html($sub_heading); ?> </span>
                                        <?php endif; ?>

                                        <?php if( $heading = get_field( 'heading' ) ): ?>
                                            <h3 class="text_18"><?php echo esc_html($heading); ?> </h3>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <?php echo wp_kses_post(get_field( 'content' )); ?>
                                    </div>
                                    <?php $button = get_field( 'button' ); ?>
                                    <?php if ( $button ) : ?>
                                        <a class="cta-btn btn_default" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="content-area <?php echo esc_attr(join( ' ', $shapeClass )); ?>" <?php echo $section_style ? "style=\"" . esc_attr($section_style) . "\"" : ''; ?>>
            <div class="container">
            <?php $background_shape = get_field( 'background_shape' ); ?>
            <?php if ( $background_shape ) : ?>
                <img class="<?php echo esc_attr(join( ' ', $alignShape )); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
            <?php endif; ?>
                <div class="row">
                    <div class="col-xxl-11 mx-auto">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="content-text text-sm-start text-center" <?php echo $text_style ? "style=\"" . esc_attr($text_style) . "\"" : ''; ?>>
                                <div class="head alt">
                                        <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                            <span class="d-block sub_heading"><?php echo esc_html($sub_heading); ?> </span>
                                        <?php endif; ?>

                                        <?php if( $heading = get_field( 'heading' ) ): ?>
                                            <h3 class="h2"><?php echo esc_html($heading); ?> </h3>
                                        <?php endif; ?>
                                    </div>
                                    <?php if( $heading2 = get_field( 'heading_2' ) ): ?>
                                        <h3 class="text_18"><?php echo esc_html($heading2); ?> </h3>
                                    <?php endif; ?>
                                    <div>
                                        <?php echo wp_kses_post(get_field( 'content' )); ?>
                                    </div>
                                    <?php $button = get_field( 'button' ); ?>
                                    <?php if ( $button ) : ?>
                                        <a class="cta-btn btn_default" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    
<?php endif; ?>