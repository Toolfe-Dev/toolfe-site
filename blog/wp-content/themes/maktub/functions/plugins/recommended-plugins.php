<?php
add_action( 'tgmpa_register', 'epcl_register_required_plugins' );
/**
 * Register required plugins
 * @return void
 * @since  1.0
 */

function epcl_register_required_plugins(){

    $theme = wp_get_theme( EPCL_THEMESLUG );
    $ver = $theme->version;

	$config  = array(
        'id' => 'maktub',
        'domain' => 'maktub',
        'menu' => 'install-required-plugins',
        'has_notices' => true,
        'is_automatic' => true,
        'dismissable'  => true,
        'strings' => array(
            'nag_type' => 'error',
        )
    );

    $plugins = array(		
        array(
            'name'               => 'Maktub Theme Functions',
            'slug'               => 'maktub-functions',
            'source'             => 'http://estudiopatagon.com/wp-plugins/maktub-functions-latest.zip',
            'version'            => $ver,
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
        array(
            'name'               => 'Contact Form 7 (optional)',
            'slug'               => 'contact-form-7',
            'required'           => false,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
    );

    tgmpa( $plugins, $config );
}
