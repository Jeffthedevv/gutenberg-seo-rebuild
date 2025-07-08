<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

	echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
	echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';
	echo '<img src="'. $block['data']['preview_image3'] .'" style="width:100%; height:auto;">';

else : /* rendering in editor body */
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
<section class="content-area <?php echo join( ' ', $alignClass ); ?> <?php echo join( ' ', $shapeClass ); ?>">

    <div class="container">
    <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>
        <div class="row">
            <div class="col-xxl-11 mx-auto">
                <div class="row">
                    <div class="col-md-7">
                    <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                            <span class="d-blockk sub_heading  text-sm-start text-center"><?php echo $sub_heading ?> </span>
                        <?php endif; ?>

                        <?php if( $heading = get_field( 'heading' ) ): ?>
                            <h3 class="h1  text-sm-start text-center"><?php echo $heading ?> </h3>
                        <?php endif; ?>
                        <?php the_field( 'content' ); ?>
                    </div>
                </div>
                <?php if ( have_rows( 'boxes' ) ) :  $delay = 250; ?>
                    <div class="row gx-lg-5">
                    <?php while ( have_rows( 'boxes' ) ) : the_row(); ?>
                        <div class="col-sm-4" data-aos="fade-right" data-aos-delay="<?php echo $delay; ?>">
                            <div class="box style2 v2 text-sm-start text-center">
                                <div class="text d-none d-sm-block">
                                    <?php $icon = get_sub_field( 'icon' ); ?>
                                    <?php if ( $icon ) : ?>
                                         <div class="icon">
                                         <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                         </div>
                                    <?php endif; ?>
                                    <?php if( $titlebox = get_sub_field( 'title_box' ) ): ?>
                                    <h4 class="h6 title"><?php echo $titlebox ?> </h4>
                                    <?php endif; ?>
                                    <div class="inner">
                                    <?php the_sub_field( 'content_box' ); ?>
                                    </div>
                                </div>

                                <?php $image_box = get_sub_field( 'image_box' ); ?>
                                <?php if ( $image_box ) : ?>
                                <div class="image">
                                    <img src="<?php echo esc_url( $image_box['url'] ); ?>" alt="<?php echo esc_attr( $image_box['alt'] ); ?>" />
                                </div>
                                <div class="text d-sm-none">
                                    <?php $icon = get_sub_field( 'icon' ); ?>
                                    <?php if ( $icon ) : ?>
                                         <div class="icon">
                                         <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                         </div>
                                    <?php endif; ?>
                                    <?php if( $titlebox = get_sub_field( 'title_box' ) ): ?>
                                    <h4 class="h6 title"><?php echo $titlebox ?> </h4>
                                    <?php endif; ?>
                                    <div class="inner">
                                    <?php the_sub_field( 'content_box' ); ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $delay += 250; endwhile; ?>
                    </div>
                    
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php elseif( 'v3' == get_field( 'style' ) ): ?>
    <?php if( 'v2' == get_field( 'image_align' ) ): ?>
    <section class="content-area <?php echo join( ' ', $alignClass ); ?> <?php echo join( ' ', $shapeClass ); ?>">
    
        <div class="container">
        <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row justify-content-between align-items-lg-center">
                        <div class="col-lg-5 col-sm-6 order-lg-2 order-sm-2 order-1">
                        <?php $image = get_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                           <div class="content-img d-none d-sm-block">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                           </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-5 col-sm-6 order-lg-1 order-sm-1 order-2">
                            <div class="content-text text-sm-start text-center">
                                <div class="head alt">
                                    <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                        <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                                    <?php endif; ?>

                                    <?php if( $heading = get_field( 'heading' ) ): ?>
                                        <h3 class="h1"><?php echo $heading ?> </h3>
                                    <?php endif; ?>
                                </div>
                                <div class="d-sm-none">
                                <?php $image = get_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                           <div class="content-img inner_c_img">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                           </div>
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
        <section class="content-area <?php echo join( ' ', $alignClass ); ?> <?php echo join( ' ', $shapeClass ); ?>">
        
        <div class="container">
        <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 col-sm-6">
                        <?php $image = get_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                           <div class="content-img d-none d-sm-block">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                           </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="content-text text-sm-start text-center">
                                <div class="head alt">
                                    <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                        <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                                    <?php endif; ?>

                                    <?php if( $heading = get_field( 'heading' ) ): ?>
                                        <h3 class="h1"><?php echo $heading ?> </h3>
                                    <?php endif; ?>
                                </div>
                                <div class="d-sm-none">
                                <?php $image = get_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                           <div class="content-img inner_c_img">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                           </div>
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
<?php endif; ?>

