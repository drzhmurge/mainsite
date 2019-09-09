<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
require_once(__DIR__ . "/wp-domains.php");
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mainsite' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l}R~:i%oo9x[54Iws6s;%iMj7$qu5PogG,Nh5]`Yj.K UCR3&ap^rBozdPc9Ejvn' );
define( 'SECURE_AUTH_KEY',  'mFgT.E=<@^|]m>51,Nl)M[%6CqbhgO$ap<|54L p@|Q>QXK@)ml5im|13D%LHQz#' );
define( 'LOGGED_IN_KEY',    'W^7(OJLe<{].f=Zp0bfavrR`1ByV(4.SBfv4I9:61VzE.aZ-?2X 4&b#JLHNDTh]' );
define( 'NONCE_KEY',        'tqlJT)A6@LudQTvm@(YS1M#-zw[}1#i:|T*NvG`CvAJRHd)t+Kp!xMl>t:5VC[wx' );
define( 'AUTH_SALT',        'h+A~IN_dvIWY?hjl-7am@X*}4)Z} 3t!|}oi0p%A$jfv5Yd8e,B-Z`v<Jc/:*7O7' );
define( 'SECURE_AUTH_SALT', 'PRY>8V:I9Pgf>+I+1<Fe U!sr#?SerI&ys?*`sAml;iES8&p@#ic,`LRmNIhi(0M' );
define( 'LOGGED_IN_SALT',   'YD,J`kYkF<nRHQW^8O dm=mME^j4c+o{5_!_tU3:mi#QyX9s.Zu5)>{>eZ:MG[VS' );
define( 'NONCE_SALT',       '5E~^~*ulm |}9`U:$%=rJ/B&Ir1?#~KQH8}Oafda,?6N^?p7k#NT~m2r=PKv- (m' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
