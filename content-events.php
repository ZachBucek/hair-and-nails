<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (is_archive()) { ?>

        <h4>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h4>
        <a href="<?php the_permalink(); ?>"><div>
            <!-- get featured image-->
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?>
        </div></a>

    <?php } elseif (is_single()) { ?>

        <h4>
            <?php the_title(); ?>
        </h4>
        <div>
            <!-- get featured image and custom fields-->
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