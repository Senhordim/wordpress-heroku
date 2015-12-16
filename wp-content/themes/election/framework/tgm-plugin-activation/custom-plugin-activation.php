<?php

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'swm_register_required_plugins' );

if (!function_exists('swm_register_required_plugins')) {

	function swm_register_required_plugins() {
		$plugins = array(

			//Theme Plugin
			array(
				'name'     				=> 'Poli Shortcodes',
				'slug'     				=> 'poli-shortcodes',
				'source'   				=> get_stylesheet_directory() . '/framework/tgm-plugin-activation/plugins/poli-shortcodes.zip',
				'required' 				=> true,
				'version' 				=> '1.02',
				'force_activation' 		=> false,
				'force_deactivation' 	=> false,
				'external_url' 			=> '',
			),

			// Multiple Sidebars
			array(
				'name'     				=> 'Multiple Sidebars',
				'slug'     				=> 'swm-multiple-sidebars',
				'source'   				=> get_stylesheet_directory() . '/framework/tgm-plugin-activation/plugins/swm-multiple-sidebars.zip',
				'required' 				=> true,
				'version' 				=> '50',
				'force_activation' 		=> false,
				'force_deactivation' 	=> false,
				'external_url' 			=> '',
			),

			// Revolution Slider
			array(
				'name'     				=> 'Revolution Slider', // The plugin name
				'slug'     				=> 'revslider', // The plugin slug (typically the folder name)
				'source'   				=> get_stylesheet_directory() . '/framework/tgm-plugin-activation/plugins/revslider.zip',
				'required' 				=> true,
				'version' 				=> '5.0.4.1',
				'force_activation' 		=> false, 
				'force_deactivation' 	=> false,
				'external_url' 			=> '',
			),

			// Metabox
			array(
				'name'     				=> 'Metabox', // The plugin name
				'slug'     				=> 'swm-metabox', // The plugin slug (typically the folder name)
				'source'   				=> get_stylesheet_directory() . '/framework/tgm-plugin-activation/plugins/swm-metabox.zip',
				'required' 				=> true,
				'version' 				=> '50',
				'force_activation' 		=> false, 
				'force_deactivation' 	=> false,
				'external_url' 			=> '',
			),

			// WordPress Free Plugins			
			
			array(
				'name' 		=> 'Regenerate Thumbnails',
				'slug' 		=> 'regenerate-thumbnails',
				'required' 	=> false,
			),			
			array(
				'name' 		=> 'WP Retina 2x',
				'slug' 		=> 'wp-retina-2x',
				'required' 	=> false,
			),			
			array(
				'name' 		=> 'The Events Calendar',
				'slug' 		=> 'the-events-calendar',
				'required' 	=> false,
			),			
			array(
				'name' 		=> 'WooCommerce',
				'slug' 		=> 'woocommerce',
				'required' 	=> false,
			),
			array(
				'name' 		=> 'Recent Tweets Widget',
				'slug' 		=> 'recent-tweets-widget',
				'required' 	=> false,
			),
			array(
				'name' 		=> 'Contact Form 7',
				'slug' 		=> 'contact-form-7',
				'required' 	=> false,
			)			

		);

		// Change this to your theme text domain, used for internationalising strings	
		
		$config = array(
        'id'           => 'swm',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => false,
        'message'      => '',
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'swm_translate' ),
            'menu_title'                      => __( 'Install Plugins', 'swm_translate' ),
            'installing'                      => __( 'Installing Plugin: %s', 'swm_translate' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'swm_translate' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'swm_translate' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'swm_translate' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'swm_translate' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'swm_translate' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'swm_translate' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'swm_translate' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'swm_translate' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'swm_translate' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'swm_translate' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'swm_translate' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'swm_translate' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'swm_translate' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'swm_translate' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

		tgmpa( $plugins, $config );

	}

}