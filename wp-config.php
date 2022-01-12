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
define( 'DB_NAME', 'first' );

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
define( 'AUTH_KEY',         '!*IPIbajg% -+Lck(P%?T9vvh3;uCl;:&US%?s# nCrcy98n5HI<>c7r&~(opMFP' );
define( 'SECURE_AUTH_KEY',  'Nq_z?sm0hfQHpJ&eKO]/X^FGL<pYNo>@Cx[|p4MmRTwdh6V?,8=X4d;Wi<+;!+OC' );
define( 'LOGGED_IN_KEY',    'JmKW{XV:m1hmT>o1b^k4Cot!W+fT=<146;7Y&/(S_{Ee#FuA8:]/|CKJf0FoxN<N' );
define( 'NONCE_KEY',        'gz9RVf0hTzu.PsZh4Em._/T<S501)y_itU-UDqUEw:Pk>})Znf!Udvaz7,<:g*9]' );
define( 'AUTH_SALT',        '6Pp@#GG($dHP@cXC&<xYr2pDCM=%_?k%TDv7%}I@+R!BmvhTN}gC8Z84 / 7-Oj1' );
define( 'SECURE_AUTH_SALT', 'R9N&#_Fd1.s{F0mp#/YxsUPiuD+]G|5Mbh*ksIzG<E5d(Gw}G*go;}T?<)wQz~~I' );
define( 'LOGGED_IN_SALT',   'Igj=]<B8pU6,NRM[:M=XA,fdTmpNY([FPxoyz:O;z:lK_DiAtky66~2o-Z9Kp6Gp' );
define( 'NONCE_SALT',       'gvoFf*ro*j!&d=Sy]exF_N%j~8*e973?o,cDHqztiAYru&63do{oB8NQ~]Fu@kFV' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
