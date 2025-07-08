<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

	echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
	echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';

else : /* rendering in editor body */
    ?>

    <section class="content-area pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                <?php if ( have_rows( 'box_slider' ) ) : ?>
                    <div class="box-slider">
                    <?php while ( have_rows( 'box_slider' ) ) : the_row(); ?>
                        <div class="slide">
                            <div class="box style5 text-md-center text-start">
                            <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) : ?>
                                    <div class="image">
                                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                    </div>
                                <?php endif; ?>
                                <div class="text">
                                    <span class="d-block title"><?php the_sub_field( 'title' ); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                    
                <?php endif; ?>
                    <div class="d-lg-none">
                    <ul class="custom_arrows boxArrows d-flex align-items-center justify-content-between">
                        <li class="box_prev prev_btn">
                            <em class="fa-solid fa-left-long"></em>
                        </li>
                        <li class="slides4-numbers" style="display: block;">
                            <span class="active">1</span> <span class="div">/</span> <span class="total"></span>
                        </li>
                        <li class="box_next next_btn">
                            <em class="fa-solid fa-right-long"></em>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
endif;