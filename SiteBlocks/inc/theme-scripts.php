<?php
/**
 * The Asset Manager
 * Enqueue scripts and styles for the frontend
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class SITENAME_Assets {
    
     /**
	 * Hold an instance of SITENAME_Assets class.
	 * @var SITENAME_Assets
	 */
	protected static $instance = null;

	/**
	 * Main SITENAME_Assets instance.
	 *
	 * @return SITENAME_Assets - Main instance.
	 */
	public static function instance() {

		if(null == self::$instance) {
			self::$instance = new SITENAME_Assets();
		}

		return self::$instance;
	}
    
    /**
	 * [__construct description]
	 * @method __construct
	 */
    public function __construct() {

        // Frontend
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
        
        // Admin Style
        add_action('admin_enqueue_scripts', array( $this, 'admin_style' ) );
        
        // Black Css Style
        add_action('enqueue_block_editor_assets', array( $this, 'block_editor_assets' ) );
    }
    
    /**
     * Enqueue Scripts and Styles
     * @method enqueue
     * @return [type]  [description]
     */
    public function enqueue() {

	    wp_style_add_data( 'SITENAME-style', 'rtl', 'replace' );
        
        // Css Enqueue
        wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendors/fontawesome/css/all.min.css', false, filemtime(get_template_directory() . '/assets/vendors/fontawesome/css/all.min.css') );
        wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', false, filemtime(get_template_directory() . '/assets/vendors/bootstrap/css/bootstrap.min.css') );
        wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/vendors/slick/slick-theme.css', false, filemtime(get_template_directory() . '/assets/vendors/slick/slick-theme.css') );
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/vendors/slick/slick.css', false, filemtime(get_template_directory() . '/assets/vendors/slick/slick.css') );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendors/animate/css/animate.min.css', false, filemtime(get_template_directory() . '/assets/vendors/animate/css/animate.min.css') );
        wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/vendors/aos/css/aos.css', false, filemtime(get_template_directory() . '/assets/vendors/aos/css/aos.css') );
        wp_enqueue_style( 'lity', get_template_directory_uri() . '/assets/vendors/lity/css/lity.min.css', false, filemtime(get_template_directory() . '/assets/vendors/lity/css/lity.min.css') );
        wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', false, filemtime(get_template_directory() . '/assets/fonts/fonts.css') );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', false, filemtime(get_template_directory() . '/assets/css/style.css') );
        
        // Js Enqueue    
        wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.min.js', array('jquery'), filemtime(get_template_directory() . '/assets/vendors/bootstrap/js/bootstrap.min.js'), true );
        wp_enqueue_script( 'lity', get_template_directory_uri() . '/assets/vendors/lity/js/lity.min.js', array(), filemtime(get_template_directory() . '/assets/vendors/lity/js/lity.min.js'), true );
        wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendors/aos/js/aos.js', array(), filemtime(get_template_directory() . '/assets/vendors/aos/js/aos.js'), true );
        wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/assets/vendors/slick/slick.min.js', array(), filemtime(get_template_directory() . '/assets/vendors/slick/slick.min.js'), true );
		wp_enqueue_script( 'slick-animation-min', get_template_directory_uri() . '/assets/vendors/slick/slick-animation.min.js', array(), filemtime(get_template_directory() . '/assets/vendors/slick/slick-animation.min.js'), true );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), filemtime(get_template_directory() . '/assets/js/main.js'), true );
        
        // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
        wp_localize_script( 'main', 'SITENAME_loadmore_params', array(
          'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        ) );
    }
    
    /**
     * Enqueue Admin Styles
     * @method enqueue
     * @return [type]  [description]
     */
    function admin_style() {
      wp_enqueue_style('admin-global', get_stylesheet_directory_uri().'/assets/css/admin-global.css');
    }
    
    /**
     * Enqueue Black Styles
     * @method enqueue
     * @return [type]  [description]
     */
    function block_editor_assets() {
      wp_enqueue_style('admin-acf-blocks', get_stylesheet_directory_uri().'/assets/css/admin-acf-blocks.css');
    }
}

/**
 * Main instance of SITENAME_Assets.
 *
 * Returns the main instance of SITENAME_Assets to prevent the need to use globals.
 *
 * @return SITENAME_Assets
 */
function SITENAME_assets() {
	return SITENAME_Assets::instance();
}
SITENAME_assets(); // init it

