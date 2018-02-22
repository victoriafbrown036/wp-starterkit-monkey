<?php
/**
 *
 * @category MNK reusable
 * @package  MNK reusable 
 * @version 2.6.1 (TGM)
 * @author Ronny Briolotti
 * @see 
 * @link http://tgmpluginactivation.com/download/
 *
 */

add_action( 'tgmpa_register', 'mnk_register_required_plugins' );
function mnk_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'CMB2',
			'slug'      => 'cmb2',
			'required'  => true,
		),

		array(
			'name'      => 'CMB2 - TABS',
			'slug'      => 'cmb2-tabs',
			'source'    => 'https://github.com/dThemeStudio/cmb2-tabs',
		),

		array(
			'name'      => 'Titan Framework',
			'slug'      => 'titan-framework',
			'required'  => true,
		),

		array(
			'name'      => 'Breadcrumb NavXT',
			'slug'      => 'breadcrumb-navxt',
			'required'  => true,
		),
		
	);

	$config = array(
		'id'           => 'mnk',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'capability'   => 'manage_options',
		'has_notices'  => true,
		'dismissable'  => false,
		'dismiss_msg'  => 'Questi sono i Plugin necessari al corretto funzionamento del tema',
		'is_automatic' => true,
		// 'message'      => 'Questi sono i Plugin necessari al corretto funzionamento del tema',
	);

	tgmpa( $plugins, $config );
}
?>