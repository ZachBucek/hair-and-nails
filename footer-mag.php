<!--END CONTAINER-->
</div>

<!--NAV FOOTER MAG-->
<footer id="footer_mag">
    <div id="footer_mag_nav">
        <a href="https://hairandnailsart.com/">H+N MAIN</a>
        <a href="https://hairandnailsart.com/magazine/">MAG</a>
    </div>
</footer>

<!--BACK-TO-TOP-->
<div>
    <a href="#pattern_header" class="back_to_top">^</a>
</div>

<!--JAVASCRIPT-->
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