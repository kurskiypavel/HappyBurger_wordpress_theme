<div class="blog-post">
    <!-- Display the Title as a link to the Post's permalink. -->
    <h1>
        <?php the_title(); ?>
    </h1>
    <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    <?php the_content(); ?>
    <?php comments_template(); ?>
</div>