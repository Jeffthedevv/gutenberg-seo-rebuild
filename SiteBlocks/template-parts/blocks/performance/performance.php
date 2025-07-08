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
<section class="content-area performace-area py-0 <?php echo join( ' ', $shapeClass ); ?>">
    <div class="container">
    <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>
        <div class="row">
            <div class="col-xxl-11 mx-auto">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                    <?php $image = get_field( 'image' ); ?>
                    <?php if ( $image ) : ?>
                        <div class="content-img d-none d-sm-block pe-lg-5">
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-7 col-sm-6">
                        <div class="content-text  ps-lg-5">
                            <?php if( $heading = get_field( 'heading' ) ): ?>
                                <h3 class="h1 text-sm-end text-center"><?php echo $heading ?> </h3>
                            <?php endif; ?>
                            <?php $image = get_field( 'image' ); ?>
                    <?php if ( $image ) : ?>
                        <div class="content-img d-sm-none inner_c_img pe-lg-5">
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        </div>
                    <?php endif; ?>
                            <?php if ( have_rows( 'performance' ) ) :  $delay = 100; ?>
                                
                                <ul class="progress_inner">
                                <?php while ( have_rows( 'performance' ) ) : the_row(); ?>
                                    <li  data-aos="fade" data-aos-duration="1200" data-aos-delay="<?php echo $delay; ?>">
                                    
                                        <?php if( $title = get_sub_field( 'title' ) ): ?>
                                            <div class="row">
                                                <div class="col-9">
                                                    <span class="d-block title"><?php echo $title; ?></span>
                                                </div>
                                                <div class="col-3">
                                                    <span class="d-block text-end"><?php the_sub_field( 'percent' ); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="c_progress">
                                            <div class="bar" style="width:<?php echo str_replace(" ","",get_sub_field( 'percent' )); ?>"></div>
                                        </div>
                                        
                                        
                                    </li>
                                    
                                    <?php $delay += 100; endwhile; ?>
                                </ul>
                                
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

    <?php
endif;