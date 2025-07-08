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

    <section class="content-area  <?php echo join( ' ', $alignClass ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <?php if( $heading = get_field( 'heading' ) ): ?>
                        <div class="text-md-start text-center section_heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="h1"><?php echo $heading; ?> </h3>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ( have_rows( 'lists' ) ) : ?>
                        <div class="row">
                            <div class="col-xxl-10 mx-auto">
                                <?php while ( have_rows( 'lists' ) ) : the_row(); ?>
                                <div class="post-item arList">
                                    <div class="row align-items-lg-center">
                                        <div class="col-md-5 col-sm-6">
                                            <div class="post-image">
                                                <?php $image = get_sub_field( 'image' ); ?>
                                                <?php if ( $image ) : ?>
                                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                                    <?php endif; ?>
                                            </div>                                                
                                        </div>
                                        <div class="col-md-6 col-sm-6 ms-auto">
                                            <div class="post-desc">
                                                <h4 class="h5 title"><?php the_sub_field( 'title' ); ?></h4>
                                                <?php $button = get_sub_field( 'button' ); ?>
                                                <?php if ( $button ) : ?>
                                                    <a class="post-action cta-btn btn_default" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
                                                <?php endif; ?>                                      
                                            </div>
                                        </div>
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