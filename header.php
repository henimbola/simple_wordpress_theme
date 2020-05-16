<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <!-- <h1><?php // bloginfo('name') 
                    ?></h1> -->
        <!-- <span><?php // bloginfo('description'); 
                    ?></span> -->

        <nav class="main-nav navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><?php bloginfo('name') ?></a>
                <?php
                $args = array(
                    'theme_location' => 'primary'
                )
                ?>
                <?php wp_nav_menu('$args'); ?>
            </div>
        </nav>
    </header>