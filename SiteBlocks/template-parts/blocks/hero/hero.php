<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

	echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
	echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';

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


<?php if( 'v2' == get_field( 'style' ) ): ?>
    <section class="hero-area  <?php echo join( ' ', $alignClass ); ?>">
    <div class="row">
                <div class="hero-slider">
                    <?php if ( have_rows( 'hero_slider' ) ) : ?>
                        <?php while ( have_rows( 'hero_slider' ) ) : the_row(); ?>
                        <?php if( $heading = get_sub_field( 'heading' ) ): ?>
                            <div class="slide pt_160">
                                <div class="h_top">
                                    <div class="container">
                                    <div class="row">
                                        <div class="col-xxl-11 mx-auto">
                                            <div class="row ">
                                                <div class="col-lg-5 col-sm-6">
                                                    <?php if( $heading = get_sub_field( 'heading' ) ): ?>
                                                        <div class="hero_heading text-sm-start text-center">
                                                        <span class="h1 d-block animated" data-animation-in="fadeInLeft" data-delay-in="0.2"><?php echo $heading ?> </span>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="hero-desc text-sm-start text-center animated"  data-animation-in="fadeInLeft" data-delay-in="0.4">
                                                        <?php the_sub_field( 'description' ); ?>
                                                        <?php if( $heading_two = get_sub_field( 'heading_two' ) ): ?>
                                                        <span class="h6 d-block hero_heading2"><?php echo $heading_two; ?></span>
                                                        <?php endif; ?>
                                                        <div class="group_btn">
                                                        <?php $button_1 = get_sub_field( 'button_1' ); ?>
                                                        <?php if ( $button_1 ) : ?>
                                                            <a class="cta-btn btn_default" href="<?php echo esc_url( $button_1['url'] ); ?>" target="<?php echo esc_attr( $button_1['target'] ); ?>"><?php echo esc_html( $button_1['title'] ); ?></a>
                                                        <?php endif; ?>
                                                        <?php $button_2 = get_sub_field( 'button_2' ); ?>
                                                        <?php if ( $button_2 ) : ?>
                                                            <a class="cta-btn btn_default" href="<?php echo esc_url( $button_2['url'] ); ?>" target="<?php echo esc_attr( $button_2['target'] ); ?>"><?php echo esc_html( $button_2['title'] ); ?></a>
                                                        <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) : ?>
                                <div class="hero-img">
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                        <div class="container">
                                        <?php if( $video_url = get_sub_field( 'video_url' ) ): ?>
                                            <div class="hero-video animated"  data-animation-in="fadeInLeft" data-delay-in="0.6">
                                            <?php if( $video_title = get_sub_field( 'video_title' ) ): ?>
                                                <span class="title d-block"><?php echo $video_title ?> </span>
                                            <?php endif; ?>
                                            <div class="video-box">
                                                <?php $video_thumb = get_sub_field( 'video_thumb' ); ?>
                                                <?php if ( $video_thumb ) : ?>
                                                    <img src="<?php echo esc_url( $video_thumb['url'] ); ?>" alt="<?php echo esc_attr( $video_thumb['alt'] ); ?>" />
                                                <?php endif; ?>
                                                <a href="<?php echo $video_url; ?>" data-lity class="play_btn"><em class="fa fa-play"></em><span class="d-none">icon</span></a>
                                            </div>
                                            </div>
                                            
                                        <?php endif; ?>
                                        <ul class="custom_arrows hero_arrows">
                                            <li class="hero_prev">
                                               <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56" width="56" height="56">
	<defs>
		<image  width="56" height="56" id="img1" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAAXNSR0IB2cksfwAAAIdQTFRFAAAA8/Pz9PTy9PLx9fPy9PPx9fTy9PPy9PTx8/Py9PPy9evr9PTy9PPy39/f9PTz9PLy8/Px8/Pz+PDw////gICA9PTy9fPz8/Py9PLy8fHx8PDw9fTz8/Pz////8fHx9fPz9PTz9PT09PLy9PPy9PPz9PLy8/Px9PLy9PPy9PPy8/Px9PLyhMYKnAAAAC10Uk5TAD50osbi9P5Zq/8ahusI4aJtQiIMAqKY7I04I+FtAjWCzDDf75Cgf+Dw0IBgpE8olQAAAdNJREFUeJydl3l7gjAMxiOnHFNuAfFibnPH9/98I2kV0Ao17x/q0/a3pEnaZgAqLQzTsh3XdWzLNBbKJQotPccfyfGW81QQvvkKvYXBJLYKXRWGcsPVhJO2XLWO4iTN8jxLk7hYy0H7qcMbsaCs6vF4XZViZqPEthZNNrv949x+19CktX2cOwg3jwqM0KNw9/DAUTBPtQqSDp8ovHfkluwVT8xJowXZHHtL+6umMFRF+xyObLQ4SQ5iuyQ/5zkA8vaWzxVu8DS5v6v2GCH7WkMh/pmJeA5V49pQ/A6wPo96HADm0w1uBhstR8nZ5mYSU7/T5QB2WAb4A0NaahvsTJYysJ5eCnthMr3u29EPqRAG1unuJTy3r3AAeLIXYOgWTa+oQwwwu8+4H2zf21kw7hCTzkXSc2f/YxZM6IxgnaYD7nPe1RTrlYKa9dz5a0JyWUZhxULN5cjl2aUqJZflWK4jsP32f34nNAKHriL5N79H4eooOHqkCM44HdBe5vMo0nFXADoSBYAlF70GFlRy7CJnHyv+QWZfHezLin89si9k9hPAf3TYzxz/YeU/5fzmgd2u8BskfksG7CYQhm1n0bed0XzbyW90gd1aC4dZzbyQxr8P/xBCNu6s7e7FAAAAAElFTkSuQmCC"/>
	</defs>
	<style>
	</style>
	<use href="#img1" x="0" y="0"/>
