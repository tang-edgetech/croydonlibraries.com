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
define( 'DB_NAME', 'seot6_wp2' );

/** Database username */
define( 'DB_USER', 'seot6_wp2' );

/** Database password */
define( 'DB_PASSWORD', 'M95Gp3@3yza38oN_' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'G@4t2n0V!A&!0r2nM-Rd72xi(~27;m]-MS21RXm3y90o%50t~~7cEy[jsBciT3h/');
define('SECURE_AUTH_KEY', ']pY)]]33kZ2[80!*09rx1l8:T@4t]3Y3N81y*eD&YT*#|f[QFm/k1ogPa6-JTuZk');
define('LOGGED_IN_KEY', '3Tw:|ysZNev#X|-3~WK~5gxy%6XYt0~5aE45!55xxB:#85iZF@E&vc-F~7iIaZ94');
define('NONCE_KEY', 'GG99i[h729v/#B(CM~+J(3o]*v43&ehwwh7):Lny1o4&]P95CKr55P~)*w7mP%Qv');
define('AUTH_SALT', 'ERf#_yIb6:s5Gc0[kMqygv7yji0JRH3SD:uc_*z!49Z-WMYja1[37tM@E~t!N_bj');
define('SECURE_AUTH_SALT', '~kd5(%nRVK~p]fB5]a%*;49[zM0#:%lBI[KfM19*22[SUg3lcRjK8bn7;&4mYwwS');
define('LOGGED_IN_SALT', 'CUDu(jiI~-Kf*7A|Vq]*Yai91p*57:1+78Z:K8lL4xzl-X~2(V6;(GSD]VLx08#5');
define('NONCE_SALT', '7p)Im9y!KU)3J&K+J&Nl@Lde/@b[0L|YXGd_hD)w29:[@V&/#5zZnd3zA6U9mX0F');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';
$_SERVER['HTTPS'] = 'on';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_LOG', true );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
