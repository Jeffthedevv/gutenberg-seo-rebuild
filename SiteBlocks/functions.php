<?php

/**SITENAME

 * VVater functions and definitions

 *SITENAME

 * @link https://developer.wordpress.org/themes/basics/theme-functions/

 *

 * @package VVater

 */



 require get_template_directory() . '/inc/theme-init.php';





 add_filter( 'gform_submit_button_1', 'form_submit_button', 10, 2 );

function form_submit_button( $button, $form ) {

    return "<div class='text-center'><button class='cta-btn btn_default gform_button' id='gform_submit_button_{$form['id']}'><span class='d-none'>{$form['button']['text']}</span><svg xmlns='http://www.w3.org/2000/svg' width='39' height='33' viewBox='0 0 39 33'> <g id='Group_135' data-name='Group 135' transform='translate(-830 -7210)'> <rect id='Rectangle_40' data-name='Rectangle 40' width='39' height='33' transform='translate(830 7210)' fill='#f4f3f2'/> <path id='Path_118' data-name='Path 118' d='M20.85,0,19.833,1.017,21.656,2.84H0V4.278H21.656L19.833,6.1,20.85,7.119l3.559-3.56Z' transform='translate(837 7223)' fill='#120f0f'/> </g> </svg></button></div>";

}

add_filter( 'gform_submit_button_2', 'form_submit_button2', 10, 2 );

function form_submit_button2( $button, $form ) {

    return "<button class='cta-btn btn_white ' id='gform_submit_button_{$form['id']}'>{$form['button']['text']}</button>";
SITENAME
}



add_filter( 'gform_submit_button_3', 'form_submit_button3', 10, 2 );

function form_submit_button3( $button, $form ) {

    return "<button class='cta-btn btn_white ' id='gform_submit_button_{$form['id']}'>{$form['button']['text']}</button>";

}





//Replace style-login.css with the name of your custom CSS file

function my_custom_login_stylesheet() {

	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/assets/css/login.css' );

}



add_action( 'login_enqueue_scripts', 'my_custom_login_stylesheet' );



add_filter( 'login_headerurl', 'codecanal_loginlogo_url' );

function codecanal_loginlogo_url($url)

{

  return 'https://www.vvater.com/';

}



//Enqueue HubSpot Newsletter Subscription Form

/** function enqueue_hubspot_forms_script() {

    wp_enqueue_script( 'hubspot-forms', '//js.hsforms.net/forms/embed/v2.js', array(), null, true );

}

add_action( 'wp_enqueue_scripts', 'enqueue_hubspot_forms_script' ); **/