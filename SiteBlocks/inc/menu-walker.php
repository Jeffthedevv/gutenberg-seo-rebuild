<?php
/**
* Menu Walker class
* [html_attributes description]
*
* @method html_attributes
* @param  array           $attributes [description]
*
* @return [type]                [description]
*/
function SITENAME_html_attributes($attributes = array(), $prefix = '')
{
    // If empty return false
    if (empty($attributes)) {
        return false;
    }
    $options = false;
    if (isset($attributes['data-options'])) {
        $options = $attributes['data-options'];
        unset($attributes['data-options']);
    }
    $out = '';
    foreach ($attributes as $key => $value) {
        if (!$value) {
            continue;
        }
        $key = $prefix . $key;
        if (true === $value) {
            $value = 'true';
        }
        if (false === $value) {
            $value = 'false';
        }
        if (is_array($value)) {
            $out .= sprintf(' %s=\'%s\'', esc_html($key), json_encode($value));
        } else {
            $out .= sprintf(' %s="%s"', esc_html($key), esc_attr($value));
        }
    }
    if ($options) {
        $out .= sprintf(' data-options=\'%s\'', $options);
    }
    return $out;
}

class SITENAME_Walker_Nav_Menu extends Walker_Nav_Menu
{
    /**
    
    * @see Walker::start_el()
    
    */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        
        // Generate classes for <li>
        $classes = array();
        
        // Generate classes for <li>
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes = apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth );

        // MegaMenu
		if( $this->has_children && $depth == 0 ) {
        	$classes[] = 'has-submenu';
        }
        
        $class_names = implode( ' ',  $classes );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        
        // Generate <a> attribute
        $atts              = array();
        $atts['title']     = !empty($item->attr_title) ? esc_attr($item->attr_title) : '';
        $atts['target']    = !empty($item->target) ? esc_attr($item->target) : '';
        $atts['rel']       = !empty($item->xfn) ? esc_attr($item->xfn) : '';
        $atts['href']      = !empty($item->url) ? esc_url($item->url) : '';
        
        $atts       = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
        $attributes = SITENAME_html_attributes($atts);
        $item_output = '';
        
        if ($this->has_children && $depth == 0) {
            $item_output .= '<span></span>';
        }

        // html <a>
        $item_output .= '<a' . $attributes . '>';

            // Output Span
			if ($item->description) {
				$item_output .= '<img src="' . htmlspecialchars($item->description) . '">';
			}
		
        $item_output .= '<div>';
		
            $item_output .= apply_filters('the_title', $item->title, $item->ID);
		
            // Output Span
			if ($item->title) {
				$item_output .= '<span>' . $atts['title'] . '</span>';
			}	
	
        $item_output .= '</div>';
        
        $item_output .= '</a>';
        
        // Output <li>
        $output .= $indent . '<li' . $class_names . '>';
        
        // Output <a>
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
         
    }

    /**
    
    * @see Walker::start_lvl()
    
    */
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $classes = '';
        // Dropdown <ul> classes
        if( $this->has_children && $depth == 0  ):
            $classes = 'submenu';
            $output .= "\n$indent<ul class=\"$classes depth-$depth\" role='menu'>\n";
        else:
            $output .= "\n$indent<ul class=\"$classes depth-$depth\" role='menu'>\n";
        endif;
    }
}