<?php
/**
 * 
 * SITENAME Base Class.
 * Core class used to create an SITENAME navigation and content.
 * 
 */

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * SITENAME Class
 */
class SITENAME {
    
    /**
     * Hold an instance of SITENAME class.
     * @var SITENAME
     */
    protected static $instance = null;

	/**
	 * Main SITENAME instance.
	 *
	 * @return SITENAME - Main instance.
	 */
    public static function instance() {
        if(null == self::$instance) {
            self::$instance = new SITENAME();
        }

        return self::$instance;
    }
    
    /**
	 * [__construct description]
	 * @method __construct
	 */
	private function __construct() {
        
        //Include Class
        $this->SITENAME_includes();
	}
    
    /**
	 * [includes html]
	 * @method includes
	 * @return [type]     [html]
	 */
    public function SITENAME_includes(){
        
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         */
        require_once( get_template_directory() . '/inc/theme-setup.php' );
        
        /**
         * Add SITENAME_Assets Class.
         */
        require_once( get_template_directory() . '/inc/theme-scripts.php' );
        
        /**
         * Add ACF plugin functionality improvment, enhances, extension.
         */
        require_once( get_template_directory() . '/inc/theme-acf.php' );
        
        /**
         *  Functions which enhance the theme by hooking into WordPress.
         */
        require_once( get_template_directory() . '/inc/theme-functions.php' );
		
		/**
         *  Load Walker Class.
         */
        require_once( get_template_directory() . '/inc/menu-walker.php' );
        
        
        
        /**
         * Load ACF Gravity Form fields.
         */
        require_once( get_template_directory() . '/inc/acf-fields-extends/gravity-forms-acf-field/acf-gravity_forms.php' );
        
    }


    
}

/**
 * Main instance of SITENAME.
 *
 * Returns the main instance of SITENAME to prevent the need to use globals.
 *
 * @return SITENAME
 */
function SITENAME() {
	return SITENAME::instance();
}
SITENAME(); // init it