    <!--INSTAGRAM-->
    <div id="insta_HandN">
        <a href="https://instagram.com/hairandnailsmpls" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram/h+n.png" alt=""></a>
    </div>
    <div id="insta_OH">
        <a href="https://instagram.com/oval_headley" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram/oval_headley.png" alt=""></a>
    </div>

    <!--FOOTER-->
    <footer id="footer_main">
        <div id="pattern_footer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/patterns/black&white_cropped_footer_3.png" alt="">
        </div>
        <div>
            <a href="https://goo.gl/maps/q42Pqot7DaR2" target="_blank"><p id="address_footer">H+N: 2222 1/2 E 35th St. MPLS, MN 55407</p></a>
        </div>
    </footer>

    <!--JAVASCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
                // SHOW OR HIDE STICKY SCROLL-TO-TOP BUTTON
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 500) {
                        $('.back_to_top').fadeIn(200);
                    }
                    else {
                        $('.back_to_top').fadeOut(200);
                    }
                });
                // ANIMATE SCROLL-TO-TOP
                $('.back_to_top').click(function(event) {
                    event.preventDefault();
                    $('html, body').animate({scrollTop: 0}, 300);
                })
        });
    </script>
<?php wp_footer(); ?>
</body>
</html>