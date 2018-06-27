<!--HEADER MAG-->
<?php get_header('mag'); ?>
    <main id="magazine-single">
        <div class="row">
            <div class="twelve columns">
                <?php while ( have_posts() ) : the_post();
                    get_template_part('content','magazine');
                endwhile ?>
            </div>
        </div>
    </main>

<!--FOOTER MAG-->
<?php get_footer('mag'); ?>
