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



<?php 
    $alignClass = array();
    if( 'v2' == get_field( 'spacing' ) ):
        $alignClass[] = 'py-0';
    elseif ( 'v3' == get_field( 'spacing' ) ):
        $alignClass[] = ' pb-0';
    elseif ( 'v4' == get_field( 'spacing' ) ):
        $alignClass[] = ' pt-0';
    elseif ( 'v1' == get_field( 'spacing' ) ):
        $alignClass[] = '';
    endif;

?>

    <section class="content-area <?php echo join( ' ', $alignClass ); ?> <?php echo join( ' ', $shapeClass ); ?>">
    
        <div class="container">
        <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <?php if( $heading = get_field( 'heading' ) ): ?>
                        <div class="text-md-start text-center section_heading" data-aos="fade-up">
                            <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                            <?php endif; ?>

                            <?php if( $heading = get_field( 'heading' ) ): ?>
                                <h1 class="h1"><?php echo $heading ?> </h1>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <div class="text-md-start text-center " data-aos="fade-up">
                            <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                            <?php endif; ?>

                            <?php if( $heading = get_field( 'heading' ) ): ?>
                                <h1 class="h1"><?php echo $heading ?> </h1>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ( have_rows( 'icon_teaser' ) ) :  $delay = 100; ?>
                        <div class="row justify-content-center">
                        <?php while ( have_rows( 'icon_teaser' ) ) : the_row(); ?>
                            <div class="col-sm-4"  data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>"> 
                                <?php $icon = get_sub_field( 'icon' ); ?>
                                <?php if ( $icon ) : ?>
                                    <div class="icon-teaser text-center">
                                        <?php if ( $icon ) : ?>
                                            <div class="icon">
                                            <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" class="mx-auto" />
                                            </div>
                                        <?php endif; ?>
                                        <div class="text">
                                            <span class="d-block title"><?php the_sub_field( 'title' ); ?></span>
                                            <?php the_sub_field( 'description' ); ?>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="icon-teaser m-alt text-center">
                                        <div class="text">
                                            <span class="d-block title"><?php the_sub_field( 'title' ); ?></span>
                                            <?php the_sub_field( 'description' ); ?>
                                        </div>
                                    </div>
                                <?php endif ?>
                                
                            </div>
                        <?php $delay += 100; endwhile; ?>
                        </div>
                        
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>

    <?php
endif;