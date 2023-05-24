<?php
/*
    Plugin Name:  WPCommentsForm
    Description:  This is a plugin to write comments to an API.
    Version:      1.0
    Author:       Benito Esteban Bodipo 
*/

# Load the assets
function wp_comments_form_enqueue_scripts() {
    wp_enqueue_script( 'wp-comments-form-script', plugin_dir_url( __FILE__ ) . 'js/wp-comments-form.js', array( 'jquery' ), '1.0', true );
    wp_localize_script( 'wp-comments-form-script', 'wp_comments_form_ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    wp_enqueue_style( 'wp-comments-form-style', plugin_dir_url( __FILE__ ) . 'css/wp-comments-form-styles.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'wp_comments_form_enqueue_scripts' );

# Creating the form shortcode
function wp_comments_form_shortcode() {
    ob_start();
    include plugin_dir_path( __FILE__ ) . 'views/form.html';
    
    return ob_get_clean();
}

add_shortcode( 'wp_comments_form', 'wp_comments_form_shortcode' );
add_action( 'wp_ajax_wp_comments_form_submit', 'wp_comments_form_handle_submission' );
add_action( 'wp_ajax_nopriv_wp_comments_form_submit', 'wp_comments_form_handle_submission' );


?>
