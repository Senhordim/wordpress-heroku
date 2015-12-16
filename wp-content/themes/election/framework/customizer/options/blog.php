<?php

/* ************************************************************************************** 
Blog
************************************************************************************** */

$wp_customize->add_section( 'swm_customizer_blog', array(
    'title'    => __( 'Blog', 'swmtranslate' ),
    'priority' => 80
));

$swm_blog_layout = array(
    "layout-sidebar-right" => __( 'Sidebar Right','swmtranslate' ),
    "layout-sidebar-left" => __( 'Sidebar Left','swmtranslate' ),
    "layout-full-width" => __( 'Full Width','swmtranslate' )   
);

$swm_blog_style = array(
    "blog-style-standard" => __( 'Standard','swmtranslate' ),
    "blog-style-grid" => __( 'Grid','swmtranslate' ),        
    "blog-style-fullwidth" => __( 'Full Width','swmtranslate' )   
);

$swm_blog_style_single = array(
    "blog-style-standard" => __( 'Standard','swmtranslate' ),    
    "blog-style-fullwidth" => __( 'Full Width','swmtranslate' )   
);

$swm_blog_grid_column = array(
    "swm_column2" => __( '2 Column','swmtranslate' ),
    "swm_column3" => __( '3 Column','swmtranslate' ),
    "swm_column4" => __( '4 Column','swmtranslate' )    
);

$wp_customize->add_setting( 'swm_blog_all_layout', array(
    'default' => 'layout-sidebar-right'
));

