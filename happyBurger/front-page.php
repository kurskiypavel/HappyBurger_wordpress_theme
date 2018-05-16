<?php get_header(); ?>

<!-- slider -->
<!--<img src="--><?php //bloginfo('template_url'); ?><!--/images/main slider.png" alt="IMAGE GOES HERE">-->

<img src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/images/main slider.png');?>" alt="IMAGE GOES HERE">

<!-- main content -->
<div id="body">
    <div class="container">
        <div class="row">
            <div class="center-align col s12">
                <h5><?php echo get_theme_mod('showcase_heading', 'Welcome To The Club');?></h5>
                <p><?php echo get_theme_mod('showcase_text', 'Super cool work for super cool dudes');?></p>
            </div>
            <!-- responsive related figures -->
            <div class="card-container">
                <figure class="col s5">
                    <div class="subFigure">
                        <!--                        <img src="-->
                        <?php //bloginfo('template_url'); ?><!--/images/img 1.png" alt="">-->
                        <!--                        <figcaption>-->
                        <!--                            Web development and AI algorithms-->
                        <!--                        </figcaption>-->
                        <?php if (is_active_sidebar('box1')): ?>
                            <?php dynamic_sidebar('box1'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="subFigure">
                        <!--                        <img src="-->
                        <?php //bloginfo('template_url'); ?><!--/images/img 3.png" alt="">-->
                        <!--                        <figcaption>-->
                        <!--                            Content writting-->
                        <!--                        </figcaption>-->
                        <?php if (is_active_sidebar('box2')): ?>
                            <?php dynamic_sidebar('box2'); ?>
                        <?php endif; ?>
                    </div>
                </figure>
                <figure class="col s7 figure">
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/img 2.png" alt="">-->
<!--                    <figcaption>-->
                    <!--                        <ul>-->
                    <!--                            <li>Mobile Application Development</li>-->
                    <!--                            <li>Brand Identity</li>-->
                    <!--                            <li>Social Media Integration</li>-->
                    <!--                            <li>Newsletter Design</li>-->
                    <!--                            <li>Booklets Design</li>-->
                    <!--                        </ul>-->
                    <!--                    </figcaption>-->
                    <?php if (is_active_sidebar('box3')): ?>
                        <?php dynamic_sidebar('box3'); ?>
                    <?php endif; ?>
                </figure>
            </div>
        </div>
        <div class="center-align">
            <a class="waves-effect waves-light btn transparent z-depth-0">See More</a>
        </div>
        <?php get_footer(); ?>
