<?php
    function wpb_customize_register($wp_customize){
          //Showcase section 
        $wp_customize->add_section('showcase', array(
            'title' => __('Showcase','wpbootstap'), //Naziv kartice
            'description' => sprintf(__('Option for showcase'),'wpbootstap'),
            'priority' => 130
        ));

        //Dodavanje custom polja pod sekcijom showcase
        $wp_customize->add_setting('showcase_image',array(
            'default' => get_bloginfo('template_directory').'/img/showcase.jpg',//deafult
            'type' =>  'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image', array(
            'label' => __('Showcase Image','wpbootstap'),
            'section' => 'showcase',
            'settings' => 'showcase_image',
            'priority' => 1
        )));

        //Dodavanje custom polja pod sekcijom showcase
        $wp_customize->add_setting('showcase_heading',array(
            'default' => _x('Custom Wordpress Theme','wpbootstap'),//deafult
            'type' =>  'theme_mod'
        ));

        $wp_customize->add_control('showcase_heading',array(
            'label' => __('Heading','wpbootstap'),
            'section' => 'showcase',
            'priority' => 2
        ));
        //Dodavanje custom polja pod sekcijom showcase
        $wp_customize->add_setting('showcase_text',array(
            'default' => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ducimus harum numquam. Odit sequi, illo, dolor eos vero iusto dolorem sapiente minima soluta ipsam ut et voluptate, quis earum nulla.','wpbootstap'),//deafult
            'type' =>  'theme_mod'
        ));

        $wp_customize->add_control('showcase_text',array(
            'label' => __('Text','wpbootstap'),
            'section' => 'showcase',
            'priority' => 3
        ));

        //Dodavanje custom polja pod sekcijom showcase
        $wp_customize->add_setting('btn_url',array(
            'default' => _x('#','wpbootstap'),//deafult
            'type' =>  'theme_mod'
        ));

        $wp_customize->add_control('btn_url',array(
            'label' => __('Button URL','wpbootstap'),
            'section' => 'showcase',
            'priority' => 4
        ));

        //Dodavanje custom polja pod sekcijom showcase
        $wp_customize->add_setting('btn_text',array(
            'default' => _x('Read More','wpbootstap'), //deafult
            'type' =>  'theme_mod'
        ));

        $wp_customize->add_control('btn_text',array(
            'label' => __('Button text','wpbootstap'),
            'section' => 'showcase',
            'priority' => 5
        ));
    }


    add_action('customize_register', 'wpb_customize_register');
?>