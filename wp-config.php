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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'mkNbUaayfqK+lBeLOK14A0H8+M3BTyo5DRDCku5UBPGHylQhWXaK7/Qf9Ih07KD6X9yIajpERKnAWaE58CRLiA==');
define('SECURE_AUTH_KEY',  'IkcwLgDG+B/zmTgPjRt/paNbNBVfZfgN6/bu4vyGNi9kRyEOsCAhWjBccdW/THCJTJiepHBVZ+4PkluPTkktiA==');
define('LOGGED_IN_KEY',    '+og+ZDcqjYk7vvZehySrvaeC3JZ+8VuNwiBcbbfsxufy6Q3tDw+77iqzXCDG1jbYIPHReFENt28ULZFbwV/+Dw==');
define('NONCE_KEY',        '7JyB7m3Tsf6zUSbUrLYrWCfI+cxasM3OSamtBon+IYG+kFuFQQ4t41Vkw6WEczeN+12D5xGqQpaV5XQ7MdbfaQ==');
define('AUTH_SALT',        'e34SiiZCrFHIdVzqKdjBxO6/Ta4nhMZuKcPYVzsZGtstT13+GhyCUwKMG9UCPrzTUSPgtbyZHWFv8VlcZmJW3w==');
define('SECURE_AUTH_SALT', 'MCCGeW0axGLV9UqrSI+t9OrBCpWH7yIRGkhyeoutqP7o6Ysdr593YsyHROWdoPID80dAW9eQefOQmtrDecvAXg==');
define('LOGGED_IN_SALT',   'H3YSlskhidbUIsfdVVeIWw1BRzbCU4+oihabAIlyHRFmLUW7ytnie44MxBfm2kTozZOfJHIoXa8KE4RLfwt99Q==');
define('NONCE_SALT',       'BCU0yQTUJq9E22jB0jkA2TzL1PwelYNIQwZaxxAg5Lb9y+aklIZunpIrgMZi8EYh8zHK4NTBP2Rp8IiwYpXkOw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
