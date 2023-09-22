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


define('AUTH_KEY',         'fN6euuw3AlId1RLnCN+aiz2XhMxW9SmzuF0txxJQI/scjaWm++JhCYRUpetAP6EpEPqiIAKkwKXjvxOjkt2FuQ==');
define('SECURE_AUTH_KEY',  'GueCu6q7Vs7aT38zVlzo+8Iv64HfXLIzo2znv8n3AEH7bjyV2WNLWTA5rURk+FcRpBUmjDSHdz+WzKNTNRIvNg==');
define('LOGGED_IN_KEY',    'a5Zw23nizTrBAS0VlreLsnpycyGGhDiqYl6IQ+WNjAfrqAR0FVF3sm5NJKSvz3/P8YLA9g2joKS7CwmJE9xuxA==');
define('NONCE_KEY',        'ByPrYxT/nJseZpVzRlZifuzOHP+n9045Yl0vqzFAbVIwKI9ZUsnr+SXj+b85+ynPNmp3wMXSio6Hp22TIbhRuA==');
define('AUTH_SALT',        'l/c/ZrciBgTwhrlkbvWo3/5/GOmPUVGed/qc4B3CtUeMj/r/xkZjaX1R/ozH+hond5ccKqDmbHh+pZ/VMPzawA==');
define('SECURE_AUTH_SALT', 'bmfNqMvChY8eM/qJZzD/KwwAOHaLsGfJlYsLSC/cVT5C8UdN6dxAUeqTKB03GfSizdVRL2oLnUikpJ6rBWr0BA==');
define('LOGGED_IN_SALT',   'bIeiAE9sYhoTFXIx/6rjM7Y87mK0iN5IQDzAm1JgHxbGhAwZEl7QtEZ2sD1CM4gEgwX1Vn2/q6KENvDAtv76eQ==');
define('NONCE_SALT',       '5NBsOQoy5ITzCjlh4dBC3NMlqGg6uszOkEYbNTkDugYyYazPaFqNEKQ8YKFwMtEDA5SdrJJFYSPJMUTmsZQROQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
