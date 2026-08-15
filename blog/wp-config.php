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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/u469024108/domains/infinitysofthub.com/public_html/blog/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'u469024108_blog' );

/** Database username */
define( 'DB_USER', 'u469024108_blog' );

/** Database password */
define( 'DB_PASSWORD', 'AdminWifi@321' );

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
define( 'AUTH_KEY',         'oFdH93db&J-^q&V,[<c0fAzf1Rv:CO8N$s60rqZARCEA>A)OLnu=.bz;[svt#bph' );
define( 'SECURE_AUTH_KEY',  '!$_MpOdZsrKSnu7NK>kV[;LLzR%$EL2TQX5=OUO%7?n_x2B0@d,;}(C#iRZLieVZ' );
define( 'LOGGED_IN_KEY',    'g8nUx`$tYS%SUIsu+;R*aIj3oYo[Y/^65SORu[IXrhsnH.U^,GZn&#H&oh|Bh`sK' );
define( 'NONCE_KEY',        'V<G@|F*{np+1mqwt>M+vblR]x,+70Z`EeH)DyW|M@y:Zb0__OXw^oGPns_9`E~}4' );
define( 'AUTH_SALT',        'I#-qVw2GyQrhAdz?+{JY|mu,QYfWS`VczNiYS$B{5v1++%s:Wd/B#&;w_N^RN2B*' );
define( 'SECURE_AUTH_SALT', 'Lh#!Ko}./0.}_%r6{o=BRu6`Uz1[Ci6ZnxXD590e#o:uwLPza;La({NOBLoaGM[|' );
define( 'LOGGED_IN_SALT',   '97:nxf&q^H/Q%]|!SO^xM:M!{VE8FM[/hJw1} Ds`%^-qve/~cIx/h-XW3zm<yC!' );
define( 'NONCE_SALT',       'j_mTH,pMMa3_{B5 g.L^d5@shOrmw|hg7<DTDqU.5>!32T=Vq*LWMB(#b=Y:Jy7s' );

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
