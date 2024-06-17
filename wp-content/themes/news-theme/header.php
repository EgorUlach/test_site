<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
    </header>