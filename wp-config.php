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
define('DB_NAME', 'smstest');

/** MySQL database username */
define('DB_USER', 'smsadmin');

/** MySQL database password */
define('DB_PASSWORD', 'sms4dm1n');

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
define('AUTH_KEY',         's>*}f/!G6V<908)S{fAv<SHR>O5]OCTU2kwA<-UR@)ju-1L^])zx7@jZ6+6.1JZs');
define('SECURE_AUTH_KEY',  '4[b>NLH|p8xV6L9yt sfLR%zY@C}yEGLUrHK/]Os17I~7eogM{)(tAR|!G=@oatK');
define('LOGGED_IN_KEY',    'RZ`o(ZQD0k(3AOnTo6b/jg^{0>Y*nKzrlF>4+Viu&,DE4%D9`mjOJb_4J9FVHy|6');
define('NONCE_KEY',        '%:N&A83sn`K,.XpmdLd76 @*&KSc[0/R/O`g7a8mJH9zXe5p8,#i<X!)oL-}rqMp');
define('AUTH_SALT',        '>zkKp|vK*G4s;lS8D+~Fsc& a]EN$/gW}Y[No)w&c.t.wV>]^F^G~-Pim)`wBMXl');
define('SECURE_AUTH_SALT', '9Bg@9~qdt{5!6J2;aTPZH.]B}fy7c6T>-e0J)II3#^n$F+dFJ|k4n|Jn[w~_c]b#');
define('LOGGED_IN_SALT',   '>d/5nmi`3wC7u_9H?Cz+9f8ATm<4]kPM&Fdh!yrn]vogWTR*Q=ZDgm]Al_qhmaI?');
define('NONCE_SALT',       'Z)OKu `4ZVA,p `uP_[g`d9Gv;2-o]0<]pc=u#e7eVgE,~Uy5|e+t^:w67la3j5j');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
