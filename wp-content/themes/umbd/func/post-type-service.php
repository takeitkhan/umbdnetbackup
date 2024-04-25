<?php

//Service 
register_post_type('service', array(
    'labels' => array(
        'name' => 'Service',
        'add_new_item' => 'Add New Portfolio',
        'featured_image' => 'Upload or Update Portfolio Image (550x500)',
        'set_featured_image' => 'Set Porfolio Image',
    ),
    'public' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'menu_position' => 8,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => array('title', 'editor', 'excerpt')
));

//Servvice Taxonomy
//	register_taxonomy('service-category' ,'service', array(
//         'labels' =>  array(
//            'name' => 'Category',
//
//         ),
//
//         'public' => true,
//         'hierarchical' => true,
//
//
//	));