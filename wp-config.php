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
define( 'DB_NAME', 'wp_5' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'U9kOkjluCyT5/n]|Xv+41cUB/.647Ppzv1e2+AY{y6+A.eCsD$Sz/>Fm%3*jjxM`' );
define( 'SECURE_AUTH_KEY',  ':Bmq{;yzjhRSmb06D_3}x,moE.f=+@JWcaswZLN#w6=E=7rd.!/*|mT>#N!i43RI' );
define( 'LOGGED_IN_KEY',    '7DSp5#8n>e>1;o+UaUF^Fpd(chROp2btPrd(vfh[`$j1WkaD@!Pk>]J|5;Lwai#_' );
define( 'NONCE_KEY',        'D;Y0m<|:!e:X9L#Y4Nmsj}+@FIz3Q@3uL:c8 VsPdt/@SiSg ymTlj/Yp%_]sHAe' );
define( 'AUTH_SALT',        '5CDlx!Z6D5X*g>3k0%yMSW~Tp3P-m,VjoS2jp6whmVr_eV@tx(>B~4A]-@}<D!.U' );
define( 'SECURE_AUTH_SALT', '-s1FXO*(I&L=$}u7b*]=(w?`8JM}2s|s|)=%ueb-;%rlB|^*Ns`AL;~yNagT-J C' );
define( 'LOGGED_IN_SALT',   '1?lzckQnOSJA]U[fa#/p{Ql;)4uTCB,3E}[V ZkZA+.`zN*mBQ<eDVsYRRYC G(x' );
define( 'NONCE_SALT',       'KIsY{{_Arru{2*rm4V9G:{H_MutrE}`cn-A^{p71Vnxo5@:>SX#nW*Q,2!Xz%r]4' );

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
define( 'WP_DEBUG', true );

include_once('wp-5-config.php');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
