<?php


// widget
function website_sidebar(){

    register_sidebar(array(
        'name' => 'Footer Widget',
        'description' => 'Add your Footer Widgets',
        'id' => 'footer_widget',
        'before_widget' => '<div class="col-lg-3 footer-col-4"><div class="widget widget_services border-0 mb-3">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h5 class="footer-title text-white mb-2">',
        'after_title'   => '</h5>',
    ));


    //register MegaMenu widget if the Mega Menu is set as the menu location
    $location = 'primary';
    $css_class = 'mega-menu-parent';
    $locations = get_nav_menu_locations();
    if ( isset( $locations[ $location ] ) ) {
        $menu = get_term( $locations[ $location ], 'nav_menu' );
        if ( $items = wp_get_nav_menu_items( $menu->name ) ) {
            foreach ( $items as $item ) {
                if ( in_array( $css_class, $item->classes ) ) {
                    register_sidebar( array(
                        'id'   => 'mega-menu-item-' . $item->ID,
                        'description' => 'Mega Menu items',
                        'name' => $item->title . ' - Mega Menu',
                        'before_widget' => '<div class="col-lg-3">',
                        'after_widget' => '</div>',
                        'before_title'  => '<div class="megamenu-ttl">',
                        'after_title'   => '</div>',
                    ));
                }
            }
        }
    }



}
add_action('widgets_init' , 'website_sidebar');

//Shortcode Support
add_filter( 'widget_text', 'do_shortcode' );
