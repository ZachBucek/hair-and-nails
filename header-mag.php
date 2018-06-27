<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo ('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon2.png">
    <!--JAVASCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112111184-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112111184-1');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!--MAG LOGO-->
    <div id="logo_mag_wrap">
        <div id="logo_mag">
            <a href="https://hairandnailsart.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/magazine/mag_logo.png" alt=""></a>
        </div>
    </div>
    <!--MAG LOGO MOBILE-->
    <div id="logo_mag_mobile">
        <a href="https://hairandnailsart.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/magazine/mag_logo_mobile.png" alt=""></a>
    </div>

    <!--INSTAGRAM-->
    <div id="insta_HandN_mag">
        <a href="https://instagram.com/hairandnailsmpls" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram/h+n.png" alt=""></a>
    </div>
    <div id="insta_OH_mag">
        <a href="https://instagram.com/oval_headley" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram/oval_headley.png" alt=""></a>
    </div>

<div class="container">




