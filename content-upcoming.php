<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (is_archive()) { ?>

        <h4>
            <?php the_title(); ?>
        </h4>
        <div>
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?>
        </div>
        <div>
            <?php the_content(); ?>
        </div>

    <?php } ?>
</article>