<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo ('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon2.png">
</head>

<body>
    <div class="container">
        <div>
            <img id="h" src="<?php echo get_template_directory_uri(); ?>/assets/H+N_front-page/H_front-page.png" alt="">
            <a href="https://hairandnailsart.com/magazine"><img id="plus" src="<?php echo get_template_directory_uri(); ?>/assets/magazine/+_mag_2.png" alt=""></a>
            <img id="n" src="<?php echo get_template_directory_uri(); ?>/assets/H+N_front-page/N_front-page.png" alt="">
        </div>
        <div>
            <img id="img_frontpage" src="<?php echo get_template_directory_uri(); ?>/images/front-page-img-4.png" alt="">
            <!--NAV--HARD CODE-->
            <nav id="nav_menu_frontpage">
                <ul>
                    <li><a href="https://hairandnailsart.com/about-it/">ABOUT IT</a></li>
                    <li><a href="https://hairandnailsart.com/current/">EXHIBITIONS</a>
                        <ul>
                            <li><a href="https://hairandnailsart.com/current/">CURRENT</a></li>
                            <li><a href="https://hairandnailsart.com/upcoming/">UPCOMING</a></li>
                            <li><a href="https://hairandnailsart.com/past/">PAST</a></li>
                        </ul>
                    </li>
                    <li><a href="https://hairandnailsart.com/events/">EVENTS</a></li>
                    <li><a href="https://hairandnailsart.com/press/">PRESS</a></li>
                    <li><a href="https://hairandnailsart.com/magazine/">MAGAZINE</a></li>
                </ul>
            </nav>
            <p id="address_frontpage"><a href="https://goo.gl/maps/q42Pqot7DaR2" target="_blank">HAIR + NAILS<br>2222 1/2 E. 35th St. MPLS, MN 55407</a></p>
        </div>
    <!--END CONTAINER-->
    </div>

    <!--INSTAGRAM-->
    <div id="insta_HandN_front">
        <a href="https://instagram.com/hairandnailsmpls" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram/h+n.png" alt=""></a>
    </div>
    <div id="insta_OH_front">
        <a href="https://instagram.com/oval_headley" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram/oval_headley.png" alt=""></a>
    </div>

    <!--COPYRIGHT-->
    <div id="copyright_front">
        <p>&copy;<?php echo date("Y"); ?> HAIR AND NAILS</p>
    </div>

</body>

</html>
