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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'Abdullah' );

/** Database password */
define( 'DB_PASSWORD', 'abdullah123?' );

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
define( 'AUTH_KEY',         '$g&ZxR!(6rAJ]opc4t*=Mbm;,Lq<)bSi4@Qbk:DVhr.{a1AJ!w70!ghh=Av)9O$E' );
define( 'SECURE_AUTH_KEY',  'Wck%Cp~x5}*8KgL4xzI(j+a}m/6|l^r#[jc.`>g/uJ}GR)IDEAOvHx7~C/~]A[^0' );
define( 'LOGGED_IN_KEY',    '{gC|s>.m}oDXzf(H5l/}*m86yYR3JVymsIK83qd4[]mk%b`/hg=B*Y=JOmXk:b7j' );
define( 'NONCE_KEY',        'b(zypN$P4,SI{Y6[hN)g[?[~b8`,>dtMJ7&D==IC<bi?A[ 01fgyXxGQuPT+9W$R' );
define( 'AUTH_SALT',        '3[k@Ij]io<2<@a_u{=DWU@>=D3Lm&a+_@zD0T:}3~_X-0Z&V2z*r,R{ @ry>8Og#' );
define( 'SECURE_AUTH_SALT', 'J)Y:SCrN.Ka!a*5ZPh``x=a=q8y[sH15p;x/{bZf/*lisj31$eZV_zE9Muu|byzn' );
define( 'LOGGED_IN_SALT',   'W~)}*XY~&AK:S8v:F4l[VacsaO7Gc3-FKdc@v){>$ZQaQ7,-{mthF$G]3eg:2Zpr' );
define( 'NONCE_SALT',       'Z#cpbLm_Ja~`,A]LV` 4sywEQ@cl-_*Fj_s@cZ95Z-IuTOq31K6wn yPrE|.y!Y*' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
