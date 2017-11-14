<?php
define('DB_NAME', 'arcobotics');
define('DB_USER', 'root');
define('DB_PASSWORD', 'aws@dhruv');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'A7K0NeVQ9gZwKMlQ91grP24vkkJGGebrtKEOSfLC');
define('SECURE_AUTH_KEY',  'dxiIa7WqgWVqyjhdC66sR68xznYOOlOpL1oOWOaB');
define('LOGGED_IN_KEY',    'zMvMpkmYAswF9fsZ8JfwscYj7GhhYhdEd0x63jyH');
define('NONCE_KEY',        'sT1X5SCq4l4Iyx2sArhX1Z64jvnBg2oUj9LPnfv0');
define('AUTH_SALT',        't4wWf6Dim6f8s5V4hQvsM9RTlskLRMowM7IPclRv');
define('SECURE_AUTH_SALT', 'ErNrLhLdBSMfQrjSO8vZxuIRc5FUIdId6km8jG0d');
define('LOGGED_IN_SALT',   '52vlzDWZrH9jvVgLMi4dfSIO99zizrC6x3uB5UIJ');
define('NONCE_SALT',       'godeCmnePmNAaW65UE4fJIy3dkUxG8ZFrp7kY2ie');

$table_prefix  = 'wp_3b61f717d1_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
define('WP_ALLOW_REPAIR', true);

define('FS_METHOD', 'direct');
define('FTP_BASE', '/var/www/html/');
define('FTP_CONTENT_DIR', '/var/www/html/wp-content/');
define('FTP_PLUGIN_DIR ', '/var/www/html/wp-content/plugins/');
