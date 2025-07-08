<?php

if( isset( $block['data']['preview_image'] ) ) :    /* rendering in inserter preview  */



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
SITENAME
        $alignClass[] = '';

    endif;



    // Check if the current page is the home page using page ID

    if ( is_front_page() || is_home() || get_the_ID() == get_option('page_on_front') ) {

        $alignClass[] = 'home-page-section';

    } else {

        echo '<!-- Not the home page -->';

    }



    $alignClass = array_filter($alignClass); // Remove empty values

?>

    <section class="content-area <?php echo join( ' ', $alignClass ); ?>">

    

    <div class="video-background">

    

        <video autoplay loop muted playsinline>

            <source src="https://staging10.vvater.com/wp-content/uploads/2024/07/AdobeStock_661682382_Video_HD_Preview-1.mp4" type="video/mp4">

            Your browser does not support the video tag.

        </video>

    </div>

            <div class="container">

            <div class="row">

                <div class="col-xxl-9 col-md-10 col-lg-12 mx-auto">

                    

                    <div class="newsletter_inner">

                    <?php if( $heading = get_field( 'heading' ) ): ?>

                        <h3 class="h1 text_white text-center"  data-aos="fade-up"><?php echo $heading ?> </h3>

                    <?php endif; ?>

                        <div class="row align-items-center">

                            <div class="col-lg-6">

                                <div class="newsletter_form">

                                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>

                                    <script>

                                    hbspt.forms.create({

                                        region: "na1",

                                        portalId: "23944380",

                                        formId: "ec110990-9a18-442a-b702-4988cf4fa35a"

                                    });

                                    </script>

                                   <!-- <?php the_field( 'form_code' ); ?> -->

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="right">

                                    <p><?php the_field( 'sub_heading' ); ?></p>

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

    </section>



    <?php

endif;

?>