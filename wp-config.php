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
define( 'DB_NAME', 'idesus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'x]ZJXl5oPo7XY6>?o8[$PG{9XoO-,p/]8k[wN$o4D( +h(^XRR=qo2PK5i/tvsSG' );
define( 'SECURE_AUTH_KEY',  'S9Uytp]m#o7~mlJ+51jU4l2#B3xG]-Lj45zups|g3 _}OXmxI2apQTb]$nkk@6% ' );
define( 'LOGGED_IN_KEY',    '(oLT J}MK9m[m/zH}+[em1cIiL}``(H[8z$6Ypk9]51!c*3E/x$s}S002GyX@dRJ' );
define( 'NONCE_KEY',        'vL7wK1@#M}[H 3],[o*5Rd$QevcB)1D?~eIG:[6p^=ko =.~|yN*~|wZQ:KvN;*p' );
define( 'AUTH_SALT',        '=Z<cTNRF}VYA!tQ2XF<I1pxNwqNQDg}eb[sRW$T7~c+%HrF~OfZvv7]_c!~DQ%OX' );
define( 'SECURE_AUTH_SALT', 't,hl+YyEOK}NDGyS4L*[Ih%D:q@$S6.$qO|TOU %75X:cK%?V`ulEx)Cu0}t?t=r' );
define( 'LOGGED_IN_SALT',   '[<3UQ_@:ezU/W,oNV{d8&&Y;smG*q;shc%<H=53n sy<]^`ZaM)6R!XP$K.a}a*B' );
define( 'NONCE_SALT',       'G3XnEaD}}ME5Sx^~|?]B-BUD6xR3BbKtt}+LGQnXC~)~!nY_S|^>z1$=-&$7j7$R' );

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
