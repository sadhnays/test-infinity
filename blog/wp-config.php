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
define( 'DB_NAME', 'u469024108_blog' );

/** Database username */
define( 'DB_USER', 'u469024108_blog' );

/** Database password */
define( 'DB_PASSWORD', 'Sandy@201' );

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
define( 'AUTH_KEY',         '/<HKo]}]K3-MSDGE_>%;CC5k$4*VL]mU{Y.Ve]kd=.:N0~wd#e]x$meM-C8RQzR-' );
define( 'SECURE_AUTH_KEY',  'SAg![M %>3FAzxK?a$I&5qaDb7bXx rZFUjw^Jxvt10Gd(dLB5V[R)CWAv73FPT<' );
define( 'LOGGED_IN_KEY',    ']%1)GpcS7v~=mGTLw82F]O$(_uL[I]E8k/I#Yj^x&Z-]ajzI3/h:1Cc80C)*hH):' );
define( 'NONCE_KEY',        'vzVYqy9uR0YJ&{.hlP:P+^`Fk]E]=yO{aW5&nZ7}NuCdHCy&/9#;H,.l%DE>9g*e' );
define( 'AUTH_SALT',        'HLe@`K+[t~/E$T~phX?Le]<r]?56q-B;?b/J;j^04u}-3]kY=A6=>]Mojm-{?8?w' );
define( 'SECURE_AUTH_SALT', '=ZvCjq3lQ,a|Erp,^FJ5a!#60]yLZv_ Hi-:t{W-5El2<cQ0a|q:PM){NV^e!=<I' );
define( 'LOGGED_IN_SALT',   'jeVWBj!bWgkP}4:h2+1SF4*$E5l~J*8TB=pUr5om2>xMYnY=|>!suxUSrUmJ>5Eh' );
define( 'NONCE_SALT',       '&#duiHV|QBQ6!J{X>4VvZn.*0c.H<i;u>YZG%AGHi8)Bd[S3?x(#RF?sY)%dI+!c' );

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
