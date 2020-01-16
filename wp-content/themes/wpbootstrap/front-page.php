<!doctype html>
<html <?php language_attributes();?> >

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>
        <?php bloginfo('name');?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title();?>
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet"
        integrity="" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head();?> <!-- Jako bitno za head deo wordpress-a koji se generise sam dodavanjem plugin-ova na primer-->
</head>

<style>
    .showcase {
        background: url(<?php echo get_theme_mod('showcase_image',get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
        background-size: cover;
    }
</style>

<body>
    <div class="container">
    <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="https://elab.fon.bg.ac.rs/"><img src="<?php bloginfo('template_url');?>/img/elab-logo.png" alt=""></a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/wordpress/wp-admin">Sign up</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'false',
                    'menu_class'        => 'nav nav-list',
                    'fallback_cb'       => 'wp_bootstrap_navlist_walker::fallback',
                    'walker'			=> new wp_bootstrap_navlist_walker())
                );
            ?>
            </nav>
        </div>
        </div>
<section class="showcase">
        <div class="container">
            <h1><?php echo get_theme_mod('showcase_heading','Custom Wordpress Theme'); ?></h1>
            <p><?php echo get_theme_mod('showcase_text','Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ducimus harum numquam. Odit sequi, illo, dolor eos vero iusto dolorem sapiente minima soluta ipsam ut et voluptate, quis earum nulla.'); ?></p>
            <a href="<?php echo get_theme_mod('btn_url','#'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text','Read More'); ?></a>
        </div>
    </section>

    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                
                    <?php if(is_active_sidebar('box1')) :?>
                            <?php dynamic_sidebar('box1');?>
                        <?php endif;?>

                </div>
                <div class="col-md-4">
    
                    <?php if(is_active_sidebar('box2')) :?>
                            <?php dynamic_sidebar('box2');?>
                        <?php endif;?>

                </div>
                <div class="col-md-4">

                    <?php if(is_active_sidebar('box3')) :?>
                            <?php dynamic_sidebar('box3');?>
                        <?php endif;?>

                </div>
                
            </div>
        </div>
        </div>
    </section>
    <footer class="blog-footer">
        <p>&copy;<?php echo Date('Y'); ?> - <?php bloginfo('name');?> <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    <?php wp_footer();?>  <!--Dodaje admin bar na vrhu -->      

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
</body>

</html>