<?php elseif( 'v6' == get_field( 'style' ) ): ?>

    <section class="content-area <?php echo join( ' ', $alignClass ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="content-text">
                        <?php if( $heading = get_field( 'heading' ) ): ?>
                            <h3 class="h2 post-heading"><?php echo $heading ?> </h3>
                        <?php endif; ?>
                        <?php the_field( 'content' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $image = get_field( 'image' ); ?>
        <?php if ( $image ) : ?>
            <div class="content-img full-width">
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
            </div>
        <?php endif; ?>
    </section>

<?php elseif( 'v7' == get_field( 'style' ) ): ?>

<section class="content-area <?php echo join( ' ', $alignClass ); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="content-text">
                    <?php if( $heading = get_field( 'heading' ) ): ?>
                        <h3 class="h2 post-heading"><?php echo $heading ?> </h3>
                    <?php endif; ?>
                    <?php the_field( 'content' ); ?>
                </div>
                <?php if ( have_rows( 'image_list' ) ) : ?>
                    <div class="imageList">
                        <div class="row">
                        <?php while ( have_rows( 'image_list' ) ) : the_row(); ?>
                            <?php $image_l = get_sub_field( 'image_l' ); ?>
                            <?php if ( $image_l ) : ?>
                                <div class="col-sm-6">
                                <div class="content-img-list">
                                    <img src="<?php echo esc_url( $image_l['url'] ); ?>" alt="<?php echo esc_attr( $image_l['alt'] ); ?>" />
                                </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    
</section>
<?php elseif( 'v5' == get_field( 'style' ) ): ?>
    <?php if( 'v2' == get_field( 'image_align' ) ): ?>
    <section class="content-area <?php echo join( ' ', $alignClass ); ?> <?php echo join( ' ', $shapeClass ); ?>">
    
        <div class="container">
        <?php $background_shape = get_field( 'background_shape' ); ?>
        <?php if ( $background_shape ) : ?>
            <img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
        <?php endif; ?>
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row justify-content-between ">
                        <div class="col-lg-5 col-sm-6 order-lg-2 order-sm-2 order-1">
                        <?php 
                        $image = get_field( 'image' );
                        $video_url = get_field( 'video_url' ); // New field
                        ?>
                        <?php if ( $image ) : ?>
                           <div class="content-img d-none d-sm-block">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                <?php if ( $video_url ) : ?>
                                    <a href="<?php echo esc_url( $video_url ); ?>" data-lity class="play_btn"><em class="fa fa-play"></em><span class="d-none">Play video</span></a>
                                <?php endif; ?>
                           </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-6 col-sm-6 order-lg-1 order-sm-1 order-2">
                            <div class="content-text  text-sm-start text-center">
                                <div class="head alt">
                                    <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                        <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                                    <?php endif; ?>

                                    <?php if( $heading = get_field( 'heading' ) ): ?>
                                        <h3 class="h2"><?php echo $heading ?> </h3>
                                    <?php endif; ?>
                                </div>
                                <?php if( $headingTwo = get_field( 'heading_2' ) ): ?>
                                    <h3 class="h5"><?php echo $headingTwo ?> </h3>
                                <?php endif; ?>
                                <div class="d-sm-none">
                                <?php if ( $image ) : ?>
                                   <div class="content-img inner_c_img">
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                        <?php if ( $video_url ) : ?>
                                            <a href="<?php echo esc_url( $video_url ); ?>" data-lity class="play_btn"><em class="fa fa-play"></em><span class="d-none">Play video</span></a>
                                        <?php endif; ?>
                                   </div>
                                <?php endif; ?>
                                </div>
                                <div>
                                    <?php the_field( 'content' ); ?>
                                </div>
                                <?php if ( have_rows( 'content_list' ) ) : ?>
                                    <ul class="content_list">
                                    <?php while ( have_rows( 'content_list' ) ) : the_row(); ?>
                                        <li><?php the_sub_field( 'list_title' ); ?></li>
                                    <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
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
        <section class="content-area <?php echo join( ' ', $alignClass ); ?> <?php echo join( ' ', $shapeClass ); ?>">
       
        <div class="container">
        <?php $background_shape = get_field( 'background_shape' ); ?>
        <?php if ( $background_shape ) : ?>
            <img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
        <?php endif; ?>
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 col-sm-6">
                        <?php 
                        $image = get_field( 'image' );
                        $video_url = get_field( 'video_url' ); // New field
                        ?>
                        <?php if ( $image ) : ?>
                           <div class="content-img d-none d-sm-block">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                <?php if ( $video_url ) : ?>
                                    <a href="<?php echo esc_url( $video_url ); ?>" data-lity class="play_btn"><em class="fa fa-play"></em><span class="d-none">Play video</span></a>
                                <?php endif; ?>
                           </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="content-text text-sm-end text-center">
                                <div class="head alt">
                                    <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                        <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                                    <?php endif; ?>

                                    <?php if( $heading = get_field( 'heading' ) ): ?>
                                        <h3 class="h2"><?php echo $heading ?> </h3>
                                    <?php endif; ?>
                                </div>
                                <?php if( $headingTwo = get_field( 'heading_2' ) ): ?>
                                    <h3 class="h5"><?php echo $headingTwo ?> </h3>
                                <?php endif; ?>
                                <div class="d-sm-none">
                                <?php if ( $image ) : ?>
                                   <div class="content-img inner_c_img">
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                        <?php if ( $video_url ) : ?>
                                            <a href="<?php echo esc_url( $video_url ); ?>" data-lity class="play_btn"><em class="fa fa-play"></em><span class="d-none">Play video</span></a>
                                        <?php endif; ?>
                                   </div>
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
<?php endif; ?>

<?php elseif( 'v4' == get_field( 'style' ) ): ?>
    <?php if( 'v2' == get_field( 'image_align' ) ): ?>
    <section class="content-area <?php echo join( ' ', $alignClass ); ?> <?php echo join( ' ', $shapeClass ); ?>">
     
    <div class="container">
    <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>   
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row justify-content-between align-items-lg-center">
                        <div class="col-lg-5 col-sm-6 order-lg-2 order-sm-2 order-2">
                        <?php if ( have_rows( 'image_slider' ) ) : ?>
                            <div class="image-slider">
                            <?php while ( have_rows( 'image_slider' ) ) : the_row(); ?>
                                <div class="slide">
                                <?php $slide_image = get_sub_field( 'slide_image' ); ?>
                                <?php if ( $slide_image ) : ?>
                                    <div class="slide_img">
                                    <img src="<?php echo esc_url( $slide_image['url'] ); ?>" alt="<?php echo esc_attr( $slide_image['alt'] ); ?>" />
                                    </div>
                                <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                            </div>
                            <div class="d-none d-md-block">
                            <div class="img_custom_arrows ">
                                <div class="img_prev arrows">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_prev.webp" alt="icon" >
                                </div>
                                <div class="slide-m-dots"></div>
                                <div class="img_next arrows">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_next.webp" alt="icon" >
                                </div>
                            </div>
                            </div>
                            <div class="d-md-none">
                            <ul class="custom_arrows imageArrows d-flex align-items-center justify-content-between">
                                <li class="img_prev prev_btn">
                                    <em class="fa-solid fa-left-long"></em>
                                </li>
                                <li class="slides3-numbers" style="display: block;">
                                    <span class="active">01</span> <span class="div">/</span> <span class="total3"></span>
                                </li>
                                <li class="img_next next_btn">
                                    <em class="fa-solid fa-right-long"></em>
                                </li>
                            </ul>
                            </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-5 col-sm-6 order-lg-1 order-sm-1 order-1">
                            <div class="content-text pe-lg-5">
                                <div class="head alt">
                                    <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                        <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                                    <?php endif; ?>

                                    <?php if( $heading = get_field( 'heading' ) ): ?>
                                        <h3 class="h1"><?php echo $heading ?> </h3>
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
        <section class="content-area <?php echo join( ' ', $alignClass ); ?> <?php echo join( ' ', $shapeClass ); ?>">
        
        <div class="container">
        <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 col-sm-6">
                        <?php if ( have_rows( 'image_slider' ) ) : ?>
                            <div class="image-slider">
                            <?php while ( have_rows( 'image_slider' ) ) : the_row(); ?>
                                <div class="slide">
                                <?php $slide_image = get_sub_field( 'slide_image' ); ?>
                                <?php if ( $slide_image ) : ?>
                                    <div class="slide_img">
                                    <img src="<?php echo esc_url( $slide_image['url'] ); ?>" alt="<?php echo esc_attr( $slide_image['alt'] ); ?>" />
                                    </div>
                                <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <div class="img_custom_arrows">
                                <div class="img_prev arrows">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_prev.webp" alt="icon" >
                                </div>
                                <div class="slide-m-dots"></div>
								<div class="img_next arrows">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_next.webp" alt="icon" >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="content-text ps-lg-5">
                                <div class="head alt">
                                    <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                        <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                                    <?php endif; ?>

                                    <?php if( $heading = get_field( 'heading' ) ): ?>
                                        <h3 class="h1"><?php echo $heading ?> </h3>
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
<?php endif; ?>

<?php else: ?>
    <?php if( 'v2' == get_field( 'image_align' ) ): ?>
    <section class="content-area <?php echo join( ' ', $alignClass ); ?> <?php echo join( ' ', $shapeClass ); ?>">
     
    <div class="container">
    <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>   
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row">
                        <div class="col-lg-8 col-sm-6 order-lg-2 order-1"  data-aos="fade-left">
                        <?php $image = get_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                           <div class="content-img mixed-content-img alt d-none d-sm-block">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                           </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-4 col-sm-6 order-lg-1 order-2"  data-aos="fade-right">
                            <div class="content-text  text-center text-sm-start mixed-content alt">
                               <div class="head">
                                <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                    <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                                <?php endif; ?>

                                <?php if( $heading = get_field( 'heading' ) ): ?>
                                    <h2 class="h1"><?php echo $heading ?> </h2>
                                <?php endif; ?>
                               </div>
                               <?php $image = get_field( 'image' ); ?>
                                <?php if ( $image ) : ?>
                                <div class="content-img mixed-content-img alt d-sm-none">
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                </div>
                                <?php endif; ?>
                                <div class="inner">
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
        </div>
    </section>
<?php else: ?>
    <section class="content-area <?php echo join( ' ', $alignClass ); ?> <?php echo join( ' ', $shapeClass ); ?>">
    
    <div class="container">
    <?php $background_shape = get_field( 'background_shape' ); ?>
	<?php if ( $background_shape ) : ?>
		<img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
	<?php endif; ?>    
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row">
                        <div class="col-lg-8 col-sm-6"  data-aos="fade-right">
                        <?php $image = get_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                           <div class="content-img mixed-content-img d-none d-sm-block">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                           </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-4 col-sm-6"  data-aos="fade-left">
                            <div class="content-text mixed-content text-center text-sm-end">
                               <div class="head">
                               <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                                    <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                                <?php endif; ?>

                                <?php if( $heading = get_field( 'heading' ) ): ?>
                                    <h2 class="h1"><?php echo $heading ?> </h2>
                                <?php endif; ?>
                               </div>
                               <?php $image = get_field( 'image' ); ?>
                                <?php if ( $image ) : ?>
                                <div class="content-img mixed-content-img d-sm-none">
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                </div>
                                <?php endif; ?>
                                <div class="inner">
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
        </div>
    </section>
<?php endif; ?>
<?php endif; ?>

<?php
endif;