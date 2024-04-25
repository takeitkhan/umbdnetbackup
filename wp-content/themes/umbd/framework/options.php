<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';

    //
    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => 'Configuration',
        'menu_slug' => 'configuration',
        'menu_position' => 2,
        'ajax_save' => true,
        'show_reset_all' => false,
        'framework_title' => 'Software Control <small>by Riptware</small>',
        'theme' => 'light',
    ));


    // Custom


    CSF::createSection($prefix, array(

        'title' => 'Header section',
        'fields' => array(

            //Field Start
            array(
                'id' => 'favicon',
                'type' => 'media',
                'title' => 'Favicon',
                'url' => false,
            ),

            array(
                'id' => 'logo',
                'type' => 'media',
                'title' => 'Upload Logo',
                'url' => false,
            ),
          
                 array(
                'id' => 'logo_size',
                'type' => 'slider',
                'title' => 'Logo Size',
            	),
          
            array(
                'id' => 'website_name',
                'type' => 'text',
                'title' => 'Website Name',
                'url' => false,
            ),

            array(
                'id' => 'phone',
                'type' => 'text',
                'title' => 'Phone',
            ),

            array(
                'id' => 'email',
                'type' => 'text',
                'title' => 'Email',
            ),

            array(
                'id' => 'address',
                'type' => 'text',
                'title' => 'Address',
            ),

            array(
                'id' => 'fb_link',
                'type' => 'text',
                'title' => 'Facebook Link',
                'default' => 'http://facebook.com/',
            ),
          /*

           array(
                'id' => 'twitter_link',
                'type' => 'text',
                'title' => 'Twitter Link',
                'default' => 'http://twitter.com/',
            ),
            */

            array(
                'id' => 'linkedin_link',
                'type' => 'text',
                'title' => 'Linkedin Link',
                'default' => 'http://linkedin.com/',
            ),


            array(
                'id' => 'instagram_link',
                'type' => 'text',
                'title' => 'Instagram Link',
                'default' => 'http://instagram.com/',
            ),

//            array(
//                'id' => 'pinterest_link',
//                'type' => 'text',
//                'title' => 'Pinterest Link',
//                'default' => 'http://pinterest.com/',
//            ),

            array(
                'id' => 'youtube_link',
                'type' => 'text',
                'title' => 'Youtube Link',
                'default' => 'http://youtube.com/',
            ),

//            array(
//                'id' => 'skype_link',
//                'type' => 'text',
//                'title' => 'Skype Link',
//                'default' => 'skype:live.',
//            ),

//            array(
//                'id' => 'behance_link',
//                'type' => 'text',
//                'title' => 'Behance Link',
//                'default' => '',
//            ),
            array(
                'id' => 'whatsapp_link',
                'type' => 'text',
                'title' => 'Whatsapp Link',
                'default' => '',
            ),

            array(
                'id' => 'google_maps_link',
                'type' => 'text',
                'title' => 'Google Maps Embeded Link',
                'default' => '',
            ),
//
//            array(
//                'id' => 'free_trial_link',
//                'type' => 'text',
//                'title' => 'Free Trial Link',
//                'default' => '',
//            ),
//
//            array(
//                'id' => 'quote_link',
//                'type' => 'text',
//                'title' => 'Get Quote Link',
//                'default' => '',
//            ),

        )


    ));


    // Homepage

    CSF::createSection($prefix, array(
        'id' => 'homepage_fields',
        'title' => 'Homepage Section',
        'icon' => 'fa fa-plus-circle',
    ));
    //Headline Section

    CSF::createsection($prefix, array(
        'parent' => 'homepage_fields',
        'title' => 'About Us', //Second Section
        'fields' => array(

            array(
                'title' => 'Title',
                'id' => 'about_us_title',
                'type' => 'text',
                //  'default' => 'Title',
            ), // End  title

            array(
                'title' => 'Sub Title',
                'id' => 'about_us_subtitle',
                'type' => 'text',
                //  'default' => 'Sub Title',
            ), // End  title

            array(
                'id' => 'about_us_page_id',
                'type' => 'select',
                'multiple' => false,
                'title' => 'Select page',
                'options' => 'pages',
                'chosen' => true,
                'width' => '200px',
                'query_args' => array(
                    'hide_empty' => false,
                    'posts_per_page' => -1
                ),
                //'desc'  => 'you can select multiple category',
            ), // End page

        ) // End field
    )); // End Section

    //SubOption

    //Home Featured Service
    /*
     CSF::createSection( $prefix, array(
      'parent' => 'homepage_fields',
      'title'  => 'Featured Service',
      'fields' => array(
          [
            'id' => 'homepage_featured_service',
            'title' => 'Select a service',
            'placeholder' => 'Select a service',
            'type'  => 'select',
            'sortable' => true,
            'chosen'      => true,
            'ajax'        => true,
            'options'     => 'posts',
            'query_args'  => [
              'post_type' => 'service'
            ]
          ],
        ),
    ));
    */

