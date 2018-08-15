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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress_bd2');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nukpJ0Hdy5MBtg%-q*r`gH c)UdVjWCsEQ@MP$A@hXX_Th1|hX2PTNY7A_[[k6c,');
define('SECURE_AUTH_KEY',  '-ncf` MjEMe~j!dColvux)<|1Y0H>8x`PR,s6|z+3g$yCkR-Yq)kPS2i(PSVm(<l');
define('LOGGED_IN_KEY',    'cN-BLcF`R^n/Cu?sfkvf%1g4_eg[UWo![fd$+N,z&SrpQRbA4]Iz=.J$eOq<etw;');
define('NONCE_KEY',        '4RSfZ^[}.`#:W`I2L(*PM,7CIG!Qso2r|XgJJJ6=BW-^P@|HkA:Z6)f@++iy.VCF');
define('AUTH_SALT',        'Sx--Nh|]J`tpd-0p@wTk9{M-~U=V>u?#<JMCio:QRE$%Vf8xxt*h2>rB2})6L#wo');
define('SECURE_AUTH_SALT', 'A`z:C5g6zT5f6n*Rn-xIu~s9m$e1F.9,xvUg*@=K0RwRxfvf^T8R@=F:Z[4,sWSU');
define('LOGGED_IN_SALT',   '^AH!p/`YOoc-?/ <(3Ob.m|2}q?,F>!hy!Yt.cRB,NH<h: t3$.~DURJk6rA$-W7');
define('NONCE_SALT',       '+)O@pVo5WK#%tyEbr?Lt8lOFg.yEN<P[&tA>BM!I@Xgu8X:Zh;|7[jg(xTf.UA:v');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
