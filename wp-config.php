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
define('DB_NAME', 'andy_robson_design');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '1nOC?H2YAxhWy{?|m4TfE]&RP<r/*fKR!Q174GwIIhJ3MU<~VJ&;y<-[mOQ jMKU');
define('SECURE_AUTH_KEY',  'd+b:g#m`smd` g$CtK 5&lIO0u!`YzEh9oG1Nl4qMQl]:+5,vL$@K4(zLWLv&wIz');
define('LOGGED_IN_KEY',    '#)}%#.zZ>2H!%g6o#o>;&a 7(@k,V6;se-%;7B0U.~]vv#u4M<D:Z@^xT.u^&!sJ');
define('NONCE_KEY',        '[.{P-0)Qtiz,01M2HC0AX`h{@Rptn{K9;tyO 98(@;yKt=$1/z(W7{#e!Vtu&Rhr');
define('AUTH_SALT',        'd0k6,&D )#Nn67z96)$Q[JBN&Qr8AH~5W)E(*AuweKAVb!FzA0?y{(cTw^yG7fG>');
define('SECURE_AUTH_SALT', 'KtPD~4hjgnya.#PMKt;{CUk?L~@C)9)BBRg#OL<Fe}*z_ 9^zD_-Eb$Bs-(C>`=C');
define('LOGGED_IN_SALT',   'JEVD8yfr4B UVSPP=?=g]uKGABliqjx;2[25l0-H05Q+s]ON}CTAE*3FZiOl,B!c');
define('NONCE_SALT',       'u9`$ATd$eom9d!T|~2^{=wa5}o#T7=Va.IENgdFPJj{qGeYKR~X!A{4>egvmiAG6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
