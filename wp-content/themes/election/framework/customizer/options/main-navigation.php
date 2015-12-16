<?php

/* ************************************************************************************** 
    Main Navigation
************************************************************************************** */

$wp_customize->add_section( 'swm_customizer_main_nav', array(
    'title'    => __( 'Main Navigation', 'swmtranslate' ),
    'priority' => 40
));


$wp_customize->add_setting( 'swm_display_sticky_nav', array(
    'default' => 0
));

$wp_customize->add_control( 'swm_display_sticky_nav', array(
    'type'     => 'checkbox',
    'label'    => __( 'Enable Sticky Navigation Style', 'swmtranslate' ),
    'section'  => 'swm_customizer_main_nav',
    'priority' => 29  
));

/* ************************************************************************************** 
    Navigation Background
************************************************************************************** */

$wp_customize->add_setting( 'swm_nav_nav_bg_heading' );

$wp_customize->add_control(
    new SWM_Customize_Sub_Title( $wp_customize, 'swm_nav_nav_bg_heading', array(
        'label'    => __( 'Navigation Background', 'swmtranslate' ),
        'section'  => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_nav_bg_heading',
        'priority' => 33
    ))
);

$wp_customize->add_setting( 'swm_main_nav_section_info' );

$wp_customize->add_control(
    new SWM_Customize_Description( $wp_customize, 'swm_main_nav_section_info', array(
      'label'    => __( 'Navigation background will display besid logo section which includes top bar and main navigation links.', 'swmtranslate' ),
      'section'  => 'swm_customizer_main_nav',
      'settings' => 'swm_main_nav_section_info',
      'priority' => 34
    ))
);

$wp_customize->add_setting( 'swm_nav_background_color', array(
'default' => '#222945'
));

$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'swm_nav_background_color', array(
        'label'    => __( 'Background Color', 'swmtranslate' ),
        'section'  => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_background_color',
        'priority' => 35
    ))
);

$wp_customize->add_setting( 'swm_nav_bg_opacity', array(
'default' => '80'
));

$wp_customize->add_control(           
    new SWM_Customize_Slider_Control( $wp_customize, 'swm_nav_bg_opacity', array(
        'label'    => __( 'Background Color Opacity', 'swmtranslate' ),
        'section' => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_bg_opacity',       
        'priority' => 36
    ))
);

/* ************************************************************************************** 
    Donate Button
************************************************************************************** */

$wp_customize->add_setting( 'swm_nav_donate_button' );

$wp_customize->add_control(
    new SWM_Customize_Sub_Title( $wp_customize, 'swm_nav_donate_button', array(
        'label'    => __( 'Donate Button Styling', 'swmtranslate' ),
        'section'  => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_donate_button',
        'priority' => 37
    ))
);

$wp_customize->add_setting( 'swm_main_donate_button_info' );

$wp_customize->add_control(
    new SWM_Customize_Description( $wp_customize, 'swm_main_donate_button_info', array(
      'label'    => __( 'You can add button style for last navigation link to get visitors attention.', 'swmtranslate' ),
      'section'  => 'swm_customizer_main_nav',
      'settings' => 'swm_main_donate_button_info',
      'priority' => 38
    ))
);


$wp_customize->add_setting( 'swm_display_donate_button', array(
    'default' => 1
));

$wp_customize->add_control( 'swm_display_donate_button', array(
    'type'     => 'checkbox',
    'label'    => __( 'Enable Donate Button Style', 'swmtranslate' ),
    'section'  => 'swm_customizer_main_nav',
    'priority' => 39  
));


$wp_customize->add_setting( 'swm_nav_donate_text_color', array(
'default' => '#ffffff'
));

$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'swm_nav_donate_text_color', array(
        'label'    => __( 'Button Text Color', 'swmtranslate' ),
        'section'  => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_donate_text_color',
        'priority' => 41
    ))
);


$wp_customize->add_setting( 'swm_nav_donate_background_color', array(
'default' => '#bb3941'
));

$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'swm_nav_donate_background_color', array(
        'label'    => __( 'Button Background Color', 'swmtranslate' ),
        'section'  => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_donate_background_color',
        'priority' => 42
    ))
);


$wp_customize->add_setting( 'swm_nav_donate_hover_text_color', array(
'default' => '#ffffff'
));

$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'swm_nav_donate_hover_text_color', array(
        'label'    => __( 'Button Mouseover Text Color', 'swmtranslate' ),
        'section'  => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_donate_hover_text_color',
        'priority' => 43
    ))
);


$wp_customize->add_setting( 'swm_nav_donate_hover_background_color', array(
'default' => '#093f7f'
));

$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'swm_nav_donate_hover_background_color', array(
        'label'    => __( 'Button Mouseover Background Color', 'swmtranslate' ),
        'section'  => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_donate_hover_background_color',
        'priority' => 44
    ))
);

/* ************************************************************************************** 
    Active Link
************************************************************************************** */

$wp_customize->add_setting( 'swm_nav_active_icon' );

$wp_customize->add_control(
    new SWM_Customize_Sub_Title( $wp_customize, 'swm_nav_active_icon', array(
        'label'    => __( 'Active Link Styling', 'swmtranslate' ),
        'section'  => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_active_icon',
        'priority' => 45
    ))
);


$wp_customize->add_setting( 'swm_display_active_link', array(
    'default' => 1
));

$wp_customize->add_control( 'swm_display_active_link', array(
    'type'     => 'checkbox',
    'label'    => __( 'Display Active Link', 'swmtranslate' ),
    'section'  => 'swm_customizer_main_nav',
    'priority' => 46  
));

/* Active Link Arrow Color  -------------------------------------------------- */

$wp_customize->add_setting( 'swm_nav_active_link_bg', array(
'default' => '#093f7f'
));

$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'swm_nav_active_link_bg', array(
        'label'    => __( 'Active Link Arrow Color', 'swmtranslate' ),
        'section'  => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_active_link_bg',
        'priority' => 47
    ))
);

/* Active Link Icon Color  -------------------------------------------------- */

$wp_customize->add_setting( 'swm_nav_active_icon_color', array(
'default' => '#ffffff'
));

$wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'swm_nav_active_icon_color', array(
        'label'    => __( 'Active Link Icon Color', 'swmtranslate' ),
        'section'  => 'swm_customizer_main_nav',
        'settings' => 'swm_nav_active_icon_color',
        'priority' => 48
    ))
);

/* Active Link Arrow Opacity  -------------------------------------------------- */

$wp_customize->add_setting( 'swm_active_arrow_opacity', array(
'default' => '80'
));

$wp_customize->add_control(           
    new SWM_Customize_Slider_Control( $wp_customize, 'swm_active_arrow_opacity', array(
        'label'    => __( 'Active Link Arrow Opacity', 'swmtranslate' ),
        'section' => 'swm_customizer_main_nav',
        'settings' => 'swm_active_arrow_opacity',       
        'priority' => 49
    ))
);

/* Active Icon  -------------------------------------------------- */

$wp_customize->add_setting( 'swm_nav_active_icon_info' );

$wp_customize->add_control(
    new SWM_Customize_Description( $wp_customize, 'swm_nav_active_icon_info', array(
      'label'    => __( 'Get icon names from URL : http://fontawesome.io/icons/', 'swmtranslate' ),
      'section'  => 'swm_customizer_main_nav',
      'settings' => 'swm_nav_active_icon_info',
      'priority' => 50
    ))
);

$sm_links_number = 51;

for ($i = 1; $i < 11; $i++) {   

    $sm_links_number++;

    $nav_link_number = 'nav_link_icon' . $i;
    $nav_link_icon = sprintf( __( 'Link %s Icon','swmtranslate' ) ,$i );

    $wp_customize->add_setting( $nav_link_number, array(
        'default' => 'fa-home'
    ));

   $wp_customize->add_control(
        new SWM_Customize_Control_Mini_Text( $wp_customize, $nav_link_number, array(
            'type'     => 'minitext',
            'label'    => $nav_link_icon,
            'section'  => 'swm_customizer_main_nav',
            'priority' => $sm_links_number
        ))
    );
        
}


