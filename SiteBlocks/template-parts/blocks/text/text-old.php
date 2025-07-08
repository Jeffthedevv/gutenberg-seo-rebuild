<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

	echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
	echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';

else : /* rendering in editor body */
    ?>
<?php 
    $shapeClass = array();
    if( $shape = get_field( 'background_shape' ) ):
        $shapeClass[] = 'bg_area';
    endif;
?>

<?php 
    $alignShape = array();
    if( 'v2' == get_field( 'shape_alignment' ) ):
        $alignShape[] = 'bg2';
    elseif ( 'v1' == get_field( 'shape_alignment' ) ):
        $alignShape[] = 'bg1';
    endif;
?>


<?php if( 'v2' == get_field( 'style' ) ): ?>
    <section class="content-area <?php echo join( ' ', $shapeClass ); ?>">
    
        <div class="container">
        <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="content-text text-sm-start text-center">
                                <div class="mb-3">
                                    <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                        <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                                    <?php endif; ?>

                                    <?php if( $heading = get_field( 'heading' ) ): ?>
                                        <h3 class="text_18"><?php echo $heading ?> </h3>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <?php the_field( 'content' ); ?>
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
    <section class="content-area <?php echo join( ' ', $shapeClass ); ?>">
    
        <div class="container">
        <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="content-text text-sm-start text-center">
                            <div class="head alt">
                                    <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                        <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                                    <?php endif; ?>

                                    <?php if( $heading = get_field( 'heading' ) ): ?>
                                        <h3 class="h2"><?php echo $heading ?> </h3>
                                    <?php endif; ?>
                                </div>
                                <?php if( $heading2 = get_field( 'heading_2' ) ): ?>
                                    <h3 class="text_18"><?php echo $heading2 ?> </h3>
                                <?php endif; ?>
                                <div>
                                    <?php the_field( 'content' ); ?>
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
    
    <?php
endif;