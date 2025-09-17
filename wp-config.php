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
define( 'AUTH_KEY',          'u>9o*1Wv[[Jrg/%VeN]Gf pJos,G,ip[@Py>;Z]!o`k20D4TMqO!$jiCdMrSlxeP' );
define( 'SECURE_AUTH_KEY',   'yU(-H!9;./=6Jz>;fH7`H08TV*r1f<%A.dwx.tU(>c`-1@jy!]k}YKR ;_PkX.DL' );
define( 'LOGGED_IN_KEY',     '81ez@CuZpHh3SQS=hryYNB O}pY)~q,(<x>L5&:V.~k[ht3 u]9|K&){24TI2(GL' );
define( 'NONCE_KEY',         '+?*; 2 %0#l5L_kfEO}s|:tU(n:6$. L<<g)<KA] )V?dzgqTz0SV3:D$XPv)npm' );
define( 'AUTH_SALT',         'v^UKp l5%[&<ZsoAl+;Zcea`-R?M88uRTT*<ZCM_b5:h[A1)z?!|~G>]_2w:H!jI' );
define( 'SECURE_AUTH_SALT',  '#>~yjVNs8.+oX^ WCy3cM.mvB!$HHt`V>%T),N#(zD#ZRQt;u)c{dQ;{XZx1mMT{' );
define( 'LOGGED_IN_SALT',    '}EdK(2DeJxV:/C?vtoeZ>o~wxBMc0yFc)=<K9<rhNa~KVa_]Sw]iKBVnIy|pj:tw' );
define( 'NONCE_SALT',        'I`kFfr5<$<+=MxcS!;z%Ly6c%n1V:9(Aje,;L<7/Cr@W#FY,/[I@>Xm#C<!}u.=(' );
define( 'WP_CACHE_KEY_SALT', '$VNs9ZyP:3lx=.9tfk!xzrQKweM}!7[<`V*9nc2]8_9lkn_*UZ@oPMonva2kf0p_' );


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
