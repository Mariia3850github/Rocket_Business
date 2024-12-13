<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u0825431_wp191' );

/** Database username */
define( 'DB_USER', 'u0825431_wp191' );

/** Database password */
define( 'DB_PASSWORD', 'F766Epu)S]' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'pmlvwemm2ad9bgx2wlm8tsu3jsx2ptngzo4bv4oh31yjqmsvgzb9ukply8wjxvle' );
define( 'SECURE_AUTH_KEY',  'qnpb9jab2qupmlpfixtkaooecajptxfzexzoc7du4ijobdvoqdistgdcijs1jnqg' );
define( 'LOGGED_IN_KEY',    'x3nurga6rkkjm1fq5yk1r0imefgu76fkws7fksx5c9xgfha1d1ywxzfc774fovi8' );
define( 'NONCE_KEY',        '61qfvtjt0qy7a1aszbmducpz4phuoxkljgxtd1aqsj3ibl8pq7jhpobip4vvcmih' );
define( 'AUTH_SALT',        'hndk5djagp3ijon2eke7rsglh0szep8h6xyvzybfci35d0wojg6zl1dmtyadamfd' );
define( 'SECURE_AUTH_SALT', 'jmv2avktkojfn5xnlcqcyqg15vlkx2x8buymhywd4yz7d2p7rwpap315hqzoxnj7' );
define( 'LOGGED_IN_SALT',   'ctkhnbksfu7yk6kddiqqskztlfhuvk9fpxy4klk6hkgm41ai2fme1qvskaqxcrfh' );
define( 'NONCE_SALT',       '0gohatnu76d0edpl1tzvhdyhzxmfl1oqf3n0dcuty2zevzzhmvvglrretzitthnw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
