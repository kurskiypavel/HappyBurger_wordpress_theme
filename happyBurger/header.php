<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>


    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,900" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
<!-- navbar and logo -->
<div class="container">
    <header>
        <nav class="transparent z-depth-0">
            <div class="nav-wrapper">
                <a href="<?php echo get_option("siteurl"); ?>" class="brand-logo">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Logo">
                </a>
                <!-- <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a id="work" href="#">Work</a>
                    </li>
                    <li>
                        <a id="about" href="#">About</a>
                    </li>
                    <li>
                        <a id="blog" href="#">Blog</a>
                    </li>
                </ul> -->

                <div id="nav-mobile" class="right hide-on-med-and-down">

                    <?php
                    // MATERIALIZE DROP MENU
                    wp_nav_menu(array(
                        'menu' => 'primary',
                        'theme_location' => 'primary',
                        'menu_class' => 'hide-on-med-and-down',
                        'walker' => new wp_materialize_navwalker()

                    )); ?>


                </div>


            </div>
        </nav>

    </header>
</div>