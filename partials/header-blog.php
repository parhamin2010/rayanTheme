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

</head>
<body>

<div class="container-fluid bac-header-img-blog padding-0">
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
        <div class="crum">
            <?php
            echo do_shortcode( '[breadcrumb]' );
            ?>
        </div>
    </div>
</div>



</body>
</html>