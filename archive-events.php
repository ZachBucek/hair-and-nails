<!--HEADER-->
<?php get_header(); ?>
<!--NAV-->
    <nav id="nav_menu" class="row">
        <ul>
            <li><a href="https://hairandnailsart.com/about-it/">ABOUT IT</a></li>
            <li><a href="https://hairandnailsart.com/current/">EXHIBITIONS</a>
                <ul>
                    <li><a href="https://hairandnailsart.com/current/">CURRENT</a></li>
                    <li><a href="https://hairandnailsart.com/upcoming/">UPCOMING</a></li>
                    <li><a href="https://hairandnailsart.com/past/">PAST</a></li>
                </ul>
            </li>
            <li id="selected"><a href="#">EVENTS</a></li>
            <li><a href="https://hairandnailsart.com/press/">PRESS</a></li>
            <li><a href="https://hairandnailsart.com/magazine/">MAGAZINE</a></li>
        </ul>
    </nav>

    <main id="events-archive">
        <div class="row">
            <div class="twelve columns">
            <?php while ( have_posts() ) : the_post();
                get_template_part('content','events');
            endwhile ?>
            </div>
        </div>
    </main>
    <!--BACK-TO-TOP-->
    <div>
        <a href="#pattern_header" class="back_to_top">^</a>
    </div>
<!--END CONTAINER-->
</div>
<!--FOOTER-->
<?php get_footer(); ?>
