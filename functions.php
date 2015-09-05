<?php
	
function mtr_script_enqueue() {	
	wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'jquery.js',  get_template_directory_uri() . '/js/jquery-1.11.1_min.js', array(), '1.0.0', true ); 
    wp_enqueue_script( 'masonry.js',  get_template_directory_uri() . '/js/masonry.pkgd_min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom_code.js',  get_template_directory_uri() . '/js/code.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'mtr_script_enqueue');

function mtr_setup(){

		add_theme_support('post-thumbnails');
		add_image_size('homepageimage',600,500,true);
        add_image_size('singlepageimage',900,500,true);

	}
add_action( 'after_setup_theme', 'mtr_setup' );

?>
