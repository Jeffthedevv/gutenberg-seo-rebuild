<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

	echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
	echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';

else : /* rendering in editor body */
    ?>

<section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-11 mx-auto">
                <div class="row">
                    <div class="col-sm-8">
                        <?php if( $heading = get_field( 'heading' ) ): ?>
                            <h3 class="h1 heading text-sm-start text-center"><?php echo $heading ?> </h3>
                        <?php endif; ?>
                    </div>
                </div>
                <img class="mt-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/infogra.webp" alt="img" >
            </div>
        </div>
    </div>
</section>
    

    <?php
endif;