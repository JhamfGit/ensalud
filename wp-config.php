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
define( 'DB_NAME', 'ensalud' );

/** Database username */
define( 'DB_USER', 'AdminEnsalud' );

/** Database password */
define( 'DB_PASSWORD', 'Jhamf123Mic' );

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
define( 'AUTH_KEY',         'h%`wP;(w!H8Rpf)EI~morAO_},kfQ^zQrOxF!cCzYgSxf4A;Qh64KXr[,9ZrF?; ' );
define( 'SECURE_AUTH_KEY',  'OrF=`-yp_HdVZWXLKF}li>wE!Nn+@[9#r6v1Vzoob1jcq]E*A.rYznH^@P;+KBO8' );
define( 'LOGGED_IN_KEY',    '#~%H%vIcQ8Ao?ELL^@j-oszTp&!eyf~8gO*^_UO5Tq!h6s;6=`$w;(+ ]/G!_2ah' );
define( 'NONCE_KEY',        'tm(xiS7x/0>|Pc+v;;@lG&TRVJj5s+g}AirK6}q~BVJo6(/Hh}-h2L}RraP{|oUA' );
define( 'AUTH_SALT',        'I}u[,m[oK>ke;LJ}MX;`C)rr!265NV!<6mww~.|r /Pl.+k.vz=?_4iNF[,8>R.J' );
define( 'SECURE_AUTH_SALT', 'L9)qM$xS6BMUm2:vi/~>*U!>Ts)I-)Vp0p?)mU0@z5Td nX0h/:Sk=e=5 AyC>r!' );
define( 'LOGGED_IN_SALT',   'g@C5&x|Ys/|~9[k(J!(}P&=O!J,Cz8c{Afn0b@O14er[l56-|n)WK<(8NP;#$S9T' );
define( 'NONCE_SALT',       'ENr+?8a8WlO%0Nk%N!l9/iAa;@jTC>KxT+<#Cfmn,AVNN*PtP0Zfd8Bf#Q-&I em' );

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
