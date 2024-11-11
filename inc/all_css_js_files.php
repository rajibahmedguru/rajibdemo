<?php 


function mediplus_css_js_files(){

    // Google-Fonts

    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap');

    // All CSS Files
    
    wp_enqueue_style('main-stylesheet',get_stylesheet_uri(  ));
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css', array(),'4.0.0', 'all');
    wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.min.css', array(),'3.5.2', 'all');
    wp_enqueue_style('datepicker',get_template_directory_uri().'/assets/css/datepicker.css', array(), '2.0', 'all');
    wp_enqueue_style('fontawesome',get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
    wp_enqueue_style('icofont',get_template_directory_uri().'/assets/css/icofont.css', array(), '1.0.1', 'all');
    wp_enqueue_style('magnific-popup',get_template_directory_uri().'/assets/css/magnific-popup.css', array(), 'all');
    wp_enqueue_style('nice-select',get_template_directory_uri().'/assets/css/nice-select.css', array(), 'all');
    wp_enqueue_style('normalize',get_template_directory_uri().'/assets/css/normalize.css', array(), 'all');
    wp_enqueue_style('slicknav',get_template_directory_uri().'/assets/css/slicknav.min.css', array(), 'all');
    wp_enqueue_style('owl-carousoul',get_template_directory_uri().'/assets/css/owl-carousel.css', array(), '2.2.1', 'all');
    wp_enqueue_style('theme-stylesheet',get_template_directory_uri().'/assets/css/style.css', array(),'1.0.0', 'all');
    wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css', array(),'1.0.0', 'all');

    // All Js files

    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery Migrate',get_template_directory_uri().'/assets/js/jquery-migrate-3.0.0.js', array(), '3.0.0', 'true');
    wp_enqueue_script('jquery Ui',get_template_directory_uri().'/assets/js/jquery-ui.min.js', array(), '1.11.4', 'true');
    wp_enqueue_script('easing js',get_template_directory_uri().'/assets/js/easing.js', array(), 'true');
    wp_enqueue_script('colors js',get_template_directory_uri().'/assets/js/colors.js', array(), 'true');
    wp_enqueue_script('popper js',get_template_directory_uri().'/assets/js/popper.min.js', array(),'true');
    wp_enqueue_script('bootstrap-datepicker',get_template_directory_uri().'/assets/js/bootstrap-datepicker.js', array(),'true');
    wp_enqueue_script('bootstrap-datepicker',get_template_directory_uri().'/assets/js/bootstrap-datepicker.js', array(), '2.0', 'true');
    wp_enqueue_script('jquery nav js',get_template_directory_uri().'/assets/js/jquery.nav.js', array(), '3.0.0', 'true');
    wp_enqueue_script('slicknav',get_template_directory_uri().'/assets/js/slicknav.min.js', array(), '3.0.0', 'true');
    wp_enqueue_script('scrollUp',get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array(), '2.4.1', 'true');
    wp_enqueue_script('Niceselect JS',get_template_directory_uri().'/assets/js/niceselect.js', array(), '2.4.1', 'true');
    wp_enqueue_script('tilt jquery',get_template_directory_uri().'/assets/js/tilt.jquery.min.js', array(), 'true');
    wp_enqueue_script('owl-carousel',get_template_directory_uri().'/assets/js/owl-carousel.js', array(), 'true');
    wp_enqueue_script('counterup',get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array(), 'true');
    wp_enqueue_script('steller',get_template_directory_uri().'/assets/js/steller.js', array(), 'true');
    wp_enqueue_script('Magnific Popup',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array(), '1.1.0' ,'true');
    wp_enqueue_script('Counter Up CDN JS',get_template_directory_uri().'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array(), 'true');
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '4.0.0' ,'true');
    wp_enqueue_script('main js',get_template_directory_uri().'/assets/js/main.js', array(), '4.0.0' ,'true');

    // All Fonts add
    
    wp_enqueue_style('fontawesome-font-1',get_template_directory_uri().'/assets/css/fontawesome-webfont.eot','all');
    wp_enqueue_style('fontawesome-font-2',get_template_directory_uri().'/assets/css/fontawesome-webfont.svg','all');
    wp_enqueue_style('fontawesome-font-2',get_template_directory_uri().'/assets/css/fontawesome-webfont.ttf','all');
    wp_enqueue_style('fontawesome-font-2',get_template_directory_uri().'/assets/css/fontawesome-webfont.woff','all');
    wp_enqueue_style('fontawesome-font-2',get_template_directory_uri().'/assets/css/fontawesome-webfont.woff2','all');
    wp_enqueue_style('fontawesome-font-2',get_template_directory_uri().'/assets/css/icofont.eot','all');
    wp_enqueue_style('fontawesome-font-2',get_template_directory_uri().'/assets/css/icofont.svg','all');
    wp_enqueue_style('fontawesome-font-2',get_template_directory_uri().'/assets/css/icofont.ttf','all');
    wp_enqueue_style('fontawesome-font-2',get_template_directory_uri().'/assets/css/icofont.woff','all');
    wp_enqueue_style('fontawesome-font-2',get_template_directory_uri().'/assets/css/icofont.woff2','all');


}
add_action( 'wp_enqueue_scripts', 'mediplus_css_js_files');