$wp_customize->add_control( 'swm_blog_all_layout', array(
    'type'     => 'select',
    'label'    => __( 'Default Blog Layout', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 29,
    'choices'  => $swm_blog_layout
));

$wp_customize->add_setting( 'swm_blog_section_info' );

$wp_customize->add_control(
    new SWM_Customize_Description( $wp_customize, 'swm_blog_section_info', array(
      'label'    => __( 'Select your preferred layout for blog pages like archive, categories, author and tags etc. blog pages.', 'swmtranslate' ),
      'section'  => 'swm_customizer_blog',
      'settings' => 'swm_blog_section_info',
      'priority' => 30
    ))
);

$wp_customize->add_setting( 'swm_blog_all_style', array(
    'default' => 'blog-style-standard'
));

$wp_customize->add_control( 'swm_blog_all_style', array(
    'type'     => 'select',
    'label'    => __( 'Blog Style', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 31,
    'choices'  => $swm_blog_style
));

$wp_customize->add_setting( 'swm_blog_grid_column', array(
    'default' => 'swm_column3'
));

$wp_customize->add_control( 'swm_blog_grid_column', array(
    'type'     => 'select',
    'label'    => __( 'Blog Grid Column', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 32,
    'choices'  => $swm_blog_grid_column
));



$wp_customize->add_setting( 'swm_show_excerpt', array(
    'default' => 1
));

$wp_customize->add_control( 'swm_show_excerpt', array(
    'type'     => 'checkbox',
    'label'    => __( 'Display Excerpt', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 33
));

$wp_customize->add_setting( 'swm_excerpt_length', array(
'default' => '320'
));

$wp_customize->add_control( 'swm_excerpt_length', array(
    'type'     => 'text',
    'label'    => __( 'Excerpt Length', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 34
));

$wp_customize->add_setting( 'swm_blog_pagination_style', array(
'default' => 'standard'
));

$wp_customize->add_control( 'swm_blog_pagination_style', array(
    'type'     => 'select',
    'label'    => __( 'Pagination Style', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 35,
    'choices'  => array(
	    "standard" => __( 'Standard','swmtranslate' ),
	    "next-prev" => __( 'Next - Previous','swmtranslate' ),        
	    "infinite-scroll" => __( 'Infinite Scroll','swmtranslate' )   
	)
));

$wp_customize->add_setting( 'swm_multiple_featured_imgs', array(
'default' => '5'
));

$wp_customize->add_control( 'swm_multiple_featured_imgs', array(
'type'     => 'text',
'label'    => __( 'How Many Multiple Featued Images', 'swmtranslate' ),
'section'  => 'swm_customizer_blog',
'priority' => 60
));

$wp_customize->add_setting( 'swm_blog_exclude_cats', array(
'default' => ''
));

$wp_customize->add_control( 'swm_blog_exclude_cats', array(
'type'     => 'text',
'label'    => __( 'Exclude Categories from Blog', 'swmtranslate' ),
'section'  => 'swm_customizer_blog',
'priority' => 61
));

$wp_customize->add_setting( 'swm_blog_exclude_cat_info' );

$wp_customize->add_control(
    new SWM_Customize_Description( $wp_customize, 'swm_blog_exclude_cat_info', array(
      'label'    => __( 'Add category IDs, seperated by commas. ( e.g. 1,34,55 )', 'swmtranslate' ),
      'section'  => 'swm_customizer_blog',
      'settings' => 'swm_blog_exclude_cat_info',
      'priority' => 62
    ))
);

$wp_customize->add_setting( 'swm_display_post_year', array(
    'default' => 0
));

$wp_customize->add_control( 'swm_display_post_year', array(
    'type'     => 'checkbox',
    'label'    => __( 'Enable Post Year in Date Box', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 63
));

/* ************************************************************************************** 
Blog Single Page
************************************************************************************** */

$wp_customize->add_setting( 'swm_blog_single_title' );

$wp_customize->add_control(
    new SWM_Customize_Sub_Title( $wp_customize, 'swm_blog_single_title', array(
        'label'    => __( 'Blog Single Page', 'swmtranslate' ),
        'section'  => 'swm_customizer_blog',
        'settings' => 'swm_blog_single_title',
        'priority' => 100
    ))
);

$wp_customize->add_setting( 'swm_single_featured_imgvid', array(
    'default' => 1
));

$wp_customize->add_control( 'swm_single_featured_imgvid', array(
    'type'     => 'checkbox',
    'label'    => __( 'Display Featured Image/Video', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 112
));

$wp_customize->add_setting( 'swm_single_about_author', array(
    'default' => 1
));

$wp_customize->add_control( 'swm_single_about_author', array(
    'type'     => 'checkbox',
    'label'    => __( 'Display About Author Box', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 113
));

$wp_customize->add_setting( 'swm_single_comments', array(
    'default' => 1
));

$wp_customize->add_control( 'swm_single_comments', array(
    'type'     => 'checkbox',
    'label'    => __( 'Display Post Comments', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 114
));

$wp_customize->add_setting( 'swm_single_image_lightbox', array(
    'default' => 1
));

$wp_customize->add_control( 'swm_single_image_lightbox', array(
    'type'     => 'checkbox',
    'label'    => __( 'Featured Image Lightbox', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 115
));

$wp_customize->add_setting( 'swm_single_page_title', array(
'default' => 'Blog'
));

$wp_customize->add_control( 'swm_single_page_title', array(
'type'     => 'text',
'label'    => __( 'Single Page Title', 'swmtranslate' ),
'section'  => 'swm_customizer_blog',
'priority' => 116
));

$wp_customize->add_setting( 'swm_blog_single_title_info' );

$wp_customize->add_control(
    new SWM_Customize_Description( $wp_customize, 'swm_blog_single_title_info', array(
      'label'    => __( 'Leave above field blank to display default post title in header section.', 'swmtranslate' ),
      'section'  => 'swm_customizer_blog',
      'settings' => 'swm_blog_single_title_info',
      'priority' => 117
    ))
);

$wp_customize->add_setting( 'swm_blog_page_url', array(
'default' => '#'
));

$wp_customize->add_control( 'swm_blog_page_url', array(
'type'     => 'text',
'label'    => __( 'Blog Page URL', 'swmtranslate' ),
'section'  => 'swm_customizer_blog',
'priority' => 118
));

$wp_customize->add_setting( 'swm_blog_page_url_info' );

$wp_customize->add_control(
    new SWM_Customize_Description( $wp_customize, 'swm_blog_page_url_info', array(
      'label'    => __( 'Enter the URL to blog main page to use in breadcrumbs.', 'swmtranslate' ),
      'section'  => 'swm_customizer_blog',
      'settings' => 'swm_blog_page_url_info',
      'priority' => 119
    ))
);


/* ************************************************************************************** 
Author Page
************************************************************************************** */

$wp_customize->add_setting( 'swm_blog_author_title' );

$wp_customize->add_control(
    new SWM_Customize_Sub_Title( $wp_customize, 'swm_blog_author_title', array(
        'label'    => __( 'Author Page', 'swmtranslate' ),
        'section'  => 'swm_customizer_blog',
        'settings' => 'swm_blog_single_title',
        'priority' => 200
    ))
);

$wp_customize->add_setting( 'swm_show_author_bio', array(
    'default' => 1
));

$wp_customize->add_control( 'swm_show_author_bio', array(
    'type'     => 'checkbox',
    'label'    => __( 'Display Author Biographical Info', 'swmtranslate' ),
    'section'  => 'swm_customizer_blog',
    'priority' => 201
));