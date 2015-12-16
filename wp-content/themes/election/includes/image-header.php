<?php

$swm_parallax_header = '';
$swm_parallax_header_bg = '';
$swm_final_meta_header_bg_images = '';
$swm_meta_header_bg_color = '';

//customizer header values
$swm_default_header_bg_color			= get_theme_mod('swm_header_bg_color','#28415f');
$swm_default_header_bg_image 			= get_theme_mod('swm_header_bg_image');
$swm_default_header_bg_repeat 			= get_theme_mod('swm_header_bg_repeat','no-repeat');
$swm_default_header_bg_position 		= get_theme_mod('swm_header_bg_position','center-top');
$swm_default_header_bg_attachment		= get_theme_mod('swm_header_bg_attachment','fixed');
$swm_default_header_bg_stretch			= get_theme_mod('swm_header_bg_stretch',0);
$swm_default_header_bg_parallax 		= get_theme_mod('swm_enable_parallax_effect',0);
$swm_default_header_bg_parallax_speed 	= get_theme_mod('swm_header_parallax_speed',2.5);
$swm_default_header_bg_height 			= get_theme_mod('swm_header_height',300);

if (function_exists('rwmb_meta')) {

	//page metabox values
	$swm_meta_header_bg_color	= rwmb_meta('swm_swm_meta_header_bg_color');
	$swm_meta_header_bg_images	= rwmb_meta('swm_meta_header_bg_image', 'type=thickbox_image' );


	if ( $swm_meta_header_bg_images ) {
	    foreach ( $swm_meta_header_bg_images as $swm_meta_header_bg_image ) {                                               
	    	$swm_final_meta_header_bg_images = "{$swm_meta_header_bg_image['full_url']}";	    	
		}
	}

	if ( ! empty($swm_final_meta_header_bg_images) ) {				
		$swm_default_header_bg_repeat 			= rwmb_meta('swm_meta_header_bg_repeat');
		$swm_default_header_bg_position 		= rwmb_meta('swm_meta_header_bg_position');
		$swm_default_header_bg_attachment 		= rwmb_meta('swm_meta_header_bg_attachment');
		$swm_default_header_bg_stretch 			= rwmb_meta('swm_meta_header_bg_stretch');
		$swm_default_header_bg_parallax 		= rwmb_meta('swm_meta_enable_parallax_effect');
		$swm_default_header_bg_parallax_speed 	= rwmb_meta('swm_meta_header_parallax_speed');
		$swm_default_header_bg_height 			= rwmb_meta('swm_meta_header_height');
	}

}

//final values
$swm_final_header_bg_color = empty($swm_meta_header_bg_color) ? $swm_default_header_bg_color : $swm_meta_header_bg_color;
$swm_final_header_bg_image = empty($swm_final_meta_header_bg_images) ? $swm_default_header_bg_image : $swm_final_meta_header_bg_images;

$swm_data_bg_scrollSpeed = '';
$swm_final_header_bg_size = 'background-size: auto; ';
$swm_get_header_bg_image = '';
$swm_get_header_bg_position = '';
$swm_get_header_bg_repeat = '';
$swm_get_header_bg_attachment = '';
$swm_dataParallax = '';

if ( $swm_final_header_bg_image != '' ) {
	$swm_get_header_bg_image 		= 'background-image:url(' . $swm_final_header_bg_image . '); ';
	$swm_get_header_bg_position 	= 'background-position:' . str_replace( '-', ' ', $swm_default_header_bg_position) . '; ';
	$swm_get_header_bg_repeat 		= 'background-repeat: ' . $swm_default_header_bg_repeat . '; ';
	$swm_get_header_bg_attachment 	= 'background-attachment: ' . $swm_default_header_bg_attachment . '; ';

	if ( $swm_default_header_bg_stretch == 1 ) {
	    $swm_final_header_bg_size = 'background-size: cover;';
	    $swm_get_header_bg_attachment = '';
	    $swm_get_header_bg_repeat = '';
	}
}

if ( $swm_default_header_bg_parallax == 1 ) {
	$swm_parallax_header = "swm_parallax_on swm_full_stretch";
	$swm_data_bg_scrollSpeed = 'data-bg-scrollSpeed="' . $swm_default_header_bg_parallax_speed . '"';
	$swm_get_header_bg_attachment = '';
	$swm_final_header_bg_size = 'background-size: cover; ';
	$swm_dataParallax = 'true';
}

$swm_get_header_bg_color = 'background-color:' . $swm_final_header_bg_color . ';' ;				

$swm_final_header_style = $swm_get_header_bg_color . $swm_get_header_bg_image . $swm_get_header_bg_position . $swm_get_header_bg_repeat . $swm_get_header_bg_attachment . $swm_final_header_bg_size;

$swm_default_header_bg_height = preg_replace('/[^0-9]/','',$swm_default_header_bg_height);

?>

<section class="title_header">
<div class="swm_headerImage <?php echo $swm_parallax_header; ?>" style="<?php echo $swm_final_header_style; ?>" <?php echo $swm_data_bg_scrollSpeed; ?> data-header-height="<?php echo $swm_default_header_bg_height; ?>" data-parallaxtest="<?php echo $swm_dataParallax; ?>"></div>

<?php

$swm_display_breadcrumbs = '';
$swm_display_pg_title = '';
$swm_meta_breadcrumbs = '';
$swm_pg_title_onoff = '';

$swm_default_breadcrumbs = get_theme_mod('swm_breadcrumbs','1');

if (function_exists('rwmb_meta')) {
	$swm_meta_breadcrumbs = rwmb_meta('swm_meta_breadcrumbs_onoff');
	$swm_pg_title_onoff = rwmb_meta('swm_meta_page_title_onoff');
}

if ( $swm_meta_breadcrumbs != '' && !is_archive() ) {

	if ( $swm_default_breadcrumbs != 1 ||  $swm_meta_breadcrumbs != 1 ) {
		$swm_display_breadcrumbs = 'swm_hide';										
	}

} elseif ( is_front_page() || is_home() ) {
	$swm_display_breadcrumbs = 'swm_hide';
} else {
	if ( $swm_default_breadcrumbs != 1 ) {
		$swm_display_breadcrumbs = 'swm_hide';										
	}
}

if ( $swm_pg_title_onoff != '' ) {
	if ( $swm_pg_title_onoff != 1 ) {
		$swm_display_pg_title = 'swm_hide';										
	}
}

$swm_get_pg_title = swm_page_title();

?>
	<div class="title_header_wrap">										
	<div class="title_section">

		<?php if ( $swm_get_pg_title != '' ) { ?>
	    
		    <div class="title_section_wrap <?php echo $swm_display_pg_title; ?>">
			    <div class="title_section_block <?php echo $swm_display_breadcrumbs; ?>">
					<?php echo swm_breadcrumb_trail(); ?>			    
			    </div><div class="title_section_block"> 
			      	<div class="heading_h1">						      		
						<h1><?php echo $swm_get_pg_title;  ?></h1>
						<div class="heading_bg transparent_bg transparent_bg_opacity"></div>
					</div>
				</div>
		    </div>
		
		<?php } ?>

	</div>
	
	</div><div class="swm_header_border"></div>
</section>