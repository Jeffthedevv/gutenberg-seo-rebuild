<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

	echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
	echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';

else : /* rendering in editor body */
    ?>

    
<?php $bg = ($bg_image = get_field('image') ) ? 'style="background: url('.$bg_image.') no-repeat scroll center center/cover"' : '' ?>
    <section class="content-area cform_area pt-0" >
        
        <div class="container">
            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="c_form" style="display:block; clear:both;">
                            <div><h2 style="color:#ffffff; clear:both">INQUIRE NOW</h2></div>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                                hbspt.forms.create({
                                region: "na1",
                                portalId: "23944380",
                                formId: "02d3474b-bf0c-4114-a648-b815b50fcc0a"
                                });
                            </script>
                          <!--  <?php the_field( 'form_code' ); ?> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ( $bg ) : ?>
            <div class="bg_image" <?php echo $bg ?>></div>
        <?php endif; ?>
    </section>

    <?php
endif;