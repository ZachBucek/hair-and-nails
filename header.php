<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo ('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon2.png">

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
    <!--PATTERN-->
    <div id="pattern_header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/patterns/white&black_cropped_3.png" alt="">
    </div>
    <!--CONTAINER-->
    <div class="container">
        <!--HEADER-->
        <div id="logo">
            <a href="https://hairandnailsart.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/H+N_logo_crop.png" alt="Hair and Nails"></a>
        </div>
