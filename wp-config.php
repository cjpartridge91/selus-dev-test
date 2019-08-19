<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cjpartri_wp693');

/** MySQL database username */
define('DB_USER', 'cjpartri_wp693');

/** MySQL database password */
define('DB_PASSWORD', '!fo07@S8KP');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gr7vg9lqjkolmiixs1itkl84nezdsntzd33lojnufoqgqsuvmkt41fjkz9xmy9sm');
define('SECURE_AUTH_KEY',  'qc9mfepch8t73fcnlxz20vx4zbwx4kbzdo1eklpxegidf9gwcbfuz0aajtjrhub8');
define('LOGGED_IN_KEY',    '15wfimqtfvh5dyaxdberfoyvs6fr4euvemhmgmkxwm9iqnunauusiqvh5uypmlri');
define('NONCE_KEY',        'sqpinjhskzlt5x1p9ze528wzt0nr9sy0loxqjxotj1prjzhbx1ystlkza2dp5g3l');
define('AUTH_SALT',        'qskggze2ijeo4w5exwxmsihsqpvf5pkkw0sbdz9mckeb1dfhbejua2snrgopiwxu');
define('SECURE_AUTH_SALT', 'e01fuxxzb7lkwyrvtxljzl8busvy4ckybeqptsyvxvijd4flrlrsxxyzwrqmwjup');
define('LOGGED_IN_SALT',   'trrd0f1rqlyidnoubfpuinxwdqw4sloo7tai4sh00hxpkv0f25fojne0lngeumxo');
define('NONCE_SALT',       'zkymy3zmiwnja0zmm0ymi3ytvlm2i0mzzkm2yynzi1ngfmzgyyowewnguznjm3nd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'r9d_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
