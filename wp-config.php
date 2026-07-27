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
define( 'AUTH_KEY',          'Y3h$LnKn2!O$Vz:^ZmyRM:o+q,-^>g7{1U )4Vh.7tn ,tx)9J{xK2Ly#ZSjORkw' );
define( 'SECURE_AUTH_KEY',   'MXw<;T2MFoK@P~<2Kv)Xp9%8 7i_{oU:4rcv+t7p_tySiJs[>dglVOX&lFa ^^,w' );
define( 'LOGGED_IN_KEY',     '~Vo.4{4C>X3oJfmUux3CukTwV<|e5s{CLsOV8q<}=U0-3!BVO-%|Gu%W%,EP0qGX' );
define( 'NONCE_KEY',         'V$QlMm>ekpNp]1gJTMVn.s?-2bxzzN?EP[[wE586UyEYC),RS>|]xN6T22BK@Mae' );
define( 'AUTH_SALT',         '30Gp{~L9m<Lw8Rpi+=6EB_wK`xi0 (Zx(D>]JcPJ9E+^os7>e*~<Dn~7K-vc~6ti' );
define( 'SECURE_AUTH_SALT',  'MzPXhsM^#?v](?2>SmE.-o0<^QTousl8lh;Yg&if:+B5HTVwWcY_SqQztgW3)L?m' );
define( 'LOGGED_IN_SALT',    'InmmjWr78nCh[2kT?`ygdJsO62~5T`*D>88j)xh4X&[30xj7wmmNc~R.P6GRv+FD' );
define( 'NONCE_SALT',        'Gt^r]cIGx?f};A,n/S#;[[r.2MDu[=u7XX9k{ZG9c{4m6M^d+KqI1],hBd=J;Zu@' );
define( 'WP_CACHE_KEY_SALT', '?PQ:KY*-D*zZ3IO[2)e].kQ3BZ%-u>7vG6{HsC|/#EZT8EhR5&0fh3:faoOr3q^E' );


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
