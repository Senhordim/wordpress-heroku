<?php
$swm_page_post_layout_type = swm_page_post_layout_type();
if ( $swm_page_post_layout_type == 'layout-full-width' ) return; 
$swm_post_type = get_post_type();
?>	
<aside class="swm_column sidebar" id="sidebar">		
	<?php 	if ( !function_exists('generated_dynamic_sidebar')|| !generated_dynamic_sidebar() ) {
				if ($swm_post_type == 'portfolio') {
					dynamic_sidebar('Portfolio Single Page Sidebar');
				} else {
					dynamic_sidebar('Blog Sidebar');
				}
				
			} else { 
				//plugin is not installed
			} 			
	?>		
	<div class="clear"></div>
</aside>