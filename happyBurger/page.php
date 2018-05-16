<?php get_header(); ?>

    <div id="body">
    <div class="container">
    <div class="row">
        <div class="col s12">

            <!-- posts rendering -->
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php get_template_part('template-parts/content-page', get_post_format());?>
            <?php endwhile;
            else: ?>
                <p><?php __('Sorry, no page found.'); ?></p>
            <?php endif; ?>

        </div>
    </div>
<?php get_footer(); ?>