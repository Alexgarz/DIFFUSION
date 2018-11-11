<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8 lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Lora" rel="stylesheet">
        <?php wp_head(); ?>
        <body <?php body_class(); ?>>
            <div class="container">
                <header class="site-header">
                    <figure class="logo">
                        <a href="/">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="Diffusion band" />
                        </a>
                    </figure>
                    <nav class="main-menu">
                        <?php wp_nav_menu('primarynav'); ?>
                    </nav>
                </header>