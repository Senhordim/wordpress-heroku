<?php

/* ************************************************************************************** 
Portfolio
************************************************************************************** */

$wp_customize->add_section( 'swm_customizer_event', array(
    'title'    => __( 'The Event Calendar Plugin', 'swmtranslate' ),
    'priority' => 200
));

$swm_eveny_layout = array(
    "layout-sidebar-right" => __( 'Sidebar Right','swmtranslate' ),
    "layout-sidebar-left" => __( 'Sidebar Left','swmtranslate' ),
    "layout-full-width" => __( 'Full Width','swmtranslate' )   
);

$wp_customize->add_setting( 'swm_event_page_layout', array(
    'default' => 'layout-full-width'
));

$wp_customize->add_control( 'swm_event_page_layout', array(
    'type'     => 'select',
    'label'    => __( 'Default Event Page Layout', 'swmtranslate' ),
    'section'  => 'swm_customizer_event',
    'priority' => 10,
    'choices'  => $swm_eveny_layout
));