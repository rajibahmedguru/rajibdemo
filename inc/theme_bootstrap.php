<?php 



add_action('after_setup_theme','rajibdemo_bootstraping' );
if(!function_exists ('rajibdemo_bootstraping')){
    function rajibdemo_bootstraping(){

        add_theme_support( 'title-tag');
        add_theme_support( 'thumbnails');
        add_theme_support( 'text-domain');
        add_theme_support( 'post-formats');
    }
}
