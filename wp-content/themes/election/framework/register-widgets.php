<?php

 if ( function_exists('register_sidebar') ) {      

	register_sidebar( array(
	'name' => __('Blog Sidebar', 'swmtranslate'),
	'description' => 'Sidebar for blog section',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="swm_widget_box">',
	'after_widget' => '<div class="clear"></div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="clear"></div>'
	));	

	register_sidebar( array(
	'name' => __('Portfolio Single Page Sidebar', 'swmtranslate'),
	'description' => 'Sidebar for portfolio single page',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="swm_widget_box">',
	'after_widget' => '<div class="clear"></div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="clear"></div>'
	));	
	
	register_sidebar(array(
	'name' => __('Footer Column 1', 'swmtranslate'),
	'description' => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="footer_widget">',
	'after_widget' => '<div class="clear"></div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="clear"></div>'
	));

	register_sidebar(array(
	'name' => __('Footer Column 2', 'swmtranslate'),
	'description' => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="footer_widget">',
	'after_widget' => '<div class="clear"></div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="clear"></div>'
	));

	register_sidebar(array(
	'name' => __('Footer Column 3', 'swmtranslate'),
	'description' => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="footer_widget">',
	'after_widget' => '<div class="clear"></div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="clear"></div>'
	));

	register_sidebar(array(
	'name' => __('Footer Column 4', 'swmtranslate'),
	'description' => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="footer_widget">',
	'after_widget' => '<div class="clear"></div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="clear"></div>'
	));

	register_sidebar(array(
	'name' => __('Footer Column 5', 'swmtranslate'),
	'description' => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="footer_widget">',
	'after_widget' => '<div class="clear"></div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="clear"></div>'
	));	

	register_sidebar( array(
	'name' => __('Shop Page Sidebar', 'swmtranslate'),
	'description' => 'Sidebar for shop page',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="swm_widget_box">',
	'after_widget' => '<div class="clear"></div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="clear"></div>'
	));	

	register_sidebar( array(
	'name' => __('Product Single Page Sidebar', 'swmtranslate'),
	'description' => 'Sidebar for product single (product overview) page',
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="swm_widget_box">',
	'after_widget' => '<div class="clear"></div></div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="clear"></div>'
	));		

 }
	
?>