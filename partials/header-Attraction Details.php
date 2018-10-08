<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset');?>">
    <meta charset="UTF-8">
    <title><?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'mytheme' ), max( $paged, $page ) );
        ?></title>
    <link rel="stylesheet" media="screen" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />


    <link rel="stylesheet" type="text/css"  href="<?= get_bloginfo( 'template_url' ) ?>/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css"  href="<?= get_bloginfo( 'template_url' ) ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="<?= get_bloginfo( 'template_url' ) ?>/css/html5-doctor-reset-stylesheet.min.css">
    <link rel="stylesheet" type="text/css"  href="<?= get_bloginfo( 'template_url' ) ?>/css/icofont.css">
    <link rel="stylesheet" type="text/css"  href="<?= get_bloginfo( 'template_url' ) ?>/css/xs.css">
    <link rel="stylesheet" type="text/css"  href="<?= get_bloginfo( 'template_url' ) ?>/css/sm.css">
    <link rel="stylesheet" type="text/css"  href="<?= get_bloginfo( 'template_url' ) ?>/css/md.css">

    <link rel="script"  href="<?= get_bloginfo( 'template_url' ) ?>/js/bootstrap.min.js">
    <link rel="script"  href="<?= get_bloginfo( 'template_url' ) ?>/js/jquery-1.8.2.min.js">




</head>
<body>

<div class="container-fluid bac-header-img-AttractionDetails padding-0">
    <div class="container-fluid bac-header-color padding-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-header">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo2.png" alt="logo-header" class="fas-pull-right">
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-header', 'container' =>'', 'menu_class' =>'menu-header-2' , 'menu_id' => 'menu-header' ) ); ?>
                    <div class="button2">
                        <button type="button" class="btn btn1">پنل همکاری</button>
                        <button type="button" class="btn btn2">پیگیری رزرو</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="matn-header2">
            <?php the_title(); ?>
        </h2>
        <div class="crum">
            <?php
            echo do_shortcode( '[breadcrumb]' );
            ?>
        </div>
    </div>
</div>



</body>
</html>