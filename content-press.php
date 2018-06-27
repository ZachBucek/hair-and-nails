<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (is_single()) { ?>

        <h4>
            <?php the_title(); ?>
        </h4>
        <div>
            <?php the_content(); ?>
        </div>

    <?php } elseif (is_archive()) { ?>

        <div>
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?>
        </div>
        <h4>
            <?php the_title(); ?>
        </h4>
        <div>
            <?php the_content(); ?>
        </div>

    <?php } ?>
</article>