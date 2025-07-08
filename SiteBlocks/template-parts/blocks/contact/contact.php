<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

    echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
    echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';

else : /* rendering in editor body */
    ?>

<?php 
$bg_image = get_field('image');
$bg_color_choice = get_field('background_color');

// Define color options
$color_options = [
    'black' => '#120f0f',
    'gray' => '#898787',
    'white' => '#ffffff'
];

// Set background color based on choice, default to black
$bg_color = isset($color_options[$bg_color_choice]) ? $color_options[$bg_color_choice] : $color_options['black'];

// Prepare the background style for the main section
$bg = $bg_image ? "background: url('$bg_image') no-repeat scroll center center/cover;" : "";

$text_color = get_field('contact_text_color');
$text_color = $text_color ? $text_color : 'black'; // Default to black if not set
$color_hex = $text_color === 'white' ? '#ffffff' : '#120f0f';
$form_alignment = get_field('form_alignment');
$form_alignment = $form_alignment ? $form_alignment : 'left'; // Default to left if not set
$form_header_text = get_field('form_header_text');
$form_header_text = $form_header_text ? $form_header_text : 'INQUIRE NOW'; // Default to 'INQUIRE NOW' if not set
$form_sub_header_text = get_field('form_sub_header_text');
?>
<style>
    @media (max-width: 767px) {
        .mobile-order-1 {
            order: 1;
        }
        .mobile-order-2 {
            order: 2;
        }
    }
</style>
<section class="content-area cform_area" style="<?php echo $bg; ?> position: relative;">
    
    <div class="container">
        <div class="row">
            <div class="col-xxl-11 mx-auto">
                <div class="row <?php echo $form_alignment === 'right' ? 'flex-row-reverse' : ''; ?>">
                    <div class="col-lg-4 col-sm-6 mobile-order-2">
                        <div class="c_form" style="display:block; clear:both; padding: 20px; background-color: <?php echo $bg_color; ?>;">
                        <div>
                            <h2 style="color:#ffffff; clear:both; text-transform: uppercase;"><?php echo esc_html($form_header_text); ?></h2>
                        </div>
                        <?php if ($form_sub_header_text): ?>
                            <div style="color:#ffffff; clear:both;">
                                <?php echo esc_html($form_sub_header_text); ?>
                            </div>
                        <?php endif; ?>

                        <?php
                        $form_code = get_field('form_code'); // Retrieve the content from the form_code field

                        if ($form_code) {
                            // If the form_code field is not empty, output the content
                            echo $form_code;
                        } else {
                            // If the form_code field is empty, output the default script
                            ?>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                                hbspt.forms.create({
                                region: "na1",
                                portalId: "23944380",
                                formId: "02d3474b-bf0c-4114-a648-b815b50fcc0a"
                                });
                            </script>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 mobile-order-1">
                        <div style="padding-top:75px; padding-bottom:75px; color: <?php echo $color_hex; ?>">
                            <?php 
                            $contact_text = get_field( 'contact_text' );
                            if( $contact_text ):
                                echo wpautop( $contact_text );
                            endif;
                            ?>
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