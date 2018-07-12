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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'AY)wdTp:ym>,;h,hCcP*`OmY4(#x%zfT%B=2Q/~-vrbL.5y72g50|_-KbH,_$G/=');
define('SECURE_AUTH_KEY',  'bDjeF3krEN&5DNyUQnh3>a*KcYp@VT![a?f@VoYLfO>XHMB@#Qe4WIdZIulh57D7');
define('LOGGED_IN_KEY',    'q}0bjJJC3+?m,iwxyxgON/7B8Kfp$?hSaW8w|qgio :)pP,yitSRAkU6+iMx.AAS');
define('NONCE_KEY',        ';s]^n,{mmKu.z]Au3Cta5NN`i)jp_0)hS58efdGHAF$P!34M;h?<-}_b(4Mo`$eo');
define('AUTH_SALT',        '$,eSnIBqa#51Wa].OQ{g^$EV_X^Ulz<n4drbY}KqSbdvM{,B[A_W`ax+DyWX9S[g');
define('SECURE_AUTH_SALT', 'L-_(^f~wfF%Hitm28k#[0x<W_5J|F7.~AR,%<M<?M~ng<5~b!FmaV&4N[F,w8#*}');
define('LOGGED_IN_SALT',   '!,$cAY0925`w@3O~,~})Nft7 `7`][Li[PLzBgXeN>T `2a~2kKaeCcK?EP[#G W');
define('NONCE_SALT',       '=kgMvj$#O[zY/OP.Va19Mc`GT7,_>#PgiLM4r0/</6$]R[2FTDOW&RZW|jn6y.<-');

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
