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
define( 'DB_NAME', 'practicaltask' );

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
define( 'AUTH_KEY',         'T%!CP[OzV_&dwN[Wja63:`osp*5;@$&V3/<e,&-<~(B,?V(2IvsEV7gMWY?TL8h3' );
define( 'SECURE_AUTH_KEY',  'jNbswcNbE{kU>K>/t&#=4T&$;c}WUyh+rrrs(:bM78LS>#VSV%X:@GB3ie>cGh@-' );
define( 'LOGGED_IN_KEY',    '33GU](GvHrP9>vH4}U.1wB9n/{MRfPiBqoDy:t.,c!-8ptJ|xbqGQPt4JOOrQ-E#' );
define( 'NONCE_KEY',        'v&#hBJ;X6G@YmFlEtw_]@-Bv&yVya/RW8}bu98H<`oylRxjGgda0GqeXtQK1#+3s' );
define( 'AUTH_SALT',        'sz@:R!gFlWOPx%SA]U|/s{CN|D@FH+gwkC6:p>L}$%vV]L]M{PGV$AT>J2-`BklH' );
define( 'SECURE_AUTH_SALT', 'vxA~+t_+F:*kT*byWSJZDX6$rb}`lyWq+{W,pzAMX}VMkMl{9?~,@l/`K.$_!;`r' );
define( 'LOGGED_IN_SALT',   'Yx9sc?a?w]~L8)0HV~Vfk%I.VI{N<^4z{#Zdf=NiWSkXNqjlNug? k)CsARqPRZk' );
define( 'NONCE_SALT',       'm<2KVT09g-0}i85*?W{-`8Vrrxu5|oV9zG5VO[.ON3&4`$;)FJ2Sp!Z.fL+CsmvD' );

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
