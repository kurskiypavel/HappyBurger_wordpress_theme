<div class="blog-post">
    <!-- Display the Title as a link to the Post's permalink. -->
    <h1>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h1>

    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    <?php the_excerpt(); ?>
</div>