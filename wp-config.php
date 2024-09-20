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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'TrCN=%9&J;mDc.>D.b. 1D+/N*5F%0H_+g#V)@D1fBxCHDoP/`rvh4lLRoCIKh*~' );
define( 'SECURE_AUTH_KEY',  'ZkvB0cT>CnWk~F0&nsF55hz8c[?Ya9|%|02~viC-Dz}Q3Ej9l7S[,D5hnwJYatv*' );
define( 'LOGGED_IN_KEY',    'e;%,h_&P>P/|M5&HrTsK+cthW[>L?cp/A=RE5:HR2_/s>|KbC[fl|x}@5I;.Tbo{' );
define( 'NONCE_KEY',        '^@91Jk/UjZ U2O8R}& D5v<s(>B0VBSD;t(-;`WcWyM/kLDq 0h qLR^Y3K!x!r^' );
define( 'AUTH_SALT',        'a@QCR6_#oxpVq7& YmeSc:X6&7oh+N#i9Q>RkH=}Na^q$12?3T)6W:yK;29JC2ab' );
define( 'SECURE_AUTH_SALT', 'MJ5DZHoNqO)V|C3*+62EHA}UTd%_^L6hrz*T$L<E?#VxBK#pF,N=.(hz5|xsGu[N' );
define( 'LOGGED_IN_SALT',   'u0<:L8,vGRvbstoNe,},yYZ tF|z1#,]p`L4??8naC]EPZd)+P=|V``~*!`5B>G/' );
define( 'NONCE_SALT',       '(HX@<^IKVLk3)F`w&n(T4fj^qIEE4ZRmD)Lp:bk&8(#/o,%h}/XYM} xUR+b:qg}' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
