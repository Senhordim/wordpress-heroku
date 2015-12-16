<?php

/* ************************************************************************************** 
Header
************************************************************************************** */

$wp_customize->add_section( 'swm_customizer_header', array(
    'title'    => __( 'Header', 'swmtranslate' ),
    'priority' => 30
));

$wp_customize->add_setting( 'swm_customizer_header_settings' );


/* ************************************************************************************** 
Title
************************************************************************************** */

$wp_customize->add_setting( 'swm_header_section_info' );

$wp_customize->add_control(
    new SWM_Customize_Description( $wp_customize, 'swm_header_section_info', array(
      'label'    => __( 'Page title font size and color you can set from "Fonts" section', 'swmtranslate' ),
      'section'  => 'swm_customizer_header',
      'settings' => 'swm_header_section_info',
      'priority' => 1
    ))
);

$wp_customize->add_setting( 'swm_header_title' );

$wp_customize->add_control(
    new SWM_Customize_Sub_Title( $wp_customize, 'swm_header_title', array(
        'label'    => __( 'Page Title', 'swmtranslate' ),
        'section'  => 'swm_customizer_header',
        'settings' => 'swm_header_title',
        'priority' => 6
    ))
);

$wp_customize->add_setting( 'swm_page_title_bg', array(
    'default' => '#093f7f'
));

$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'swm_page_title_bg', array(
        'label'    => __( 'Background Color', 'swmtranslate' ),
        'section'  => 'swm_customizer_header',
        'settings' => 'swm_page_title_bg',
        'priority' => 7
    ))
);

$wp_customize->add_setting( 'page_title_bg_opacity', array(
'default' => '90'
));

$wp_customize->add_control(           
    new SWM_Customize_Slider_Control( $wp_customize, 'page_title_bg_opacity', array(
        'label'    => __( 'Background Color Opacity (%)', 'swmtranslate' ),
        'section' => 'swm_customizer_header',
        'settings' => 'page_title_bg_opacity',       
        'priority' => 8
    ))
);


/* ************************************************************************************** 
Background
************************************************************************************** */

$wp_customize->add_setting( 'swm_header_background' );

$wp_customize->add_control(
    new SWM_Customize_Sub_Title( $wp_customize, 'swm_header_background', array(
        'label'    => __( 'Header Background', 'swmtranslate' ),
        'section'  => 'swm_customizer_header',
        'settings' => 'swm_header_background',
        'priority' => 9
    ))
);


$wp_customize->add_setting( 'swm_header_bg_color', array(
    'default' => '#28415f'
));

$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'swm_header_bg_color', array(
        'label'    => __( 'Background Color', 'swmtranslate' ),
        'section'  => 'swm_customizer_header',
        'settings' => 'swm_header_bg_color',
        'priority' => 10
    ))
);

$wp_customize->add_setting( 'swm_header_bg_image' );

$wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize, 'swm_header_bg_image', array(
        'label'    => __( 'Background Image', 'swmtranslate' ),
        'section'  => 'swm_customizer_header',
        'settings' => 'swm_header_bg_image',
        'priority' => 11
    ))
);

$wp_customize->add_setting( 'swm_header_bg_position', array(
    'default' => 'center'
));

$wp_customize->add_control( 'swm_header_bg_position', array(
    'type'     => 'select',
    'label'    => __( 'Background Position', 'swmtranslate' ),
    'section'  => 'swm_customizer_header',
    'priority' => 12,
    'choices'  => array(
        "left-top"      => __( 'Left Top', 'swmtranslate' ),
        "left-center"   => __( 'Left Center', 'swmtranslate' ),
        "left-bottom"   => __( 'Left Bottom', 'swmtranslate' ),
        "right-top"     => __( 'Right Top', 'swmtranslate' ),
        "right-center"  => __( 'Right Center', 'swmtranslate' ),
        "right-bottom"  => __( 'Right Bottom', 'swmtranslate' ),
        "center-top"    => __( 'Center Top', 'swmtranslate' ),
        "center-center" => __( 'Center Center', 'swmtranslate' ),
        "center-bottom" => __( 'Center Bottom', 'swmtranslate' )
    )
));

$wp_customize->add_setting( 'swm_header_bg_repeat', array(
    'default' => 'repeat'
));

$wp_customize->add_control( 'swm_header_bg_repeat', array(
    'type'     => 'select',
    'label'    => __( 'Background Repeat', 'swmtranslate' ),
    'section'  => 'swm_customizer_header',
    'priority' => 13,
    'choices'  => array(
        'repeat'    => __( 'Repeat', 'swmtranslate' ),
        'no-repeat' => __( 'No Repeat', 'swmtranslate' ),
        'repeat-x'  => __( 'Repeat X', 'swmtranslate' ),
        'repeat-y'  => __( 'Repeat Y', 'swmtranslate' )       
    )
));

$wp_customize->add_setting( 'swm_header_bg_attachment', array(
    'default' => 'scroll'
));

$wp_customize->add_control( 'swm_header_bg_attachment', array(
    'type'     => 'select',
    'label'    => __( 'Background Attachment', 'swmtranslate' ),
    'section'  => 'swm_customizer_header',
    'priority' => 14,
    'choices'  => array(
        'scroll'    => __( 'Scroll', 'swmtranslate' ),
        'fixed' => __( 'Fixed', 'swmtranslate' )          
    )
));

$wp_customize->add_setting( 'swm_header_bg_stretch', array(
    'default' => 0
));

$wp_customize->add_control( 'swm_header_bg_stretch', array(
    'type'     => 'checkbox',
    'label'    => __( '100% Background Image Width', 'swmtranslate' ),
    'section'  => 'swm_customizer_header',
    'priority' => 15 
));


/* Header Height -------------------------------------------------- */

$wp_customize->add_setting( 'swm_header_height', array(
'default' => '300'
));

$wp_customize->add_control( 'swm_header_height', array(
'type'     => 'text',
'label'    => __( 'Header Height', 'swmtranslate' ),
'section'  => 'swm_customizer_header',
'priority' => 30
));

/* Parallax Scroll -------------------------------------------------- */


$wp_customize->add_setting( 'swm_enable_parallax_effect', array(
    'default' => 0
));

$wp_customize->add_control( 'swm_enable_parallax_effect', array(
    'type'     => 'checkbox',
    'label'    => __( 'Enable Parallax Scrolling', 'swmtranslate' ),
    'section'  => 'swm_customizer_header',
    'priority' => 39  
));


$wp_customize->add_setting( 'swm_header_parallax_speed', array(
'default' => '2.5'
));

$wp_customize->add_control(           
    new SWM_Customize_Parallax_Slider_Control( $wp_customize, 'swm_header_parallax_speed', array(
        'label'    => __( 'Background Image Scroll Speed', 'swmtranslate' ),
        'section' => 'swm_customizer_header',
        'settings' => 'swm_header_parallax_speed',       
        'priority' => 49
    ))
);