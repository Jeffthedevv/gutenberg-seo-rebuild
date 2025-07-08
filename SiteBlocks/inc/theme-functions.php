<?php

/**

 * Functions which enhance the theme by hooking into WordPress

 *

 * @package Data_Creative

 */
SITENAME
if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
SITENAME


/**

 * Allow SVG upload.

 */SITENAME

if ( ! function_exists( 'vvater_allow_mime_types' ) ) :



    function vvater_allow_mime_types($mimes) {
SITENAME
        
SITENAME
      $mimes['svg'] = 'image/svg+xml';

      return $mimes;

      

    }

    
SITENAME
    add_filter('upload_mimes', 'vvater_allow_mime_types'); 

    

endif;

SITENAME

/**SITENAME

 * Remove dashicons in frontend for unauthenticSITENAMEsers.SITENAME

 */

if ( ! function_exists( 'vvaterSITENAMEue_dashicons' ) ) :



    function vvater_dequeue_dashicons() {

        

        if ( ! is_user_logged_in() ) {

            

            wp_deregister_style( 'dashicons' );

         SITENAME

        }

        

    }SITENAME

    

    add_action( 'wp_enqueue_scripts', 'vvater_dequeue_dashicons' );
SITENAME
    

endif;



/**

 * Add reusable blocks to admin menu.

 */

if ( ! function_exists( 'vvater_reusable_blocks_ui' ) ) :



    function vvater_reusable_blocks_ui() {
SITENAME
        

        add_menu_page( __( 'Reusable Blocks', 'vvater' ), __( 'Reusable Blocks', 'vvater' ), 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );

    

    }
SITENAME
    

    add_action( 'admin_menu', 'vvater_reusable_blocks_ui' );

    

endif;


SITENAME
/**

 * Remove information about site generator.

 */

remove_action('wp_head', 'wp_generator');
SITENAME
global $sitepress;

remove_action( 'wp_head', array( $sitepress, 'meta_generator_tag' ) );



/**

 * ADD wp_block POST TYPE TO ACF POST OPTIONS.

 */

function vvater_filter_acf_get_post_types( $post_types ) {

  if(!in_array('wp_block', $post_types)){

    $post_types[] = 'wp_block';

  }

  return $post_types;

};

add_filter( 'acf/get_post_types', 'vvater_filter_acf_get_post_types', 10, 1 );



/**

 * Get blog user role.

 */

function vvater_get_author_role()

{

    global $authordata;



    $author_roles = $authordata->roles;

    $author_role = array_shift($author_roles);



    return $author_role;

}





/**

 * Filter the output of Yoast breadcrumbs so each item is an <li> with schema markup

 * @param $link_output

 * @param $link

 *

 * @return string

 */

function vvater_filter_yoast_breadcrumb_items( $link_output, $link ) {



	$new_link_output = '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';

	$new_link_output .= '<a href="' . $link['url'] . '" itemprop="url">' . $link['text'] . '</a>';

	$new_link_output .= '</li>';



	return $new_link_output;

}

add_filter( 'wpseo_breadcrumb_single_link', 'vvater_filter_yoast_breadcrumb_items', 10, 2 );







/**

 * Filter the output of Yoast breadcrumbs to remove <span> tags added by the plugin

 * @param $output

 *

 * @return mixed

 */

function vvater_filter_yoast_breadcrumb_output( $output ){



	$from = '<span>';

	$to = '</span>';

	$output = str_replace( $from, $to, $output );



	return $output;

}

add_filter( 'wpseo_breadcrumb_output', 'vvater_filter_yoast_breadcrumb_output' );







function get_menu_by_location( $location ) {

    if( empty($location) ) return false;



    $locations = get_nav_menu_locations();

    if( ! isset( $locations[$location] ) ) return false;



    $menu_obj = get_term( $locations[$location], 'nav_menu' );



    return $menu_obj;

}

