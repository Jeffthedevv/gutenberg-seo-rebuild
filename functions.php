<?php 
  /**
  * register webpack compiled js and css with theme
  */
  function enqueue_webpack_scripts() {
    
    $cssFilePath = glob( get_template_directory() . '/css/build/main.min.css' );
    $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'main_css', $cssFileURI );
    
    $jsFilePath = glob( get_template_directory() . '/js/build/jsmain.min.js' );
    $jsFileURI = get_template_directory_uri() . '/js/build/js' . basename($jsFilePath[0]);
    wp_enqueue_script( 'main_js', $jsFileURI , null , null , true );
     

     // Debug statement to check the file path
     error_log('Enqueued JS File: ' . $jsFileURI);
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_webpack_scripts' );
 
  /**
   * Register Custom Navigation Walker
   */
  function register_navwalker(){
    require_once get_template_directory() . '/functions/nav_walker.php';
  }
  add_action( 'after_setup_theme', 'register_navwalker' );

  /**
  * Register ACF Blocks JS
  */
  function enqueue_acf_block_editor_assets() {
    wp_enqueue_script(
        'acf-container-block-js',
        get_template_directory_uri() . '/js/src/acf/acf-blocks.js', // Adjust the path if needed
        array('wp-blocks', 'wp-editor'),
        filemtime(get_template_directory() . '/js/src/acf/acf-blocks.js'),
        true
    );
  }
  add_action('enqueue_block_editor_assets', 'enqueue_acf_block_editor_assets');

  /**
  * Register Custom Navigation Menus
  */
  function register_my_menus() {
    register_nav_menus(
      array(
        'menu0' => 'Solutions Main Menu',
        'menu1' => 'Industries Main Menu',
        'menu2' => 'Discover Main Menu', 
        'menu3' => 'Prompts Main Menu',
        'footer_menu_0' => 'Company Footer Menu',
        'footer_menu_1' => 'Resources Footer Menu',
        'footer_menu_2' => 'Prompt Footer Menu',
        'footer_menu_3' => 'Policy Footer Menu'
      )
    );
  }
  add_action( 'after_setup_theme', 'register_my_menus' );

  /**
  * Registers an editor stylesheet for the theme.
  */
  function mytheme_enqueue_block_editor_assets() {
    wp_enqueue_style(
        'main.min.css', 
        get_template_directory_uri() . '/css/build/main.min.css', 
        array(), 
        filemtime(get_template_directory() . '/css/build/main.min.css')
    );
  }
  add_action('enqueue_block_editor_assets', 'mytheme_enqueue_block_editor_assets');

  /**
  * Wordpress ACF Blocks  
  */
  function register_custom_acf_blocks() {
    register_block_type(__DIR__ . '/blocks/heroblock');
    register_block_type(__DIR__ . '/blocks/counterblock');
    register_block_type(__DIR__ . '/blocks/splitblock');
    register_block_type(__DIR__ . '/blocks/ctablock');
    register_block_type(__DIR__ . '/blocks/paradigm');
    register_block_type(__DIR__ . '/blocks/containerblock');
    register_block_type(__DIR__ . '/blocks/formblock');
    register_block_type(__DIR__ . '/blocks/heroblockwf');
    register_block_type(__DIR__ . '/blocks/wheroblock');
    register_block_type(__DIR__ . '/blocks/advantage');
    register_block_type(__DIR__ . '/blocks/advantagev2');
    register_block_type(__DIR__ . '/blocks/advantagev3');
    register_block_type(__DIR__ . '/blocks/advantagev4');
    register_block_type(__DIR__ . '/blocks/advantagev5');
    register_block_type(__DIR__ . '/blocks/advantagev6');
    register_block_type(__DIR__ . '/blocks/advantagev7');
    register_block_type(__DIR__ . '/blocks/advantagev8');
    register_block_type(__DIR__ . '/blocks/advantagev9');
    register_block_type(__DIR__ . '/blocks/advantagev10');
    register_block_type(__DIR__ . '/blocks/advantagev11');
    register_block_type(__DIR__ . '/blocks/advantagev12');
    register_block_type(__DIR__ . '/blocks/sustainability');
    register_block_type(__DIR__ . '/blocks/listblock');
    register_block_type(__DIR__ . '/blocks/SITENAME');
    register_block_type(__DIR__ . '/blocks/SITENAMEethos');
    register_block_type(__DIR__ . '/blocks/ctablockv2');
    register_block_type(__DIR__ . '/blocks/provengraph');
    register_block_type(__DIR__ . '/blocks/graphblock');
    register_block_type(__DIR__ . '/blocks/videoblock');
    register_block_type(__DIR__ . '/blocks/iconblock');
  }
  add_action('init', 'register_custom_acf_blocks');

  /**
  * Knowledge Base Plugin Styles
  */
  if( HT_KB_MAIN_PLUGIN_FILE ){
    wp_enqueue_style( 'hkb-style', plugins_url( 'css/hkb-style.css', HT_KB_MAIN_PLUGIN_FILE ), array(), HT_KB_VERSION_NUMBER );
  }

  /**
  * Main Menu Icons
  */
  function add_icon_to_menu($item_output, $item, $depth, $args) {
    foreach ($item->classes as $class) {
        if (strpos($class, 'fa-') === 0) {
            $icon = '<i class="fa ' . esc_attr($class) . '" aria-hidden="true"></i>';
            // Replace the inner text of the <a> tag but keep the link structure
            $item_output = preg_replace('/(<a[^>]*>)(.*?)(<\/a>)/i', '$1' . $icon . '$3', $item_output);
            break;
        }
    }
    return $item_output;
  }
  add_filter('walker_nav_menu_start_el', 'add_icon_to_menu', 10, 4);


  function mytheme_setup() {
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'mytheme_setup');

  add_theme_support( 'align-wide' );
?>