</svg>
                                            </li>
                                            <li class="hero_next">
                                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56" width="56" height="56">
	<defs>
		<image  width="56" height="56" id="img2" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAAXNSR0IB2cksfwAAAIRQTFRFAAAA8/Pz9PTy9PLx9fPy9PPx9fTy9PPy9PTx8/Py9PPy9evr9PTy9PPy39/f9PTz9PLy8/Px8/Pz+PDw////gICA9PTy9fPz8/Py9PLy8fHx8PDw9fTz8/Pz////8fHx9fPz9PTz9PT09PLy9PLy9PPy8/Px9PPx9PLy8/Px9PPy9PPy750dgwAAACx0Uk5TAD50osbi9P5Zq/8ahusI4aJtQiIMAqKY7I04I+FtAjWCzDDfYO9/z+CA0PD25gAWAAABz0lEQVR4nJ1X2YKCMAysnHKo3ALixV7u7v//35K0QllrqZkHxTZDpknaRsZUWFm243q+77mOba2UJgqsAy+cwQvWy6wo3oQKbOJIS9vGvooG8OOtRqQrrHZJmuVFWRZ5llY7Meg+FbznBnXTzsfbpuYzeyXt4OBkdzw9zp2OHU46h8e5M5d5UdCQeuFyzw88DOa1VZGE4CuG9x/zgP6qJ+6E0wp9ztXi+hodDdDgOuWRvRFPMKXYrlHnMo8xVDvmcwsLvGrXd8cJIuTeayiG12jiKaMF25g/R1CfFzMeY5BPPxoddkZCUWw3uoTUH015jB2hDOABQlobOxxc1iKwgVkKJ0Ayg+HbMw8pBwTWG84l2Lev8BiDnb1ilmnRTEgGisXs4TNdtO3f+ulHOlBs3BfZIvE9/JiYGe4RqNN8WZ7MzKFeMaiFGPnU4GtiFhhWKNRSjDw7UwVuwqyEcp0RvzX4CX/7GVGWql3jyBNSzYIj80RwzNLR36Q88nSYFcAMvACg5JLXiBWWHLnIyduKvpHJRwf5sKIfj+QDmXwF0C8d8jVHv1jpVzm9eSC3K/QGid6SMXITyOS2s5razmS57aQ3uozcWnPBpGaew+Dvwx+dZzaTfq021QAAAABJRU5ErkJggg=="/>
	</defs>
	<style>
	</style>
	<use id="Layer 2" href="#img2" x="0" y="0"/>
