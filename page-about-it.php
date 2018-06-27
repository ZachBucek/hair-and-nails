<!--HEADER-->
<?php get_header(); ?>
    <!--NAV-->
    <nav id="nav_menu" class="row">
        <ul>
            <li id="selected"><a href="https://hairandnailsart.com/about-it/">ABOUT IT</a></li>
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

    <main id="about-it" class="row">
        <article class="twelve columns">
                <p>
                    <?php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'content', 'page' );
                    endwhile;
                    ?>
                </p>
        </article>

    </main>
<!--END CONTAINER-->
</div>
<!--FOOTER-->
<?php get_footer(); ?>
