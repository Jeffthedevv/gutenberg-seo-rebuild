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
    <div class="container cta">
        <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>
        </div>
        <div class="container">
        <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                <?php if ( have_rows( 'cta_box' ) ) : ?>
                    <div class="row justify-content-around">
                    <?php while ( have_rows( 'cta_box' ) ) : the_row(); ?>
                        <div class="col-lg-4 col-sm-6">
                            <a class="cta-box-repeat text-center text_white" href="<?php the_sub_field( 'url' ); ?>">
                                <span class="d-block title "><?php the_sub_field( 'title' ); ?></span>
                                <?php the_sub_field( 'description' ); ?>
                            </a>
                        </div>
                    <?php endwhile; ?>
                    </div>
                    
                <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>
<?php elseif( 'v5' == get_field( 'style' ) ): ?>
<section class="content-area <?php echo join( ' ', $shapeClass ); ?>">
        <div class="cta-inner">
        <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<div class="container cta">
		    <img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
		</div>
	<?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row justify-content-between">
                            <div class="col-md-8"  data-aos="fade-right" data-aos-delay="300">
                                <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                    <span class="d-blockk sub_heading text-md-start text-center"><?php echo $sub_heading ?> </span>
                                <?php endif; ?>
                                <?php if( $heading = get_field( 'heading' ) ): ?>
                                    <h3 class="h1 text-md-start heading text-center pe-lg-5"><?php echo $heading ?> </h3>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $image = get_field( 'image' ); ?>
            <?php if ( $image ) : ?>
                <div class="cta-img v5">
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                </div>
            <?php endif; ?>
        </div>
        
        <?php $content = get_field( 'content' ); ?>
        <?php if ( $content ) : ?>
        <div class="container"  data-aos="fade-up">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="row justify-content-end">
                        <div class="col-lg-7 col-sm-12 col-md-9">
                            <div class="content-text cta-text">
                                <div class="content">
                                     <?php echo $content; ?>
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
        <?php endif; ?>
        
    </section>

<?php elseif( 'v3' == get_field( 'style' ) ): ?>
    <?php $bg = ($bg_image = get_field('image_bg') ) ? 'style="background: url('.$bg_image.') no-repeat scroll center center/cover"' : '' ?>
    <section class="content-area cta-area" <?php echo $bg ?>>
        <div class="cta-inner-area">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-11 mx-auto">
                    <div class="row">
                    <div class="col-md-6">
                            <div class="content-text">
                            <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                <span class="d-blockk sub_heading text-md-start text-center"><?php echo $sub_heading ?> </span>
                            <?php endif; ?>
                            <?php if( $heading = get_field( 'heading' ) ): ?>
                                <h3 class="h1 text-md-start heading text-center "><?php echo $heading ?> </h3>
                            <?php endif; ?>
                            <div class="d-lg-none inner_cta_img" <?php echo $bg ?>></div>
                            <div class="content  text-md-start text-center">
                                    <?php the_field( 'content' ); ?>
                                    <?php $button = get_field( 'button' ); ?>
                                    <?php if ( $button ) : ?>
                                        <div class="d-none d-md-block">
                                        <a class="cta-btn btn_white" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                                        </div>
                                        <div class="d-md-none">
                                        <a class="cta-btn btn_default" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                                        </div>
                                    <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php elseif( 'v4' == get_field( 'style' ) ): ?>
    <?php $bg = ($bg_image = get_field('image_bg') ) ? 'style="background: url('.$bg_image.') no-repeat scroll center center/cover"' : '' ?>
    <section class="content-area " <?php echo $bg ?>>
        <div class="cta-inner-area dark">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-11 mx-auto">
                    <div class="row">
                    <div class="col-md-8">
                            <div class="content-text">
                            <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                <span class="d-blockk sub_heading text-md-start text-center"><?php echo $sub_heading ?> </span>
                            <?php endif; ?>
                            <?php if( $heading = get_field( 'heading' ) ): ?>
                                <h3 class="h1 text-md-start heading text-center "><?php echo $heading ?> </h3>
                            <?php endif; ?>
                            <div class="content text-md-start text-center">
                                    <?php the_field( 'content' ); ?>
                                    <?php $button = get_field( 'button' ); ?>
                            <?php if ( $button ) : ?>
                                <a class="cta-btn btn_white" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                            <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php else: ?>
    <section class="content-area <?php echo join( ' ', $shapeClass ); ?>">
        <div class="cta-inner">
        <div class="container cta">
        <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>

        </div>
            <div class="container">
            
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row justify-content-between">
                            <div class="col-md-4"  data-aos="fade-right" data-aos-delay="300">
                                <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                    <span class="d-blockk sub_heading text-md-start text-center"><?php echo $sub_heading ?> </span>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                                <?php if( $heading = get_field( 'heading' ) ): ?>
                                    <h3 class="h1 text-md-start heading text-center pe-lg-5"><?php echo $heading ?> </h3>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $image = get_field( 'image' ); ?>
            <?php if ( $image ) : ?>
                <div class="cta-img">
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                </div>
            <?php endif; ?>
        </div>
        <div class="container"  data-aos="fade-up">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="row justify-content-end">
                        <div class="col-lg-7 col-sm-12 col-md-9">
                            <div class="content-text cta-text">
                                <div class="content">
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