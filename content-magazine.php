<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (is_archive()) { ?>

        <h3>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div>
            <a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
        </div>

    <?php } elseif (is_single()) { ?>

        <h3>
            <?php the_title(); ?>
        </h3>
        <div>
            <?php the_content(); ?>
        </div>

    <?php } ?>

</article>