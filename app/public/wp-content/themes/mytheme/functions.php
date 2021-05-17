<?php


function websites_theme_support(){
    add_theme_support('title-tag');
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
}
add_action('after_setup_theme','websites_theme_support');

//import CSS
    function register_styles(){
        wp_enqueue_style( 'styleCSS1', "https://cdn.vcapps.org/sites/default/files/css/css_VVjNK7aFl0J5iEHH_AHImUGsqLzekxusTFK2LDslhd8.css",array(), 1.0,'all' );
        wp_enqueue_style( 'styleCSS2', "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css",array(), 1.0,'all' );
        wp_enqueue_style( 'styleCSS3', get_template_directory_uri() ."./style.css",array('styleCSS1'), 1.0,'all' );
        wp_enqueue_style( 'fontCSS', 'https://www.vanguardcharitable.org/themes/vc_ole/css/fonts.css', array(), 1.0,'all');
    }

add_action( 'wp_enqueue_scripts', 'register_styles');

// import Scripts
    function register_scripts(){
        wp_enqueue_script( 'script1',"https://cdn.vcapps.org/sites/default/files/js/js_K7GbNlqZvAUpWVvOGRSVieF6gAosNdaV4ci6HIn8wA8.js",array(), 1.0,true);
        wp_enqueue_script( 'script1',"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js",array(), 1.0,true);
        wp_enqueue_script( 'script3',"https://cdn.vcapps.org/sites/default/files/js/js_T19Vl-Lw5yaRBGRI9QXfrw64jxS7-wgbupZggk_ai_M.js",array(), 1.0,true);
    }
 add_action('wp_enqueue_scripts','register_scripts');   
?>