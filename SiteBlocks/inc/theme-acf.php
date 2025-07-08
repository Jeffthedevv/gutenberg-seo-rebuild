<?php
/**
 * ACF plugin improvements and acf theme options setting page.
 */

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Check ACF Plugin activation.
 */
if( ! class_exists('ACF') ) :
    return false;
endif;
 
/**
 * ACF Options page for theme options.
 */
if ( ! function_exists( 'SITENAME_acf_option_init' ) ) :
    
    function SITENAME_acf_option_init() {
        
        acf_add_options_page(array(
    		'page_title' 	=> __( 'General Options', 'SITENAME' ),
    		'menu_title'	=> __( 'Theme Options', 'SITENAME' ),
    		'menu_slug' 	=> 'general-option',
    		'capability'	=> 'edit_posts',
    		'redirect'		=> false
    	));
    }
    
    add_action('acf/init', 'SITENAME_acf_option_init');
    
endif;


/**
 * Turn on shortcodes for ACF textarea and text fields.
 */
if ( ! function_exists( 'SITENAME_acf_format_value' ) ) :
 
    function SITENAME_acf_format_value( $value, $post_id, $field ) {
        
        // run do_shortcode on all textarea values
        $value = do_shortcode($value);
        return $value;
        
    }
    
    add_filter('acf/format_value/type=textarea', 'SITENAME_acf_format_value', 10, 3);
    add_filter('acf/format_value/type=text', 'SITENAME_acf_format_value', 10, 3);
    
endif;

/**
 * Enable Email Address Encoder plugin in ACF fields.
 */
if(function_exists( 'eae_encode_emails' )) {
    
  add_filter('acf/load_value', 'eae_encode_emails');
  
}

/**
 * Add Custom Blocks Panel in Gutenberg.
 */
if ( ! function_exists( 'SITENAME_acf_getenberg_panel' ) ) :

    function SITENAME_acf_getenberg_panel( $categories, $post ) {
        return array_merge(
            $categories,
            array(
                array(
                    'slug' => 'SITENAME',
                    'title' => __( 'SITENAME', 'SITENAME' ),
                ),
            )
        );
    }
    
    add_filter( 'block_categories_all', 'SITENAME_acf_getenberg_panel', 10, 2 );
    
endif;

/**
 * Registers a custom block type in the Gutenberg editor.
 */
