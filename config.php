<?php
/*
 * Config definitions
 */

 if (!defined( 'ABSPATH' ) ) die( 'Forbidden' );

 $options = get_option( 'wpspx_settings' );

 define( 'WPSPX_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
 define( 'WPSPX_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

 define( 'SPEKTRIX_USER', esc_attr( $options['wpspx_account_name'] ) );
 define( 'SPEKTRIX_CERT', esc_attr( $options['wpspx_path_to_crt'] ) );
 define( 'SPEKTRIX_KEY',  esc_attr( $options['wpspx_path_to_key'] ) );
 define( 'SPEKTRIX_API',  esc_attr( $options['wpspx_api_key'] ) );
 define( 'SPEKTRIX_CUSTOM_URL',  esc_attr( $options['wpspx_custom_domain'] ) );

 define( 'SPEKTRIX_API_URL', 'https://api.system.spektrix.com/'.SPEKTRIX_USER.'/api/v3/');
 define( 'SPEKTRIX_SECURE_WEB_URL', 'https://system.spektrix.com/'.SPEKTRIX_USER.'/website/secure/');
 define( 'SPEKTRIX_NON_SECURE_WEB_URL', 'https://system.spektrix.com/'.SPEKTRIX_USER.'/website/');
 define( 'THEME_SLUG', wp_get_theme()->get( 'Name' ));
