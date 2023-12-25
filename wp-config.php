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
define( 'AUTH_KEY',          'pB,%al3<b#*sPpUiC0`#eA+jt/CP %#$kCT6V<{MsZ3+9#yatcVY!lNEn&pFl9+}' );
define( 'SECURE_AUTH_KEY',   'Vu!Sa0:EFk/tlh(*bv-|vuER+;VcENcfj[w0qb,Kj)0:?rOr^Hy|WlaN6kfIelq]' );
define( 'LOGGED_IN_KEY',     '^Trk@9|[$j5f:t Dgfvw-u[R8Ly(j*,8R#ehdc$&<v8|)pj1x63Lv3WsaU#8#^Li' );
define( 'NONCE_KEY',         '8Ci,v9H!z=rEf ?X<JRHY8/KB34}%x@zUoA2uNG? na7v[UZ~Y,>WE(`[E=4jdS0' );
define( 'AUTH_SALT',         'yZ1oSYVs12`EZ+TQr{*wIs@[BC$>=js//82mPxD{G7UgLS&d{O$zj|0J>z0wQKOS' );
define( 'SECURE_AUTH_SALT',  'blw<N(~!fdr+&2^:?z8pJFveI~]*fa_;|DczK@2@na5ZM=Zn}-c0ok9_d^o]>P9f' );
define( 'LOGGED_IN_SALT',    'U6=_PLs-c99Q^Pj^3P),%F}YZ!NxOuVNn?O(Nbn0;`}&[*9jFQq}$Aj@1TN>%T$m' );
define( 'NONCE_SALT',        'ibG7I:KoJ|[pn[^ysm*8*2VIYLCvN3li|,kt:w5Y}6rb0l?pXhfA1~Z;Da{RNyhb' );
define( 'WP_CACHE_KEY_SALT', '/0sYQXPKt3+%:y}<Fq|8lq~_(>mc|<K{fCX(lR5Ess65Az(&Oeb}<O_<. Nv?T+h' );


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