/**
    //Home Custom Service Section

    CSF::createSection($prefix, array(
        'parent' => 'homepage_fields',
        'title' => 'Service Category section',
        'fields' => [
            [
                'id' => 'home_service_category',
                'type' => 'select',
                'title' => 'Select Service Category',
                'desc' => 'You can select multiple category',
                'type' => 'select',
                'sortable' => true,
                'chosen' => true,
                //'ajax'        => true,
                'multiple' => true,
                'options' => 'categories',
                'query_args' => [
                    'taxonomy' => 'service-category',
                    'order' => 'DESC'
                ]
            ],
        ]
    ));


    //Home Custom Service Price

    CSF::createSection($prefix, array(
        'parent' => 'homepage_fields',
        'title' => 'Price section',
        'fields' => [
            [
                'id' => 'home_price',
                'type' => 'select',
                'title' => 'Select Service Category',
                'desc' => 'You can select multiple category',
                'type' => 'select',
                'sortable' => true,
                'chosen' => true,
                //'ajax'        => true,
                'multiple' => true,
                'options' => 'posts',
                'query_args' => [
                    'post_type' => 'service',
                    'order' => 'DESC',
                    'posts_per_page' => '-1',
                ]
            ],
        ]
    ));


    // Home Statistics Counter
    // Stats Counter

    CSF::createSection($prefix, array(
        'parent' => 'homepage_fields',
        'title' => 'Home Statistics Counter section',
        'fields' => array(
            array(
                'id' => 'home_stat_counter',
                'type' => 'group',
                'title' => '',
                'fields' => array(

                    //Stat Counter Logo

                    array(
                        'id' => 'home-stat-counter-name',
                        'type' => 'text',
                        'title' => 'Stat Item Name',
                    ),

                    array(
                        'id' => 'home-stat-counter-number',
                        'type' => 'text',
                        'title' => 'Stat Counter',
                    ),

                    array(
                        'id' => 'home-stat-counter-icon',
                        'type' => 'icon',
                        'title' => 'Icon',
                    ),


                ),
            ),
        ),
    ));


    //Tab & Accodion Section
    /*
    CSF::createSection( $prefix, array(
      'parent' => 'homepage_fields',
      'title'  => 'Company profile Section',
      'fields' => array(
        //Tab
        array(
        'id'        => 'home-tab-col',
        'type'      => 'group',
        'title'     => 'Tab Column',
        'fields'    => array(

             //Tab
              array(
                'id'    => 'tab-menu-title',
                'type'  => 'text',
                'title' => 'Title',
              ),
              array(
                'id'    => 'tab-menu-desc',
                'type'  => 'wp_editor',
                'title' => 'Description',
                'media_buttons' => true,
              ),

              array(
                'id'    => 'tab-menu-icon',
                'type'  => 'icon',
                'title' => 'Font Awesome Icon',
              ),
            ),
        ), // End Tab

         //Accorsion
        array(
        'id'        => 'home-accordion-col',
        'type'      => 'group',
        'title'     => 'Accordion Column',
        'fields'    => array(

             //
              array(
                'id'    => 'accordion-menu-title',
                'type'  => 'text',
                'title' => 'Title',
              ),
              array(
                'id'    => 'accordion-menu-desc',
                'type'  => 'wp_editor',
                'title' => 'Description',
                'media_buttons' => true,
              ),

              array(
                'id'    => 'accordion-menu-icon',
                'type'  => 'icon',
                'title' => 'Font Awesome Icon',
              ),
            ),
        ), // End Accordion


      )

   ));

  //Special Content
    CSF::createSection( $prefix, array(
      'parent' => 'homepage_fields',
      'title'  => 'Home Special Content section',
      'fields' => array(
          [
           'id'  => 'home_special_content',
           'type' => 'wp_editor',
          ],
       ),
    ));

  */
  
  
  	//Home Brand
  
  
  
    CSF::createSection($prefix, array(
        'parent' => 'homepage_fields',
        'title' => 'Home Brand section',
        'fields' => array(
            array(
                'id' => 'home-brand-title',
                'type' => 'text',
                'title' => 'Title',
            ),
            array(
                'id' => 'home_brand',
                'type' => 'group',
                'title' => 'Brand Logo',
                'fields' => array(

                    //Partner Logo

                    array(
                        'id' => 'home_brand_name',
                        'type' => 'text',
                        'title' => 'Partner Name',
                    ),


                    array(
                        'id' => 'home_brand_logo',
                        'type' => 'media',
                        'title' => 'Upload Logo',
                        'desc' => 'Logo size',
                        'url' => false,
                        'default' => array(
                            'url' => 'images/default.png',
                        ),
                    ),
                ),
            ),
        ),
    ));
  
  
  

    //  Home Partner

    CSF::createSection($prefix, array(
        'parent' => 'homepage_fields',
        'title' => 'Home Partner section',
        'fields' => array(
            array(
                'id' => 'home-partner-title',
                'type' => 'text',
                'title' => 'Title',
            ),
            array(
                'id' => 'home_partner',
                'type' => 'group',
                'title' => 'Partner Logo',
                'fields' => array(

                    //Partner Logo

                    array(
                        'id' => 'home_partner_name',
                        'type' => 'text',
                        'title' => 'Partner Name',
                    ),


                    array(
                        'id' => 'home_partner_logo',
                        'type' => 'media',
                        'title' => 'Upload Logo',
                        'desc' => 'Logo size 85x85',
                        'url' => false,
                        'default' => array(
                            'url' => 'images/default.png',
                        ),
                    ),
                ),
            ),
        ),
    ));
  
  
  
  
  
  

    //  Service

    CSF::createSection($prefix, array(
        'parent' => 'homepage_fields',
        'title' => 'Service Section',
        'fields' => array(
            array(
                'id' => 'service-title',
                'type' => 'text',
                'title' => 'Title',
            ),
            array(
                'id' => 'service-description',
                'type' => 'textarea',
                'title' => 'Description',
            ),
          
           	[
                'id' => 'home_featured_service',
                'type' => 'select',
                'title' => 'Select Service',
                'desc' => 'You can select multiple service',
                'type' => 'select',
                'sortable' => true,
                'chosen' => true,
                //'ajax'        => true,
                'multiple' => true,
                'options' => 'posts',
                'query_args' => [
                    'post_type' => 'service',
                    'order' => 'DESC',
                    'posts_per_page' => '-1',
                ]
            ],

        ),
    ));

    //Product

    CSF::createSection($prefix, array(
        'parent' => 'homepage_fields',
        'title' => 'Product Section',
        'fields' => array(
            array(
                'id' => 'product-title',
                'type' => 'text',
                'title' => 'Title',
            ),
            array(
                'id' => 'product-description',
                'type' => 'textarea',
                'title' => 'Description',
            ),
          
             [
                'id' => 'home_featured_product',
                'type' => 'select',
                'title' => 'Select Product',
                'desc' => 'You can select multiple product',
                'type' => 'select',
                'sortable' => true,
                'chosen' => true,
                //'ajax'        => true,
                'multiple' => true,
                'options' => 'posts',
                'query_args' => [
                    'post_type' => 'product',
                    'order' => 'DESC',
                    'posts_per_page' => '-1',
                ]
            ],

        ),
    ));


    //  Testimonial

    CSF::createSection($prefix, array(
        'parent' => 'homepage_fields',
        'title' => 'Testimonial Section',
        'fields' => array(
            array(
                'id' => 'testimonial-title',
                'type' => 'text',
                'title' => 'Title',
            ),
            array(
                'id' => 'testimonial-description',
                'type' => 'textarea',
                'title' => 'Description',
            ),

        ),
    ));

    //Home Custom Service Price
  

	
  
      //Offer Section
  CSF::createSection( $prefix, array(
    'parent' => 'homepage_fields',
    'title'  => 'Popup Offer section',
    'fields' => array(
        
        
        array(
          'id'    => 'home_popup_ads',
          'type'  => 'wp_editor',
          'title' => 'Homepage Popup Ads',
          'tinymce'       => true,
          'quicktags'     => true,
           'sanitize' => false,
         ),
         
        


     ),
  ));  
  
  
  
  
  
  
  
  
  
  
  
   CSF::createSection($prefix, array(

        'title' => 'Gallery Section',
      	'icon' => 'fa fa-image',
        'fields' => array(

            //Field Start
            array(
                'id' => 'gallery_section',
                'type' => 'gallery',
                'title' => 'Gallery',
            ),

        )


    ));



}


?>