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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'X+KQ29A/`Ok)~umSTRXF!;Gh0J].rbZNU4ys_OCdjW=)k.zN:PDt9*YDf3h1nC>M' );
define( 'SECURE_AUTH_KEY',  'q`ixK$kGsUzSQc1G7$A{=AJ;1I`g@8.2q]Rmva/_)uB@SbKq4Ynn[=L8_#B+x*LD' );
define( 'LOGGED_IN_KEY',    'chhP# .5SSNXPe&]yb_z~kYs.oMnQCz3zG0)dX]sL%2,j/d?s2,Ne(rwYk8,}`&E' );
define( 'NONCE_KEY',        '>UJE WzY8vgDz:Nr^,*ofe6Pt|Y<ft3Nny;*sKb]CeaPD9vV8O i4o=!Q`WykIy5' );
define( 'AUTH_SALT',        'VeHqgO]Kab9PIE~^JzxQQ?ecjYkOgGfMtvw_(^l$cu<hn??XE_sPk+9.>4J2<_aK' );
define( 'SECURE_AUTH_SALT', 'K3:xEyMa;q<8Y_vuGsFC*1u&t~W-rws!z|YzAd<,o,:O(UL88gSuD95fhGcBZExV' );
define( 'LOGGED_IN_SALT',   'Dt$x:%`d]dhFr]-:zf-ECW]v(lw>Tmhgzcr_nxqB1@`+k%0Dm_qg39ZfQ+P/*SU]' );
define( 'NONCE_SALT',       '<Lz;H2Iwzsg<wUe!%iXxscagJtB]!qnPG>~a0iN.S_<QtXG&$${KE-|Y@<E<l+Y!' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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