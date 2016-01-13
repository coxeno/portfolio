<?php /* To overwrite a function from either functions.php or from library/core.php, overwrite it in this file */ 

if ( ! function_exists( 'cb_child_script_loaders' ) ) {
    function cb_child_script_loaders() {
        // enqueue base scripts and styles
        add_action('wp_enqueue_scripts', 'cb_child_scripts_and_styles', 999);
    }
}

add_action( 'after_setup_theme','cb_child_script_loaders', 16 );

if ( ! function_exists( 'cb_child_scripts_and_styles' ) ) {
    function cb_child_scripts_and_styles() {
	    if ( !is_admin() ) {
	  	  	if ( is_rtl() ) {
	            $cb_style_name = 'style-rtl';
	        } else {
	            $cb_style_name = 'style';
	        }
	      	// Register child stylesheet
	        wp_register_style( 'cb-child-stylesheet',  get_stylesheet_directory_uri() .  '/' . $cb_style_name . '.css' , array(), '1.0', 'all' );
	        wp_enqueue_style('cb-child-stylesheet'); // enqueue it
	    }
	}
}
?>