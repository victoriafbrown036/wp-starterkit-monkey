<?php
 
/**
 * Creating metabox options via Titan Framework.
 *
 * Getting started: http://www.titanframework.net/get-started/
 * Metabox: http://www.titanframework.net/meta-box/
 * Options: http://www.titanframework.net/docs/
 * Getting Option Values: http://www.titanframework.net/getting-option-values/
 */
 
add_action( 'tf_create_options', 'aa_metabox_options' );
 
function aa_metabox_options() {
 
    // Initialize Titan with your theme name.
    $titan = TitanFramework::getInstance( 'sportway' );
 
    /**
     * First metabox.
     */
 
    $aa_metbox = $titan->createMetaBox( array(
        'name'      => 'Metabox Options', // Name the options menu.
        'post_type' => array( 'page'), // Can be a string or array.
        // 'page_template' => 'page-servizi.php',
        'hide_custom_fields' => true,
    ) );


    /**
	 * Create the options for metabox.
	 *
	 * Now we will create options for our metabox that we just created called `$aa_metbox`.
	 */
	 
	$aa_metbox->createOption( array(
	    'id'   => 'aa_mb_txt', // The id which will be used to get the value of this option.
	    'type' => 'text', // Type of option we are creating.
	    'name' => 'My Text Option', // Name of the option which will be displayed in the admin panel.
	    'desc' => 'This is our option' // Description of the option which will be displayed in the admin panel.
	) );

		$aa_metbox->createOption( array(
	    'id'   => 'aa_mb_txt2', // The id which will be used to get the value of this option.
	    'type' => 'text', // Type of option we are creating.
	    'name' => 'My Text Option', // Name of the option which will be displayed in the admin panel.
	    'desc' => 'This is our option' // Description of the option which will be displayed in the admin panel.
	) );
 
}