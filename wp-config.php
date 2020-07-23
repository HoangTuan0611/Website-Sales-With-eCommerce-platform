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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin_sofmie' );
/** MySQL database username */
define( 'DB_USER', 'admin_hoangtuan' );
/** MySQL database password */
define( 'DB_PASSWORD', 'HytHixrCm9' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(T0BeLwA()n,Li?}J5RjB5fO>TiUqT:u/;,vF>MG2f@6>aY,$8Oum4[]}I#9oIut' );
define( 'SECURE_AUTH_KEY',  'Jbq]LGaZq2*a!Zbj/ct$}+XY_u=ns$j^enaH|FV|!@Wc_d5TgqGi<*rW]H_vI>^D' );
define( 'LOGGED_IN_KEY',    'yqvJ@dW~(xWCxkC;6kNaGnffr2v]oF`=&)]p<8mq4DVL@L/fb9v7@ty)j=V]jQr ' );
define( 'NONCE_KEY',        '|9mzWmvo[tR}*Ai?sEK:DM:zGPKIG#d3rdAJ=3:@5#M6XP,#mN9cb;@=dUze;BZd' );
define( 'AUTH_SALT',        ')T)O/rq.73%}ulF^OZiCJcQMym],4hzAn:9%L9=h3bu.*<q9T:Wuh/{_[g~g@v#}' );
define( 'SECURE_AUTH_SALT', 'DB`G2,EAtdsHBdmU)(7mU4|.4qq|+Rc%J{B<E^N9)Ct_73xJP*OLko>]$|f0|@*(' );
define( 'LOGGED_IN_SALT',   'u9cBs[.Z?La|$-M|pSpGm(,M+Wxv7h 1L3SE|6{WBRME+WEgMw:a9SI7sbcnyq2&' );
define( 'NONCE_SALT',       'pz)Q5w-Ku7Vty+a;_O XtI$!>iy4JG EJW6Sm%A[!yr50AiMi-2YHP,Q=/wPvAe}' );
/**#@-*/
/**
 * WordPress Database Table prefix.
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
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
