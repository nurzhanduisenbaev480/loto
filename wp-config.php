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
define( 'DB_NAME', 'loto' );

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
define( 'AUTH_KEY',         'BiEQ<lM`fW$je<(H2X)yZUsUS7R%!G*_WIv{D<^PgDaoH~&Xup/]DN*z`(E/9F+<' );
define( 'SECURE_AUTH_KEY',  'VJ4na,Rcs_1.hU{lPVxXlZ(+%`.*xZ_4Lsd?r$4rh5-APOp`6N#tKDeK`uYy`yp5' );
define( 'LOGGED_IN_KEY',    'Xu>ehuUV<}MTqhzcEl8U`y%2sK3m7<%.pwQ]V`vV+nchMkSMxf{2:96vl*~y8nDy' );
define( 'NONCE_KEY',        'aS?C(V3d|nhX8EroM;td5Ic#&oX;(2*!mM.lHQw7^663ZBADC5w&vc}$3Y*|O}|#' );
define( 'AUTH_SALT',        'aJ$Jv:)qG:^gKsQr97$B%Sm8OsUFEUr0$Jso|(ABaD)`/X@%J{{4w85n@-=M;$3i' );
define( 'SECURE_AUTH_SALT', ',Wg*6Jgdz*I9?FZVf7h#z1<G0npc Psw<,lZ6(NbJ_JjcbsU>QPRtB|_<=(6}rIe' );
define( 'LOGGED_IN_SALT',   ';u:Jfa@1<8L[n=s1Yy~8VRwKWc-#TA$+rULix,a{(6&e4>rYT<$o@<Je6`@W>r1G' );
define( 'NONCE_SALT',       'UQp9~9sqw&/Ud>|i>+m~q06us5aEFG;?.<<Za3.lX3]eS]7$:WcpSa0(/`H@@:GC' );

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
