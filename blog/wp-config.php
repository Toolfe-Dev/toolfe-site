<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u840048117_faXbk' );

/** Database username */
define( 'DB_USER', 'u840048117_skHy8' );

/** Database password */
define( 'DB_PASSWORD', '3zHS752dk0' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'r#eFiECH7iKJ~;dxNAff::%&guJK|fJQ1wWm3jGFBK@C:jCRe]$=`?R35f7,`5d&' );
define( 'SECURE_AUTH_KEY',   ',k)TOOm:!bsyH9PZ7.:&v6ok<hdwmc;i&DNG*fgG{kZSw{Og7tbsYZQIs;:vWxGH' );
define( 'LOGGED_IN_KEY',     'eM3 ]N|~@wAz%{A=+5JVbeozYv1phT7nZA.94gOu!QKq-4vH`yFa+$?;owoHC[h9' );
define( 'NONCE_KEY',         'e3mG2tLxEmrXPW]9$Nie%#JT!T+bCjHVb?IO2 wwyG(svPW(9)^t.ZQzmX*oM8n]' );
define( 'AUTH_SALT',         'tQr*r]Y?]CyoSI3[Tu(;V_I`C90U_^8jKTq,Rk>V@a6I.:92,^F}DLgovGrn[AAG' );
define( 'SECURE_AUTH_SALT',  'g+~MRp#*2(c?^GAHoS`[3Yt]pwn*Bsbm+~trzq1s(S&(TeX&15m?%,jV/bDk2r{S' );
define( 'LOGGED_IN_SALT',    'yMy-HQ&$@gLXM4XnkBu <}^~ojm[9`A0}S`UlvuP4SBJC_JO{+@cq4(>*^R*Tuu{' );
define( 'NONCE_SALT',        '^v+VH2D7lOK6f3>z=PsGKdly>zDi()P`X&u-kyl3uTB{WXu>zvYUBquy%&U#K,CA' );
define( 'WP_CACHE_KEY_SALT', 'v>m^9@v}[jRnLYY(ZtHujsZB4iG_X2kO+$>S,Az-WMA70>=yy;b|=S7aV+[~^LuO' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