if ( ! function_exists( 'SITENAME_register_acf_block_types' ) ) :
    
    function SITENAME_register_acf_block_types() {

        //Hero Block.
        acf_register_block_type(array(
            'name'              => 'Hero',
            'title'             => __('Hero'),
            'description'       => __('Hero Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/hero/hero.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/hero/preview.png',
                )
              )
            )
          ));


        //Icon  + Teaser Block.
        acf_register_block_type(array(
            'name'              => 'icon-teaser',
            'title'             => __('Icon + Teaser'),
            'description'       => __('Icon + Teaser Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/icon-teaser/icon-teaser.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/icon-teaser/preview.png',
                )
              )
            )
          ));

        //Image  + Text Block.
        acf_register_block_type(array(
            'name'              => 'image-text',
            'title'             => __('Image + Text'),
            'description'       => __('Image + Text Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/image-text/image-text.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/image-text/preview.png',
                  'preview_image2' => get_template_directory_uri() .'/template-parts/blocks/image-text/preview2.png',
                  'preview_image3' => get_template_directory_uri() .'/template-parts/blocks/image-text/preview3.png',
                )
              )
            )
          ));

        //Industries Block.
        acf_register_block_type(array(
            'name'              => 'Industries',
            'title'             => __('Industries'),
            'description'       => __('Industries Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/industries/industries.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/industries/preview.png',
                )
              )
            )
          ));

          //CTA Block.
        acf_register_block_type(array(
            'name'              => 'CTA',
            'title'             => __('CTA'),
            'description'       => __('CTA Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/cta/cta.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/cta/preview.png',
                  'preview_image2' => get_template_directory_uri() .'/template-parts/blocks/cta/preview2.png',
                )
              )
            )
          ));

          //Newsletter Block.
          acf_register_block_type(array(
            'name'              => 'Newsletter',
            'title'             => __('Newsletter'),
            'description'       => __('Newsletter Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/newsletter/newsletter.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/newsletter/preview.png',
                )
              )
            )
          ));

          //Trust Block.
          acf_register_block_type(array(
            'name'              => 'Trust',
            'title'             => __('Trust'),
            'description'       => __('Trust Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/trust/trust.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/trust/preview.png',
                )
              )
            )
          ));

          //Contact Block.
          acf_register_block_type(array(
            'name'              => 'Contact',
            'title'             => __('Contact'),
            'description'       => __('Contact Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/contact/contact.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/contact/preview.png',
                )
              )
            )
          ));

          //Journey Block.
          acf_register_block_type(array(
            'name'              => 'Journey',
            'title'             => __('Journey'),
            'description'       => __('Journey Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/journey/journey.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/journey/preview.png',
                )
              )
            )
          ));

          //Team Block.
          acf_register_block_type(array(
            'name'              => 'Team',
            'title'             => __('Team'),
            'description'       => __('Team Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/team/team.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/team/preview.png',
                )
              )
            )
          ));

          //Text Block.
          acf_register_block_type(array(
            'name'              => 'Text',
            'title'             => __('Text'),
            'description'       => __('Text Block'),
            'category'          => 'SITENAME',
            'icon'              => '',
            'align'             => 'full',
            'mode'              => 'preview',
            'render_template'   => 'template-parts/blocks/text/text.php',
            'supports'          => array(
                'align' => array('full'),
                'mode'  => false,
                'anchor' => true,
                'jsx' => true
            ),
            'example'  => array(
              'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                  'preview_image' => get_template_directory_uri() .'/template-parts/blocks/text/preview.png',
                )
              )
            )
          ));

         //Box Slider Block.
         acf_register_block_type(array(
          'name'              => 'box-slider',
          'title'             => __('Box Slider'),
          'description'       => __('Box Slider Block'),
          'category'          => 'SITENAME',
          'icon'              => '',
          'align'             => 'full',
          'mode'              => 'preview',
          'render_template'   => 'template-parts/blocks/box-slider/box-slider.php',
          'supports'          => array(
              'align' => array('full'),
              'mode'  => false,
              'anchor' => true,
              'jsx' => true
          ),
          'example'  => array(
            'attributes' => array(
              'mode' => 'preview',
              'data' => array(
                'preview_image' => get_template_directory_uri() .'/template-parts/blocks/box-slider/preview.png',
              )
            )
          )
        ));

        //Performance Block.
        acf_register_block_type(array(
          'name'              => 'performance',
          'title'             => __('Performance'),
          'description'       => __('Performance Block'),
          'category'          => 'SITENAME',
          'icon'              => '',
          'align'             => 'full',
          'mode'              => 'preview',
          'render_template'   => 'template-parts/blocks/performance/performance.php',
          'supports'          => array(
              'align' => array('full'),
              'mode'  => false,
              'anchor' => true,
              'jsx' => true
          ),
          'example'  => array(
            'attributes' => array(
              'mode' => 'preview',
              'data' => array(
                'preview_image' => get_template_directory_uri() .'/template-parts/blocks/performance/preview.png',
              )
            )
          )
        ));

        //Infographic Block.
        acf_register_block_type(array(
          'name'              => 'infographic',
          'title'             => __('Infographic'),
          'description'       => __('Infographic Block'),
          'category'          => 'SITENAME',
          'icon'              => '',
          'align'             => 'full',
          'mode'              => 'preview',
          'render_template'   => 'template-parts/blocks/infographic/infographic.php',
          'supports'          => array(
              'align' => array('full'),
              'mode'  => false,
              'anchor' => true,
              'jsx' => true
          ),
          'example'  => array(
            'attributes' => array(
              'mode' => 'preview',
              'data' => array(
                'preview_image' => get_template_directory_uri() .'/template-parts/blocks/infographic/preview.png',
              )
            )
          )
        ));

        //FAQ Block.
        acf_register_block_type(array(
          'name'              => 'faq',
          'title'             => __('Faq'),
          'description'       => __('Faq Block'),
          'category'          => 'SITENAME',
          'icon'              => '',
          'align'             => 'full',
          'mode'              => 'preview',
          'render_template'   => 'template-parts/blocks/faq/faq.php',
          'supports'          => array(
              'align' => array('full'),
              'mode'  => false,
              'anchor' => true,
              'jsx' => true
          ),
          'example'  => array(
            'attributes' => array(
              'mode' => 'preview',
              'data' => array(
                'preview_image' => get_template_directory_uri() .'/template-parts/blocks/faq/preview.png',
              )
            )
          )
        ));

        //Newsroom Block.
        acf_register_block_type(array(
          'name'              => 'newsroom',
          'title'             => __('Newsroom'),
          'description'       => __('Newsroom Block'),
          'category'          => 'SITENAME',
          'icon'              => '',
          'align'             => 'full',
          'mode'              => 'preview',
          'render_template'   => 'template-parts/blocks/newsroom/newsroom.php',
          'supports'          => array(
              'align' => array('full'),
              'mode'  => false,
              'anchor' => true,
              'jsx' => true
          ),
          'example'  => array(
            'attributes' => array(
              'mode' => 'preview',
              'data' => array(
                'preview_image' => get_template_directory_uri() .'/template-parts/blocks/newsroom/preview.png',
              )
            )
          )
        ));

        //News Archive Block.
        acf_register_block_type(array(
          'name'              => 'newsarchive',
          'title'             => __('News Archive'),
          'description'       => __('News Archive Block'),
          'category'          => 'SITENAME',
          'icon'              => '',
          'align'             => 'full',
          'mode'              => 'preview',
          'render_template'   => 'template-parts/blocks/newsarchive/newsarchive.php',
          'supports'          => array(
            'align' => array('full'),
            'mode'  => false,
            'anchor' => true,
            'jsx' => true
          ),
          'example'  => array(
            'attributes' => array(
              'mode' => 'preview',
              'data' => array(
                'preview_image' => get_template_directory_uri() .'/template-parts/blocks/newsarchive/preview.png',
              )
            )
          )
        ));
        
        //Article List Block.
        acf_register_block_type(array(
          'name'              => 'article-list',
          'title'             => __('Article List'),
          'description'       => __('Article List Block'),
          'category'          => 'SITENAME',
          'icon'              => '',
          'align'             => 'full',
          'mode'              => 'preview',
          'render_template'   => 'template-parts/blocks/article-list/article-list.php',
          'supports'          => array(
              'align' => array('full'),
              'mode'  => false,
              'anchor' => true,
              'jsx' => true
          ),
          'example'  => array(
            'attributes' => array(
              'mode' => 'preview',
              'data' => array(
                'preview_image' => get_template_directory_uri() .'/template-parts/blocks/article-list/preview.png',
              )
            )
          )
        ));
        
    }
    
    add_action('acf/init', 'SITENAME_register_acf_block_types');

endif;