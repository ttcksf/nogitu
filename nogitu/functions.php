<?php
add_action('init', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    //menu
    register_nav_menus([
        'drawer_nav' => 'ドロワーメニュー',
        'footer_nav' => 'フッターメニュー',
    ]);
});
add_action("wp_enqueue_scripts", function(){
    // import css 
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('cube-portfolio', get_template_directory_uri() . '/cubeportfolio/css/cubeportfolio.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), '1.0.0', 'all');
    wp_enqueue_style('red', get_template_directory_uri() . '/css/colors/red.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    // import fonts 
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800', array(), '1.0.0', 'all');
    // import icons 
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('flat-icon', get_template_directory_uri() . '/icon-fonts/flaticon/flaticon.css', array(), '1.0.0', 'all');
    
    // import js
    wp_deregister_script('jquery');
    wp_enqueue_script('my-jquery', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array(), '1.0.0', true);
    wp_enqueue_script('cubic-portfolio', get_template_directory_uri() . '/cubeportfolio/js/jquery.cubeportfolio.min.js', array('my-jquery'), '1.0.0', true);
    wp_enqueue_script('typed', get_template_directory_uri() . '/js/typed.js', array('my-jquery'), '1.0.0', true);
    wp_enqueue_script('particles', get_template_directory_uri() . '/js/particles.js', array('my-jquery'), '1.0.0', true);
    wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array('my-jquery'), '1.0.0', true);
    wp_enqueue_script('hover3d', get_template_directory_uri() . '/js/jquery.hover3d.js', array('my-jquery'), '1.0.0', true);
    wp_enqueue_script('twitter-api', get_template_directory_uri() . '/twitter-api/tweetie.js', array('my-jquery'), '1.0.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('my-jquery'), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('my-jquery'), '1.0.0', true);
});
