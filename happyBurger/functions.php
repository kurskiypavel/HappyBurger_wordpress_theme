<?php
//register nav walker class for dropdown menu #1

require_once 'class-wp-bootstrap-navwalker.php';

require_once get_template_directory() . '/wp_materialize_navwalker.php';

//theme support #2 st_ - prefix for this theme

function st_theme_setup()
{
    add_theme_support('post-thumbnails');
    //nav menus support #3
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'THEMENAME'),
        )
    );

    //post formats
    add_theme_support('post-formats', array('aside','gallery'));

}

//add hoock and action to run that function after setup theme #4
add_action('after_setup_theme', 'st_theme_setup');


//Excerpt length control

function st_set_excerpt_length()
{
    return 30;
}

//hook for excerpt
add_filter('excerpt_length', 'st_set_excerpt_length');

// widgets locations#1
function st_init_widgets($id)
{
    //init widget sidebar
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        // any html before widget
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    //init widget box1 with robot
    register_sidebar(array(
        'name' => 'Box 1',
        'id' => 'box1',
        // any html before widget
        'before_widget' => '<div class="subFigure">',
        'after_widget' => '</div>'
    ));

    //init widget box2 with book
    register_sidebar(array(
        'name' => 'Box 2',
        'id' => 'box2',
        // any html before widget
        'before_widget' => '<div class="subFigure">',
        'after_widget' => '</div>'
    ));

    //init widget box3 with phone
    register_sidebar(array(
        'name' => 'Box 3',
        'id' => 'box3',
        // any html before widget
        'before_widget' => '<div class="figure">',
        'after_widget' => '</div>'
    ));

}

//hook function init widget#2
add_action('widgets_init', 'st_init_widgets');

//Link Customizer File

require get_template_directory(). '/inc/customizer.php';
