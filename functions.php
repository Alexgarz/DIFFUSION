<?php

//
// The theme's main functions
//


    // Imports
    include_once('inc/greeklish-slugs.php');

    // Define Theme support
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption'
    ) );
    add_theme_support( 'post-thumbnails' );

    //remove admin bar in front end
    add_filter( 'show_admin_bar', '__return_false' );
        $header_callback = '_admin_bar_bump_cb';

    remove_action('wp_head', $header_callback);

    // needed for galleries
    if ( ! isset( $content_width ) )
        $content_width = 800;

    // Remove wp-meta
    remove_action('wp_head', 'wp_generator');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primarynav' => __( 'Primary Navigation')
    ));

    add_filter( 'use_default_gallery_style', '__return_false' );

    // The site's main stylesheet
    function enq_styles(){
        $src = get_bloginfo('template_url');

        wp_register_style( 'mainstyle', $src . '/style.css', false, '1.0.0', 'all' );
        wp_enqueue_style( 'mainstyle');

    }
    add_action('wp_enqueue_scripts', 'enq_styles');

    // Theme's main JS files
    function wpt_theme_js()
    {
        wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/assets/js/scripts.js', '', '', false );

        $theme_url = array( 'themeUrl' => get_stylesheet_directory_uri() );
        wp_localize_script( 'scripts_js', 'directory_uri', $theme_url );
        wp_enqueue_script( 'scripts_js' );
    }
    add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );