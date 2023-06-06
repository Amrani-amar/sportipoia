<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pgL9a1SyGzeLnvMW+DOYbTt6qg5FjS53BXkxAj6yKrgB9QUYghT/ahKLKfzW7Glnt27L2FaeoVX/fm814ENQVQ==');
define('SECURE_AUTH_KEY',  'P/nTQgenBGkWafaIM35akYG7c8YiZd9HvdXFcCDrnf3FK4YJX4t0F1hG2FSfY6ZjM9WQpK85aQ5Qjs/d2jlTtg==');
define('LOGGED_IN_KEY',    'vrXeJYzQIemwab1ciXzO8RfocyT3yxjrPk4qYJGC+BT++rGoDRuHBIHued+cW2Su/zISVhnczrMdyNeVU1jQdw==');
define('NONCE_KEY',        'HodlfKtTltYNyfNeixFv1S0ebJlq1cOs7HRKfTKUJQB9lIVtI4fv+4qyTMtZ2ZiSsfwTtRk33A3q8niI1/PLQg==');
define('AUTH_SALT',        'q5fxo8iSfXKkbR0JS04Ou6oyHV9Hreeq0or+jtFmgg3/SNwoHFSZ7tR+fty4SJ/ulFNrtlJoaGox08UzpuANfA==');
define('SECURE_AUTH_SALT', 'YB3OfCp1tbVIatV+NnCuZNtgpsNEGJd8SdMxlJLeplLHUMq9u1nMrn/iqfhE5rlD0pErDY6pFFRm15Y7wyp3Lw==');
define('LOGGED_IN_SALT',   'E81qsbV9Nj7JHUIM7AntQfifawur/o7pPHDUleX101QCMkg+GMqVpJuMnYV5Ls9RIq+J2anBCtHW1TInmcs3aw==');
define('NONCE_SALT',       'VNOSe0kdBYXbfR7ZgdkF3RBwrAXhzmcWumkr+w0VK4ERP4PPqRKxqJ8Z+lSw3e5erf6p9EllSkJGi7XKpSs5qw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
