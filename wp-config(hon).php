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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'haw1012foxyb_databese' );

/** MySQL database username */
define( 'DB_USER', 'haw1012foxyb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'uuErrFBH' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ey{$EW#d&a+IU+{4@ -%;&|J/eGutsq8N+x;*x6DFXbM%$dy((u+M!xb]0Ip4b6?');
define('SECURE_AUTH_KEY',  '-jw-X,{eg65Iwpt6uT3IHSU*(RsVm*s/|TUn8HvJ5.&D|u{4gmUztZf@,nJT4rPv');
define('LOGGED_IN_KEY',    '.2;8Y<BcJgW}b|@:Wok&S .;sz5=-R8@uT=C2/j6OyxK6%I~7*ITunr{{C]@P]Ft');
define('NONCE_KEY',        'w,4z) eAMn76f[~ac<j9s?mxj_C|S6,lfE1?.-eii6cd#)N?V %~%%f]b(H<6bfv');
define('AUTH_SALT',        'N8=PY@F|9!Y,7/02B1_]5`LUX;CF`KdlfLfx|LjvW.||&E>c2ASELq.yefTwc@tG');
define('SECURE_AUTH_SALT', '$~^5{ H*,BdqmX,z$Tmqu;=U6P*)gl.FU-2!)QOMb~H%>,jb~zzX&T|fsWab@WD,');
define('LOGGED_IN_SALT',   '}N[sQT&tRl*=={.L:oK,XXbU-.V(7d9f}bN!=qR=y.^LORN[!.-+iZvc6rF%E(>1');
define('NONCE_SALT',       'p|EN]f!E>$-;S.-g>/GrIgqMHwefZpOJS4~TWt9M>-MAiFy6hMr&1x*oPb}p6jL/');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kmks_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
