<?php

/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'resta_scripts' );

function resta_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/menu-styles.css.', array(), null );
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), null );
	wp_enqueue_style( 'magnific', get_template_directory_uri() . '/css/magnific-popup.css', array(), null );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), null );
	wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/css/themify-icons.css', array(), null );
	wp_enqueue_style( 'gijgo', get_template_directory_uri() . '/css/gijgo.css', array(), null );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/css/nice-select.css', array(), null );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), null );
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.css', array(), null );
	wp_enqueue_style( 'resta', get_template_directory_uri() . '/css/style.css', array(), null );}
	
function enqueue_custom_scripts() {
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-3.5.0.min.js', array(), '3.5.0', true );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery-1.12.4.min.js', array(), '1.12.4', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), '', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '', true );
    wp_enqueue_script( 'ajax-form', get_template_directory_uri() . '/js/ajax-form.js', array(), '', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '', true );
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '', true );
    wp_enqueue_script( 'scrollIt', get_template_directory_uri() . '/js/scrollIt.js', array(), '', true );
    wp_enqueue_script( 'scrollUp', get_template_directory_uri() . '/js/jquery.scrollUp.min.js', array(), '', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), '', true );
    wp_enqueue_script( 'gijgo', get_template_directory_uri() . '/js/gijgo.min.js', array(), '', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/js/nice-select.min.js', array(), '', true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array(), '', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '', true );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array(), '', true );
    wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.js', array(), '', true );
    wp_enqueue_script( 'ajaxchimp', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array(), '', true );
    wp_enqueue_script( 'form', get_template_directory_uri() . '/js/jquery.form.js', array(), '', true );
    wp_enqueue_script( 'validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), '', true );
    wp_enqueue_script( 'mail-script', get_template_directory_uri() . '/js/mail-script.js', array(), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '', true );

    // ~{'%'`'R'Q'S']'V'_'Z'V~} ~{'Y'Q'S'Z'c'Z'^'`'c'd'Z~} ~{'U']'q~} jQuery UI Datepicker
    wp_enqueue_script( 'jquery-ui-datepicker' );

    // ~{','`'U~} ~{'Z'_'Z'h'Z'Q']'Z'Y'Q'h'Z'Z~} Datepicker
    wp_add_inline_script( 'main', "
        jQuery('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class=\"fa fa-calendar-o\"></span>'
            }
        });
        jQuery('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class=\"fa fa-calendar-o\"></span>'
            }
        });
    " );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );


/*function resta_menus() {
   $locations = array(
      'header' => __('Header Menu', 'resta'),
      'footer' => __('Footer Menu', 'resta'),
   );
   register_nav_menus($locations);
}
add_action('init', 'resta_menus');
*/
function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'secondary-menu' => __( 'Secondary Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


class bootstrap_4_walker_nav_menu extends Walker_Nav_menu {

    function start_lvl(&$output, $depth = 0, $args = null){ // ul
        $indent = str_repeat("\t",$depth); // indents the outputted HTML
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"submenu$submenu depth_$depth\">\n";
    }
  
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span
        
        $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
        
        $li_attributes = '';
        $class_names = $value = '';
    
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-menu';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
        
        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
        
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';
        
        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    
    }
    
}







