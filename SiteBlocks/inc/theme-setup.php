<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! function_exists( 'SITENAME_setup' ) ) :
    
    function SITENAME_setup() {
        /*
            * Make theme available for translation.
            * Translations can be filed in the /languages/ directory.
            * If you're building a theme based on SITENAME, use a find and replace
            * to change 'SITENAME' to the name of your theme in all the template files.
            */
        load_theme_textdomain( 'SITENAME', get_template_directory() . '/languages' );
    
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
    
        /*
            * Let WordPress manage the document title.
            * By adding theme support, we declare that this theme does not use a
            * hard-coded <title> tag in the document head, and expect WordPress to
            * provide it for us.
            */
        add_theme_support( 'title-tag' );
    
        /*
            * Enable support for Post Thumbnails on posts and pages.
            *
            * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
            */
        add_theme_support( 'post-thumbnails' );

        /**
       * Register support for Gutenberg wide images in your theme
       */
      add_theme_support( 'align-wide' );
    
      /**
       * Fix video size embeded with Gutenberg (they are 16:9 by default)
       */
      add_theme_support( 'responsive-embeds' );
    
        // This theme uses wp_nav_menu() in one location.
/*        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'SITENAME' ),
                'footer-menu-1' => esc_html__( 'Footer Menu 1', 'SITENAME' ),
                'footer-menu-2' => esc_html__( 'Footer Menu 2', 'SITENAME' ),
                'footer-menu-3' => esc_html__( 'Footer Menu 3', 'SITENAME' ),
                'footer-menu-4' => esc_html__( 'Footer Bottom Menu', 'SITENAME' ),
            )
        ); */
        // This theme uses wp_nav_menu() in multiple locations.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'SITENAME' ),
                'footer-menu-1' => esc_html__( 'Footer Menu 1', 'SITENAME' ),
                'footer-menu-2' => esc_html__( 'Footer Menu 2', 'SITENAME' ),
                'footer-menu-3' => esc_html__( 'Footer Menu 3', 'SITENAME' ),
                'footer-menu-4' => esc_html__( 'Footer Menu 4', 'SITENAME' ),
                'footer-bottom-menu' => esc_html__( 'Footer Bottom Menu', 'SITENAME' ),
            )
        );        
    
        /*
            * Switch default core markup for search form, comment form, and comments
            * to output valid HTML5.
            */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
    
        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'SITENAME_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );
    
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
    
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
    add_action( 'after_setup_theme', 'SITENAME_setup' );


    
endif;