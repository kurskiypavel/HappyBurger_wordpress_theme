<?php
    function st_customize_register($wp_customize){
        //Showcase Section on front page
        //add new section to customizer
        $wp_customize->add_section('showcase' ,array(
            'title' => __('Showcase', 'Sandwich Time'),
            'description' => sprintf(__('Options for showcase', 'Sandwich Time')),
            'priority' => 130
        ));


        //default value for the setting image of showcase section
        $wp_customize->add_setting('showcase_image', array(
            'default' => get_bloginfo('template_directory').'/images/main slider.png', 'Sandwich Time',
            'type' => 'theme_mod'
        ));

        //name of the setting
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
            'label'=> __('Showcase Image' , 'Sandwich Time'),
            'section' => 'showcase',
            'settings' => 'showcase_image',
            'priority' => 1
        )));

        //default value for the setting Heading of showcase section
        $wp_customize->add_setting('showcase_heading', array(
            'default' => _x('Welcome To The Club', 'Sandwich Time'),
            'type' => 'theme_mod'
        ));

        //name of the setting
        $wp_customize->add_control('showcase_heading', array(
            'label'=> __('Heading' , 'Sandwich Time'),
            'section' => 'showcase',
            'priority' => 2
        ));

        //default value for the setting text of showcase section
        $wp_customize->add_setting('showcase_text', array(
            'default' => _x('Super cool work for super cool dudes', 'Sandwich Time'),
            'type' => 'theme_mod'
        ));

        //name of the setting
        $wp_customize->add_control('showcase_text', array(
            'label'=> __('Text' , 'Sandwich Time'),
            'section' => 'showcase',
            'priority' => 3
        ));

    }

    //hook for function

    add_action('customize_register', 'st_customize_register');