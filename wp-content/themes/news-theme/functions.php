<?php
function simple_news_theme_setup() {
    // Добавление поддержки миниатюр
    add_theme_support('post-thumbnails');
    // Регистрация меню
    register_nav_menus(array(
        'main-menu' => 'Главное меню',
    ));
}
add_action('after_setup_theme', 'simple_news_theme_setup');