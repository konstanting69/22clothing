<?php

/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

if(!function_exists('theme_styles')) :

    function theme_styles() {
        wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    }
    
endif;

add_action('wp_enqueue_scripts', 'theme_styles');