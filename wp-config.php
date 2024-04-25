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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'BRJ$)(2l/ujvaTCo{a.o^nR^O^jhAy:#<&Elh]|=xHDN;kdJ ]DY#t1kKf}r}HXe' );
define( 'SECURE_AUTH_KEY',  'zJ+l+o~G<x,^,!DgRHdOyxgy5yyC^_KRubf%}k=M`}/PJGK6(^Bd6O8r()OhjG/f' );
define( 'LOGGED_IN_KEY',    'qq[zT%<yF5pmoGaZ.ow@4:XxKr6etf/bg$=!kc|f)=~ )m}]%;~;yl7}Opt=swze' );
define( 'NONCE_KEY',        'g[CwX;%y5EOtM6$9xDBauA-#.wEp{bt&,2>-6EQq@Ejnaf1>HM;U$$~Sg;sN7o4[' );
define( 'AUTH_SALT',        'E52(=b&d{%ua:Q0ydQd6CSR?[nSEx]q)a6V>zX@|r^6svC]YBMW`8Mf{XI7iMk[U' );
define( 'SECURE_AUTH_SALT', 'nTW15dFLe:5|3;T%f7Na+6M0pA =GK>SAdoAz,Mw7WxyN7C;,qBgiYLk90$DOyvl' );
define( 'LOGGED_IN_SALT',   ' Y`w7L|-9b*BR.!o* #HgeR( %=jv}F&wg#$G:}J.zg88~ag*J3D}M}QeK](H<6H' );
define( 'NONCE_SALT',       '=OSe{ar0rkCU>2OGhhy3t:hQ)^h/gFJXk!q#fH7UFArpUo7S-Nc~7$i6AOH;DGyQ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
