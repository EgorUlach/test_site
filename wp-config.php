<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'egor_test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J5>Y+~kq{cgv!sL#4]4zD!VnM:@{Qt-v2f~man8uenp)-xY13=3wAe-t^0CHJZ7U' );
define( 'SECURE_AUTH_KEY',  'o{kQCk=IRu{JMl*D]Xsm2zw`$?1uF2yJ=U2K+$A`t>G`#Fr^PE@=Dh&aC>Ww7g$C' );
define( 'LOGGED_IN_KEY',    'L$ud@$/FKOg.0d+)-<VfS$/f^<v/-n`XMiLx:X3.+[C]:wx<bh:]Ydh.9jyg)>+t' );
define( 'NONCE_KEY',        '?:}(%Aiw-vI2<Qj_Bbk#RMP1L4ovb]9G4=3<nYHv,/6H(?%eH3j$wjgW+[H7c1#{' );
define( 'AUTH_SALT',        'KUQ/=M_@{OTv:hW@Li+=NxKMT*:vz;Ee Fe&6``@BiTUXG)_qzzH{iHDJ)QY*XCa' );
define( 'SECURE_AUTH_SALT', 'tc*#,BOH(.#h)BP$w[pmfWm/;van=W7:<)r)_Qxa0R |e?,myrK|?Wyi<f9]+rl+' );
define( 'LOGGED_IN_SALT',   'rNU[X[-}W>U]8YT;zY1W;Y_R^w^sc>;jSR849Dbe+m4(gdvpK%O by)vZ|EV,mRq' );
define( 'NONCE_SALT',       'qq$G)yYCKGu._$<9HFpn.`N%_?]Py7 $fu*v`|?>DHu8$&!J3#.@JXsrd7?}r~o|' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
