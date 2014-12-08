<?php

if ( !defined( 'VIBE_URL' ) )
define('VIBE_URL',get_template_directory_uri());

add_action('wp_enqueue_scripts', 'vibe_wplms_child_js');
function vibe_wplms_child_js(){
	wp_enqueue_script( 'child-custom-js', get_stylesheet_directory_uri().'/custom.js',array('jquery'));	
}


show_admin_bar(false); 

function event_widget_mov() {
    register_sidebar( array(
        'name' => __( 'Event Sidebar', 'event_widget_mov' ),
        'id' => 'event_widget_mov',
        'description' => __( 'Widgets in this area will be shown on all events.', 'event_widget_mov' ),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'event_widget_mov' );
?>
