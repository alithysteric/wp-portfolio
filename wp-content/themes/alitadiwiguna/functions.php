<?php 


function alitadiwiguna_setup() {

	add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'alitadiwiguna_setup' );


function alitadiwiguna_css() {
	
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'ie10-css', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'alitadiwiguna_css' );

function alitadiwiguna_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true  );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array( 'jquery' ), '', true  );
	wp_enqueue_script( 'ie10-js', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', '', '', true  );
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '', true  );

}

add_action( 'wp_enqueue_scripts', 'alitadiwiguna_js' );


/**
 * Create Widget
 */

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' 			=> __( $name ),
		'id'   			=> $id,
		'description' 	=> __( $description ),
		'before_widget'	=> '<div class="widget text-center">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title' 	=> '</h3><div class="line-widget"></div>'
	));

}

create_widget( 'Front Page Left', 'front-left', 'Display on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Display in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Display on the left of the homepage' );


create_widget( 'Footer left', 'footer-left', 'Display on the left of the footer' );
create_widget( 'Footer Center', 'footer-center', 'Display in the center of the footer' );
create_widget( 'Footer Right', 'footer-right', 'Display on the right of the footer' );

include_once( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );
include_once('/inc/customize.php' );


