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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '3bx]V%Duxk2Qi0b_?E)]@+Qy+b3=db3uz?czaX^RG3x8@_<RCr_[vMPC0!whtW^n' );
define( 'SECURE_AUTH_KEY',  '|T`#MW()Dd)eL`=A?}oPk(FOqqgAbl%6VXXFuiw.%q&dWi{9e[1eELp#B..cj7U^' );
define( 'LOGGED_IN_KEY',    '0;jmEF]]+hMgX`xS.dA1ZlxXC]`2dC3MMxh;!Xw8J8sOx|l@ufwG%g66ih3.32K!' );
define( 'NONCE_KEY',        '2H9vv*{RF1_)5WA$vA5,5CnOvY;s]Z)d3|_@@[Ga76]*er9c Z{pHi65S-0`C(#_' );
define( 'AUTH_SALT',        'lR!G}d*gb{[LN9el{Bp%|!M()+&WjK$ZY9Z+mbjY^K1~L,NEXcQ`E u4<69AU4O:' );
define( 'SECURE_AUTH_SALT', '@I}Csi>`uR:TNO_-:)JS;?Oz]#$P /%y^(<=[`iG.>1ST^@}k2qotC9J[-nFv6?z' );
define( 'LOGGED_IN_SALT',   'c@,+Q[pzw2rCLJt%xjPbPd^Xs9K@mNY%D(HEZ.xI<Yw{smr8r-EcT+v!u*,Mg{Bw' );
define( 'NONCE_SALT',       '*{fw{b1Ri%rc 3NXBq A6<X )8ciJtWy}OXo1F7CvWRK Fv`b+dq^KZ4srlM1Su.' );

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
define('WP_MEMORY_LIMIT', '256M');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
