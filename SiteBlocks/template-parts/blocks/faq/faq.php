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

<section class="content-area <?php echo join( ' ', $shapeClass ); ?>">
    <div class="container">
        <?php $background_shape = get_field( 'background_shape' ); ?>
        <?php if ( $background_shape ) : ?>
            <img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
        <?php endif; ?>
        <div class="row">
            <div class="col-xxl-11 mx-auto">
            <div class="text-md-start text-center section_heading" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-6">
                    <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                        <span class="d-block sub_heading"><?php echo $sub_heading ?> </span>
                    <?php endif; ?>

                    <?php if( $heading = get_field( 'heading' ) ): ?>
                        <h2 class="h1"><?php echo $heading ?> </h2>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php if ( have_rows( 'faqs' ) ) : $counter = 1;  ?>
                <div class="faq_accordion">
                    <?php while ( have_rows( 'faqs' ) ) : the_row(); ?>
                    <div class="acc_item <?php if($counter == 1) echo ' active';?>">
                        <span class="plus-minus"></span>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="acc_left">
                                    <span class="d-block title"><?php the_sub_field('title'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="acc_right">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <?php $counter += 1; endwhile; ?>
                </div>
                
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>



    <?php
endif;