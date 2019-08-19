<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'selus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zox+1cZumie40o&Tqj:(&wL}*eXor11~|Ku(Seh:VKMn]A_?6>4dPn?K( 7HcwPB' );
define( 'SECURE_AUTH_KEY',  '~$/DW_N2pI_?<JJ13t;axM)kJ2G?kIQgfl4*M5ANr|DoP#Pq$t1ThuOkxB,).(SW' );
define( 'LOGGED_IN_KEY',    '*CfUkI|nR*w7`;}feY%b[5S,rGnMqKX;#=^B01IsG;Zzcr6Qm+qcvmn>FNnI|%ma' );
define( 'NONCE_KEY',        '!IMxfCoz&?Jv[QZC0`J30IX> JVW6$5C(rwOWTfm<}FGcl$BBs ~z1$=~5J_t`>O' );
define( 'AUTH_SALT',        'c(~+=f3Fu$J4}[#QPnbEp9<*1-:L~?|s1b$sb3X+P!S?j/WH*C9Ji7e>DG~s*L:[' );
define( 'SECURE_AUTH_SALT', '*;oQ A2.+MHPO6JU<:O_@u,%ad$4N!$?`2* e%l;zCsjLH 2w-3@Z?;6wNU>},UA' );
define( 'LOGGED_IN_SALT',   'JE>Qz2%.$7&R8^%D r+eE)u`|Jzcs/hQ*g1 _ww9Lcz<V0)Hk8P~2V27{b5 pxdT' );
define( 'NONCE_SALT',       'wo/v<0W%d6+-5y D^Z{z#V[aFtj>r+ xaX RG=<n_kSX$]EOXvLyGDAIs!&wkd&&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