</svg>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                <?php endif; ?>
                        </div>
                        <?php else: ?>
                            <div class="slide">
                            <div class="container">
                            <div class="row">
                                <div class="col-xxl-11 mx-auto">
                                <div class="row ">
                                <div class="col-lg-5 col-sm-6">
                                    <?php if( $heading = get_sub_field( 'heading' ) ): ?>
                                        <div class="hero_heading text-sm-start text-center">
                                        <span class="h1 d-block animated" data-animation-in="fadeInLeft" data-delay-in="0.2"><?php echo $heading ?> </span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="hero-desc text-sm-start text-center animated"  data-animation-in="fadeInLeft" data-delay-in="0.4">
                                        <?php the_sub_field( 'description' ); ?>
                                        <?php if( $heading_two = get_sub_field( 'heading_two' ) ): ?>
                                        <span class="h6 d-block hero_heading2"><?php echo $heading_two; ?></span>
                                        <?php endif; ?>
                                        <div class="group_btn">
                                        <?php $button_1 = get_sub_field( 'button_1' ); ?>
                                        <?php if ( $button_1 ) : ?>
                                            <a class="cta-btn btn_default" href="<?php echo esc_url( $button_1['url'] ); ?>" target="<?php echo esc_attr( $button_1['target'] ); ?>"><?php echo esc_html( $button_1['title'] ); ?></a>
                                        <?php endif; ?>
                                        <?php $button_2 = get_sub_field( 'button_2' ); ?>
                                        <?php if ( $button_2 ) : ?>
                                            <a class="cta-btn btn_default" href="<?php echo esc_url( $button_2['url'] ); ?>" target="<?php echo esc_attr( $button_2['target'] ); ?>"><?php echo esc_html( $button_2['title'] ); ?></a>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                            </div>
                            <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) : ?>
                                <div class="hero-img mt-0">
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                        <div class="container">
                                        <?php if( $video_url = get_sub_field( 'video_url' ) ): ?>
                                            <div class="hero-video animated"  data-animation-in="fadeInLeft" data-delay-in="0.6">
                                            <?php if( $video_title = get_sub_field( 'video_title' ) ): ?>
                                                <span class="title d-block"><?php echo $video_title ?> </span>
                                            <?php endif; ?>
                                            <div class="video-box">
                                                <?php $video_thumb = get_sub_field( 'video_thumb' ); ?>
                                                <?php if ( $video_thumb ) : ?>
                                                    <img src="<?php echo esc_url( $video_thumb['url'] ); ?>" alt="<?php echo esc_attr( $video_thumb['alt'] ); ?>" />
                                                <?php endif; ?>
                                                <a href="<?php echo $video_url; ?>" data-lity class="play_btn"><em class="fa fa-play"></em><span class="d-none">icon</span></a>
                                            </div>
                                            </div>
                                            
                                        <?php endif; ?>
                                        <ul class="custom_arrows hero_arrows">
                                            <li class="hero_prev">
                                                <em class="fa-solid fa-left-long"></em>
                                            </li>
                                            <li class="hero_next">
                                            <em class="fa-solid fa-right-long"></em>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
    </section>

