<?php
/*
Theme Name: pazan
Theme URI: https://wordpress.org/themes/pazan/
Author: Pazan Team
Author URI: https://wordpress.org/
Version: 1.9
*/


?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">


	<?php wp_head(); ?>
</head>

<body class="" >
<noscript><?php _e('JavaScript must be enabled to use this website', 'pazan'); ?></noscript>

<div class="">
    <div class="overlay-image">
    </div>
    <header class="container-fluid menu-top">
        <nav class="row" itemscope itemtype="http://schema.org/SiteNavigationElement">

            <div class="col-sm-3 text-center">
                <?php get_template_part('partials/header', 'single'); ?>
            </div>

            <div id="collapse-menu navbar" class="col-sm-7 menu-items" >
                <?php wp_nav_menu(array('menu'=>'اصلی')) ?>
            </div>

            <div class="col-sm-2" >
                <?php get_template_part('partials/header', 'logo'); ?>
            </div>
        </nav>
        <div class="row crum">
            <?php
            echo do_shortcode( '[breadcrumb]' );
            ?>
        </div>
    </header>
