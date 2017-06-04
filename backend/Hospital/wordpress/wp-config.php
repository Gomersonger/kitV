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
define('DB_NAME', 'HospitalB');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'H#m}Z?n5P~ |;cH8kXJV{P}z]o)v|E1aqydCZm93ErhesdSe;/Mj,R:xl2tU,Pd,');
define('SECURE_AUTH_KEY',  'ggl<AUOy%s=%B=M;<AW>&66/o2G)5L:^x@ueQ:CQ@GcR<1q@!yexq-_mpCU*+=r)');
define('LOGGED_IN_KEY',    'I|?>A1_(<LYtGz/.[4fu!^3>]SR6D#%&Op,USAS#brGb`ME:(D3&FY6pT2.DHnc,');
define('NONCE_KEY',        'v7s`!^QV:eKSlgvj~qaXdVh.#m1vte`5N<_DW5fJ!%mI]4kp&Jfp>{[TBb=|AfFr');
define('AUTH_SALT',        '{%m?*z61:J66O!BgtTB~rBL3kzb1rr<n6A3x,Yx<f9%2sHlJw%?fbt@Hxtk-eZ3+');
define('SECURE_AUTH_SALT', 'ppa19NHFQspY<m?n%KApB/}]qc=4wgn_Pjvm![0_UW!oqHM]Ux|21(hVt5m7l,|{');
define('LOGGED_IN_SALT',   '0m78@E3(UyH7V^ dmQ;bY,QKYJ EsOztbOpheVVs*)23(XMm;}8s,WLIOpxr|z(s');
define('NONCE_SALT',       '+Mr8D>VH8iNGs4%:`!&~cm2Ui}#H;W&(nW9l&cN1h.PG>MD Tn;L}WN,,ba!E(B~');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
