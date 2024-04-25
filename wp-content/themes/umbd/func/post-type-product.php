<?php

//Service 
register_post_type('product', array(
    'labels' => array(
        'name' => 'Product',
        'add_new_item' => 'Add New Product',
        'featured_image' => 'Upload or Update Product Image (550x500)',
        'set_featured_image' => 'Set Product Image',
    ),
    'public' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-products',
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
));

// Product Taxonomy
register_taxonomy('product-category', 'product', array(
    'labels' => array(
        'name' => 'Product Category',
    ),

    'public' => true,
    'hierarchical' => true,


));


/**
 * Hide the term description in the edit form
 */
add_action( 'product-category_add_form', function( $taxonomy )
{
    ?><style>.term-description-wrap{display:none;}</style><?php
}, 10, 2 );

add_action( 'product-category_edit_form', function( $taxonomy )
{
    ?><style>
			.term-description-wrap{display:none;}
		#edittag {max-width: 100%; }
	</style>
<?php
}, 10, 2 );

$taxonomy = 'product-category';


/*
 * Add columns to exhibition post list
 */
 function add_acf_columns ( $columns ) {
   return array_merge ( $columns, array ( 
     'start_date' => __ ( 'Starts' ),
     'end_date'   => __ ( 'Ends' ) 
   ) );
 }
 add_filter ( 'manage_exhibition_posts_columns', 'add_acf_columns' );