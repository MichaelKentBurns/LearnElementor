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
define( 'AUTH_KEY',          '-LIF<ce!Y}2$N6tqQnu%q67)8t;SR}Jzw>HX#iKS~QKYjEfs[S|k`01CJJ#U=B/o' );
define( 'SECURE_AUTH_KEY',   '(JG#u8{veC;/XYRVY_eYvioC0,xZE!pUk}^wF~f%y3Cis${(m<HaU&47{h,4VBT5' );
define( 'LOGGED_IN_KEY',     'vZ4=`]NC1i.j)#04]8vRmRQcs7?hY?QFY7O~t9#8ONQI_7`$1!_3g,</* Til&fb' );
define( 'NONCE_KEY',         'y/;^El!xiz&G5}-dV3qL]<bzw%.Bm!J4By.FQ$RbRX8T~+Y9orqjb*I`?3f!PeY<' );
define( 'AUTH_SALT',         '-lU_6N(-Z<wuODXv-h6rc<Ty[Ie4BQc*|?Bd2/O{|n+0%#eq}Bp&$V}R([bLHG,s' );
define( 'SECURE_AUTH_SALT',  '$]-1W>/Zchx-~5O;3Pb,n?5LCnxC_9mzV6L:SUkS?O+OwGc&:*U[-GVy++q5B@s/' );
define( 'LOGGED_IN_SALT',    'Sf>m*SKr9xkq+[H<gKELwIhSQS?H:)P!$sOgPcV)q;e;qi$OUdd|^dy-(GFw4txK' );
define( 'NONCE_SALT',        'W0@<Eyc}jn}#z&3z[Q2Dk0ZCI9}x-5HL6J$dgI>nS9p&szi.7jLV/JCId0t11OR]' );
define( 'WP_CACHE_KEY_SALT', 'xF|X<GUJfK[<~TFn+ e&aReS9T_K!`!J$LK|Q~(`6L0<Tkib{xS7*Q3g rn0&pO3' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
