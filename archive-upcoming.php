<!--HEADER-->
<?php get_header(); ?>
    <!--NAV-->
    <nav id="nav_menu" class="row">
        <ul>
            <li><a href="https://hairandnailsart.com/about-it/">ABOUT IT</a></li>
            <li id="selected"><a href="https://hairandnailsart.com/current/">EXHIBITIONS</a></li>
            <li><a href="https://hairandnailsart.com/events/">EVENTS</a></li>
            <li><a href="https://hairandnailsart.com/press/">PRESS</a></li>
            <li><a href="https://hairandnailsart.com/magazine/">MAGAZINE</a></li>
        </ul>
    </nav>
    <nav id="nav_menu_exh">
        <ul>
            <li class="not_selected_exh"><a href="https://hairandnailsart.com/current/">CURRENT</a></li>
            <li id="selected_exh">UPCOMING</li>
            <li class="not_selected_exh"><a href="https://hairandnailsart.com/past/">PAST</a></li>
        </ul>
    </nav>

    <main id="upcoming-archive">
        <div class="row">
            <article class="twelve columns">
                <?php while ( have_posts() ) : the_post();
                get_template_part('content','upcoming');
                endwhile ?>
            </article>
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
