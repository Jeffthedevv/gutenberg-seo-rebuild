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
                    <div class="text-md-start text-center section_heading" data-aos="fade-up">
                        <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                            <span class="d-blockk sub_heading"><?php echo $sub_heading ?> </span>
                        <?php endif; ?>

                        <?php if( $heading = get_field( 'heading' ) ): ?>
                            <h3 class="h1"><?php echo $heading ?> </h3>
                        <?php endif; ?>
                        <div class="inner_sub_content">
                        <?php the_field( 'description' ); ?>
                        </div>
                    </div>
                    <?php if ( have_rows( 'list' ) ) :  $delay = 100; ?>
                        <div class="list_row">
                        <div class="row gx_5">
                        <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                            <div class="col-sm-6 <?php the_sub_field( 'ordering' ); ?>"  data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>"> 
                                <div class="content-list-box text-sm-start text-center">
                                <?php if( $year = get_sub_field( 'year' ) ): ?>
                                    <span class="d-block year "><?php echo $year ?> </span>
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="left">
                                            <?php if( $title = get_sub_field( 'title' ) ): ?>
                                                <h4 class="h6 title"><?php echo $title ?> </h4>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="right">
                                            <?php the_sub_field( 'content' ); ?>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        <?php $delay += 100; endwhile; ?>
                        </div>
                        </div>
                        
                    <?php endif; ?>
                    
                </div>
            </div>
            <?php $button = get_field( 'button' ); ?>
            <?php if ( $button ) : ?>
                <div class="section_action text-center" data-aos="fade-up">
                <a class="cta-btn btn_default" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php
endif;