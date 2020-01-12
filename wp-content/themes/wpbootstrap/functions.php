<?php  
    //Register nav
    require_once('wp_bootstrap_navlist_walker.php');

    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');
        register_nav_menus( array(
            'primary' => __( 'Primary Menu')
        ) );        
    }


    add_action('after_setup_theme', 'wpb_theme_setup'); //add_action sluzi za dodavanje necega

    //Kontrola duzine opisa postova
    function set_excerpt_length() {
        return 80;
    }

    add_filter('excerpt_length', 'set_excerpt_length'); //add_filter() sluzi za izmenu necega
?>