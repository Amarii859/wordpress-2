<?php

function add_theme_scripts(){

    wp_enqueue_style('style', get_stylesheet_url());
    wp_enqueue_style('style', get_template_directory_url(). 'style.css' , array() , '1.1' , 'all');
    wp_enqueue_style('main', get_template_directory_url(). '/js/main.js' , array("jquery") , 1.1 , true);

    if(is_singular() && coments_open() && get_option('thread_comment')){
        wp_equeue_script('comment-reply');
    }

}
add_action('wp_equeue_scripts' , 'add_theme_scripts');

function ds_setup(){
    add_theme_support('menus');
    register_nav_menu('Primary' , 'Primary Navigation');
}
add_action('init', 'ds_setup')


?>