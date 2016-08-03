<?php

	function alitadiwiguna_kirki_configuration() {
	    return array( 'url_path'     => get_stylesheet_directory_uri() . '/inc/kirki/' );
	}
	add_filter( 'kirki/config', 'alitadiwiguna_kirki_configuration' );



	function alitadiwiguna_kirki_sections( $wp_customize ) {
		/**
		 * Add panels
		 */
		$wp_customize->add_panel( 'home_page', array(
			'priority'    => 10,
			'title'       => __( 'Home Page', 'kirki' ),
		) );

		/**
		 * Add sections
		 */
	     $wp_customize->add_section( 'header', array(
	 		'title'       => __( 'Header', 'kirki' ),
	 		'priority'    => 10,
	 		'panel'       => 'home_page',
	 	) );

	}
	add_action( 'customize_register', 'alitadiwiguna_kirki_sections' );


	function alitadiwiguna_kirki_fields( $fields ) {

	    $fields[] = array(
	        'type'     => 'text',
			'settings' => 'my_name',
			'label'    => __( 'Input Your Name', 'alitadiwiguna' ),
			'section'  => 'header',
			'default'  => esc_attr__( 'Your Name Here', 'alitadiwiguna' ),
			'priority' => 10,
	    );

	     $fields[] = array(
	        'type'     => 'text',
			'settings' => 'my_sub_name',
			'label'    => __( 'Input Your Tagline', 'alitadiwiguna' ),
			'section'  => 'header',
			'default'  => esc_attr__( 'Your Tagline Here', 'alitadiwiguna' ),
			'priority' => 10,
	    );

	     $fields[] = array(
	        'type'        => 'image',
			'settings'    => 'photo_profile',
			'label'       => __( 'Photo Profile', 'alitadiwiguna' ),
			'section'     => 'header',
			'default'     => '',
			'priority'    => 10,
	    );


	    return $fields;

	}
	add_filter( 'kirki/fields', 'alitadiwiguna_kirki_fields' );
?>
