<?php

wp_enqueue_style( 'style-1', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri(). './doc/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . './doc/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

register_nav_menus([
    'TM'=>'Primary',
    'FM'=>'Footer'
]);

register_sidebar(array(
    'name'=>'Main Banner',
    'id'=>'mainbanner',
    'before_widget'=>'',
    'after_widget'=>''
));


register_sidebar(array(
    'name'=>'Sidebar Image',
    'id'=>'sideimage',
    'before_widget'=>'',
    'after_widget'=>''
));

register_sidebar(array(
    'name'=>'Youtube',
    'id'=>'youtube',
    'before_widget'=>'',
    'after_widget'=>''
));