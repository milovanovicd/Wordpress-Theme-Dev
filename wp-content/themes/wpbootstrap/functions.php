<?php  
    //Register nav
    require_once('wp_bootstrap_navlist_walker.php');

    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');
        register_nav_menus( array(
            'primary' => __( 'Primary Menu')
        ) );        
        
        //Format postova
        add_theme_support('post-formats', array('aside', 'gallery'));
    }


    add_action('after_setup_theme', 'wpb_theme_setup'); //add_action sluzi za dodavanje necega

    //Kontrola duzine opisa postova
    function set_excerpt_length() {
        return 80;
    }

    add_filter('excerpt_length', 'set_excerpt_length'); //add_filter() sluzi za izmenu necega

    //Lokacija Widgeta
    function wpb_init_widgets($id) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => 'Box1',
            'id' => 'box1',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => 'Box2',
            'id' => 'box2',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => 'Box3',
            'id' => 'box3',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
    }

    add_action('widgets_init', 'wpb_init_widgets'); // dodaje se opcija Widget u Appearance

    //Customizer
    require get_template_directory().'/inc/customizer.php'
?>