<?php elseif( 'v3' == get_field( 'style' ) ): ?>
    <section class="hero-area  <?php echo join( ' ', $alignClass ); ?>">
        <div class="pt_160 relative">
			<div class="h_top">
				<div class="container">
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row ">
                        <div class="col-lg-5 col-sm-6">
                            <?php if( $headingalt = get_field( 'heading_alt' ) ): ?>
                                <div class="hero_heading text-sm-start text-center">
                                <h1 class="h1 d-block " data-aos="fade-right" data-aos-delay="200"><?php echo $headingalt ?> </h1>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="hero-desc text-sm-start text-center "  data-aos="fade-right" data-aos-delay="400">
                                <?php the_field( 'description_alt' ); ?>
                                <?php if( $heading_two_alt = get_field( 'heading_two_alt' ) ): ?>
                                        <span class="h6 d-block hero_heading2"><?php echo $heading_two_alt; ?></span>
                                        <?php endif; ?>
                                <div class="group_btn">
                                <?php $buttonalt_1 = get_field( 'button_1_alt' ); ?>
                                <?php if ( $buttonalt_1 ) : ?>
                                    <a class="cta-btn btn_default" href="<?php echo esc_url( $buttonalt_1['url'] ); ?>" target="<?php echo esc_attr( $buttonalt_1['target'] ); ?>"><?php echo esc_html( $buttonalt_1['title'] ); ?></a>
                                <?php endif; ?>
                                <?php $buttonalt_2 = get_field( 'button_2_alt' ); ?>
                                <?php if ( $buttonalt_2 ) : ?>
                                    <a class="cta-btn btn_default" href="<?php echo esc_url( $buttonalt_2['url'] ); ?>" target="<?php echo esc_attr( $buttonalt_2['target'] ); ?>"><?php echo esc_html( $buttonalt_2['title'] ); ?></a>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			</div>
        <?php $imagealt = get_field( 'image_alt' ); ?>
                <?php if ( $imagealt ) : ?>
                <div class="hero-img ">
                    <img src="<?php echo esc_url( $imagealt['url'] ); ?>" alt="<?php echo esc_attr( $imagealt['alt'] ); ?>" />
                    <?php if( $video_urlalt = get_field( 'video_url_alt' ) ): ?>
                        <a href="<?php echo $video_urlalt; ?>" data-lity class="play_btn"><em class="fa fa-play"></em><span class="d-none">icon</span></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
		</div>
    </section>

<?php else: ?>
    <section class="hero-area no-slide  <?php echo join( ' ', $alignClass ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row ">
                        <div class="col-lg-5 col-sm-6">
                            <?php if( $headingalt = get_field( 'heading_alt' ) ): ?>
                                <div class="hero_heading text-sm-start text-center">
                                <h1 class="h1 d-block " data-aos="fade-right" data-aos-delay="200"><?php echo $headingalt ?> </h1>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="hero-desc text-sm-start text-center "  data-aos="fade-right" data-aos-delay="400">
                                <?php the_field( 'description_alt' ); ?>
                                <?php if( $heading_two_alt = get_field( 'heading_two_alt' ) ): ?>
                                        <span class="h6 d-block hero_heading2"><?php echo $heading_two_alt; ?></span>
                                        <?php endif; ?>
                                <div class="group_btn">
                                <?php $buttonalt_1 = get_field( 'button_1_alt' ); ?>
                                <?php if ( $buttonalt_1 ) : ?>
                                    <a class="cta-btn btn_default" href="<?php echo esc_url( $buttonalt_1['url'] ); ?>" target="<?php echo esc_attr( $buttonalt_1['target'] ); ?>"><?php echo esc_html( $buttonalt_1['title'] ); ?></a>
                                <?php endif; ?>
                                <?php $buttonalt_2 = get_field( 'button_2_alt' ); ?>
                                <?php if ( $buttonalt_2 ) : ?>
                                    <a class="cta-btn btn_default" href="<?php echo esc_url( $buttonalt_2['url'] ); ?>" target="<?php echo esc_attr( $buttonalt_2['target'] ); ?>"><?php echo esc_html( $buttonalt_2['title'] ); ?></a>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $imagealt = get_field( 'image_alt' ); ?>
                <?php if ( $imagealt ) : ?>
                <div class="hero-img ">
                    <img src="<?php echo esc_url( $imagealt['url'] ); ?>" alt="<?php echo esc_attr( $imagealt['alt'] ); ?>" />
                    <?php if( $video_urlalt = get_field( 'video_url_alt' ) ): ?>
                        <a href="<?php echo $video_urlalt; ?>" data-lity class="play_btn"><em class="fa fa-play"></em><span class="d-none">icon</span></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
    </section>
<?php endif; ?>
    

    <?php
endif;