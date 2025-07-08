<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

	echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
	echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';

else : /* rendering in editor body */
    ?>

    <section class="content-area pt-0 trust_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <?php if( $heading = get_field( 'heading' ) ): ?>
                        <h3 class=" h5 text-lg-start text-center"><?php echo $heading ?> </h3>
                    <?php endif; ?>
                    <div class="trust_inner">
                        <div class="trust_prev trust_arrow"><em class="fa-solid fa-left-long"></em></div>
                        <?php if ( have_rows( 'trust_logos' ) ) : ?>
                            <div class="trust_slider">
                            <?php while ( have_rows( 'trust_logos' ) ) : the_row(); ?>
                                <?php $trust_logo = get_sub_field( 'trust_logo' ); ?>
                                <?php if ( $trust_logo ) : ?>
                                    <div class="slide">
                                        <div class="trust-img">
                                        <img src="<?php echo esc_url( $trust_logo['url'] ); ?>" alt="<?php echo esc_attr( $trust_logo['alt'] ); ?>" />
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            </div>
                            
                        <?php endif; ?>
                        <div class="trust_next trust_arrow"><em class="fa-solid fa-right-long"></em></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <?php
endif;