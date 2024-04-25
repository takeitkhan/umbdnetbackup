<?php 
function aftertheme_default_functions() {
    
    // Add Title Tag   
    add_theme_support ('title-tag');
	
	//add_theme_support (title-tag);
	add_theme_support ('post-thumbnails');
    add_post_type_support( 'page', 'excerpt' );
		
	//excerpt
	function excerpt($limit){
		$content = preg_replace("/<img(.*?)>/si", "", get_the_content());
		//$post_content = explode(" " , get_the_content());
		$post_content = explode(" " , $content);
		$less_content = array_slice ($post_content, 0, $limit);
		echo implode (" ", $less_content);
	}

    function pageExcerptById($limit, $pageId){
        $page =  get_post($pageId);
        $content = preg_replace("/<img(.*?)>/si", "", $page->post_content);
        //$post_content = explode(" " , get_the_content());
        $post_content = explode(" " , $page->post_content);
        $less_content = array_slice ($post_content, 0, $limit);
        echo implode (" ", $less_content);
    }

    function riptware_custom_excerpt_length( $length ) {
    	return 20;
    }
    add_filter( 'excerpt_length', 'riptware_custom_excerpt_length', 999 );
}
add_action('after_setup_theme' , 'aftertheme_default_functions');


//include_once get_template_directory(). '/func/MinifyHtml.php';


//Load Nav Menu
register_nav_menus( array(
	'primary' => __( 'Primary Menu', '' ),
  	'header_top' => __( 'Header Top Menu', '' ),
    'footer' => __( 'Footer Menu', '' ),
) );
require_once get_template_directory().'/func/NavMenuWalker.php';
require_once get_template_directory().'/func/WidgetNavMenu.php';

//Load framework
include_once get_template_directory(). '/framework/init.php';
include_once get_template_directory(). '/framework/options.php';



//Load Home Slider
include_once get_template_directory(). '/func/home_slider.php';

//Load Portfolio
include_once get_template_directory(). '/func/post-type-portfolio-items.php';

//Load service
include_once get_template_directory(). '/func/post-type-service.php';

// Load product
include_once get_template_directory(). '/func/post-type-product.php';

//Load Gallery
//include_once get_template_directory(). '/func/post-type-gallery.php';

//Load Price
// include_once get_template_directory(). '/func/post-type-price.php';

//Load Price
include_once get_template_directory(). '/func/post-type-testimonials.php';

//Load paginition

include get_template_directory(). '/func/b4-paginate.php';

//require_once get_template_directory(). '/vendor/loader.php';


//Load meta Fields

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/metafields/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/metafields/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );
//acf
include get_template_directory(). '/func/acf_field.php';

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return true;
}


/** Load vendor  */
include get_template_directory(). '/vendor/tinymce-advanced/tinymce-advanced.php';
include get_template_directory(). '/vendor/contact-information-widget/contact-information.php';

//Load widget
include get_template_directory(). '/func/widgets.php';


//Remove all classes and IDs from Nav Menu
  function wp_nav_menu_remove($var) {
     return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
  }
  add_filter('page_css_class', 'wp_nav_menu_remove', 100, 1);
  add_filter('nav_menu_item_id', 'wp_nav_menu_remove', 100, 1);
  add_filter('nav_menu_css_class', 'wp_nav_menu_remove', 100, 1);



  /** Tinymce Table */
  // add the filter 

	function renderCssJs($filePath){
      //add_filter( 'jetpack_implode_frontend_css', '__return_false' );
      
      //return apply_filters('WP_SHARING_PLUGIN_URL', get_template_directory_uri().'/'.$filePath);
      return  get_template_directory_uri().'/'.$filePath;
    }






//Element Render Block

/*
function js_defer_attr( $tag ){
  // add defer to all  scripts tags
  return str_replace( ' src', ' defer="defer" src', $tag );
}
add_filter( 'script_loader_tag', 'js_defer_attr', 10 );
*/


function move_scripts_to_footer() {
    remove_action( 'wp_head', 'wp_print_scripts' );
    remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
    remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
    add_action( 'wp_footer', 'wp_print_scripts', 5 );
    add_action( 'wp_footer', 'wp_enqueue_scripts', 5 );
    add_action( 'wp_footer', 'wp_print_head_scripts', 5 );
}
add_action( 'wp_head', 'move_scripts_to_footer', -1 );


add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
	wp_deregister_script('heartbeat');
}

//shortcode
include_once get_template_directory(). '/func/shortcode/social-icon.php';
include_once get_template_directory(). '/func/shortcode/gallery.php';