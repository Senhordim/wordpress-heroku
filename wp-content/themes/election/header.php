<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!-- title -->
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<?php 
wp_head();
?>
</head>

<?php 
global $swm_data;

$swm_default_layout_style = get_theme_mod('swm_website_layout','wide');

if (function_exists('rwmb_meta')) {
	$swm_meta_layout_style = rwmb_meta('swm_meta_site_layout');
	if ( $swm_meta_layout_style && $swm_meta_layout_style != 'default' ) {
		$swm_default_layout_style = $swm_meta_layout_style;
	}
}

if ( $swm_default_layout_style == 'boxed' ) {
	$swm_fixed_layout = 'boxed';	
} else {
	$swm_fixed_layout = '';
}

$swm_display_sticky_nav = ( get_theme_mod('swm_display_sticky_nav',0) == 1 ) ?  'true' : 'false';

?>
<body <?php body_class($swm_fixed_layout); ?> id="page_body">

<div id="swm_main_container">
	<div class="swm_main_container_wrap">
			<div id="header_wrap">
				<header id="header" class="header" data-sticky-nav-header="<?php echo $swm_display_sticky_nav;  ?>">		
					<div class="top_section_wrap">	
						<div class="top_section_bg transparent_bg transparent_bg_opacity"></div>		
						<div class="top_section">

							<?php get_template_part( 'includes/logo' ); ?>							
							
							<div class="menu_section">
								<div class="top_bar">								

									<?php if ( get_theme_mod('swm_search_box',1) == 1 ) { ?>

										<div class="search_section">
											<i class="fa fa-search"></i>

											<div class="swm_search_box">

												<?php $swm_search_keywords =  __('Search','swmtranslate'); ?>
												<form method="get" action="<?php echo home_url(); ?>/" class="" id="searchform">	
													<div>
														<input type="submit" value="&#xf002;" id="searchsubmit" class="button" />													
														<input name="s" id="s" type="text" value="<?php echo $swm_search_keywords; ?>" onfocus="if (this.value == '<?php echo $swm_search_keywords; ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo $swm_search_keywords; ?>';}">		
													</div>
												</form>
											</div>
										</div>	

									<?php } ?>									

									<?php										
										if ( get_theme_mod('swm_topbar_cart_icon',0) == 1 ) {
											if ( class_exists( 'woocommerce' ) ) {
												swm_display_swm_woo_ajax_cart(); 
											} 
										}
									?>

									<div class="theme_social_icons">
										<ul>
											<?php swm_display_social_media(); ?>							
										</ul>
									</div>

									<div class="top_bar_nav">
										<?php swm_display_top_bar_navigation(); ?>
									</div>					

								</div>

								<?php

								$swm_donate_btn = ( get_theme_mod('swm_display_donate_button',1) ) ? 'activeDonate' : '';

								$swm_main_menu_icon_names = array();
								for ($i = 1; $i < 11; $i++) { 
									$swm_main_menu_icon_names[] .= get_theme_mod('nav_link_icon'.$i);
								}
								?>
								
								<nav class="mobile_menu <?php echo $swm_donate_btn; ?>" id="swm_main_menu"
									data-icons="<?php  
										for ($i = 0; $i < 10; $i++)
										{	
											echo "$swm_main_menu_icon_names[$i]";											
											if ($i < 9)
											echo ", ";
									  	}
									?>" >	

									<span id="mobile_nav_button" class="BtnBlack "><i class="fa fa-list-ul"></i></span>
									<?php swm_display_main_navigation(); ?>
								</nav>
								
							</div>
						</div>
						<div class="clear"></div>
						
					</div>					
				</header>
			</div>	

			<?php			

			if (function_exists('rwmb_meta')) {

				if ( rwmb_meta('swm_meta_header_style') == 'revolution_slider' ) 
				{ ?>

					<section class="swm_header_slider">
						<div class="slider_wrap">
							<?php echo do_shortcode( rwmb_meta('swm_meta_rev_slider_shortcode') ); ?>
						</div>
						<div class="swm_header_border"></div>				
					</section>

					<?php
				} else if ( rwmb_meta('swm_meta_header_style') == 'google_map' ) 
				{
					
					$swm_map_header_height = (rwmb_meta('swm_meta_header_height') == '') ? '500' : rwmb_meta('swm_meta_header_height');
					$swm_map_header_height = preg_replace('/[^0-9]/','',$swm_map_header_height);

					echo '<div class="swm_google_header_map_wrap"><div class="swm_google_header_map" style="height:'.$swm_map_header_height.'px;"><iframe style="width:100%" width="" height="'.$swm_map_header_height.'" src="'.rwmb_meta('swm_header_google_map_link').'&amp;iwloc=near&amp;output=embed"></iframe></div><div class="clear"></div><div class="swm_header_border"></div></div>';
					
				}else {
					get_template_part( 'includes/image-header' );
				}	
				
			} else {
				get_template_part( 'includes/image-header' ); 			
				
			} // if header style
				?>

			<div class="clear"></div>

			<div id="swm_page_container">