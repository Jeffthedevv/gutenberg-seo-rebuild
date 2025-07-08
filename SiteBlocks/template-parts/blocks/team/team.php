<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

	echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
	echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';

else : /* rendering in editor body */
    ?>

    <section class="content-area py-0 <?php the_field( 'hidden_class' ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-4 col-sm-5" data-aos="fade-right">
                            <div class="content-text text-sm-start text-center pe-xxl-5">
                            <?php if( $heading = get_field( 'heading' ) ): ?>
                                <h3 class="h1 mb-lg-5"><?php echo $heading ?> </h3>
                            <?php endif; ?>
                            <?php the_field( 'description' ); ?>
                            </div>
                        </div>
                        <div class=" col-lg-8 col-sm-7">
                            
                                <div class="team-slider d-lg-none">
                                    <?php while ( have_rows( 'teams' ) ) : the_row(); ?>
                                    <div class="slide">
                                        <div class="team-box">
                                            <?php $image = get_sub_field( 'image' ); ?>
                                            <?php if ( $image ) : ?>
                                                <div class="team-img">
                                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                                </div>
                                            <?php endif; ?>
                                            <?php if( $name = get_sub_field( 'name' ) ): ?>
                                                <div class="team-text text_white">
                                                    <h4 class="h6  title"><?php echo $name; ?></h4>
                                                    <?php the_sub_field( 'designation' ); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <ul class="custom_arrows teamArrows d-flex align-items-center justify-content-between">
                                <li class="team_prev prev_btn">
                                    <em class="fa-solid fa-left-long"></em>
                                </li>
                                <li class="slides2-numbers" style="display: block;">
                                    <span class="active">01</span> <span class="div">/</span> <span class="total2"></span>
                                </li>
                                <li class="team_next next_btn">
                                    <em class="fa-solid fa-right-long"></em>
                                </li>
                            </ul>
                            </div>
                            
                    </div>
                    <?php if ( have_rows( 'teams' ) ) : ?>
                            <div class="team_container d-none d-lg-block">
                                <div class="row gx-xxl-5">
                                <div class="col-md-4"></div>
                                    <?php while ( have_rows( 'teams' ) ) : the_row(); ?>
                                    
                                    <div class="col-md-4">
                                        <div class="team-box">
                                            <?php $image = get_sub_field( 'image' ); ?>
                                            <?php if ( $image ) : ?>
                                                <div class="team-img">
                                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                                </div>
                                            <?php endif; ?>
                                            <?php if( $name = get_sub_field( 'name' ) ): ?>
                                                <div class="team-text text_white">
                                                    <h4 class="h6  title"><?php echo $name; ?></h4>
                                                    <?php the_sub_field( 'designation' ); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                            
                        <?php endif; ?>
                </div>
            </div>
            
        </div>
    </section>

    <?php
endif;