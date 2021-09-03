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
define( 'DB_NAME', 'rw_db' );

/** MySQL database username */
define( 'DB_USER', 'rw_db_usr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'gD?nbV{C2^>V.y&[tM{6wbxDhg?z6TMEY>_CuB22(1uV?_z4M9r;GYp-z9J;~$0~' );
define( 'SECURE_AUTH_KEY',  '=`M#,%0qR1n_s?oi<0Ie59mc.~N VTsK`WBFl eeF[yuJ)Y/bUePs49eRDw/CDd;' );
define( 'LOGGED_IN_KEY',    '(.ICj)S8Yc1!2jNrV:5S<J$!Rj!H^+z9tb+M@[*H+@aL{!2%&w~e_poM T}?Z@z1' );
define( 'NONCE_KEY',        '6cw-xz[xvek?e7]b)# eX~:O?I}rfwma+{HZo:x^^IDuN^c>@1G8Px],xobp| }9' );
define( 'AUTH_SALT',        'kYiyNZ+FqoW}g`2Enb5NUXUS5e5Fu]2op~Tmg+p1Vso$uOfu?!T?KG>v,tlG8k|x' );
define( 'SECURE_AUTH_SALT', '&iq9?W3|GCtI<8E:E%x>NizVx9buT:xro`i`Y[x!(NyA-yMLYp3rUvW5,cX4M[nF' );
define( 'LOGGED_IN_SALT',   'Erw|3N#q5*]SLp[b~vorJng|O$=qeZ-M2iDmuOF;SbD7=w7r?({Y)a{f^q#o[chx' );
define( 'NONCE_SALT',       '2Y%mB,%&|~*y-IQ=FT8Y+ I-e8aJ-ZW(&A~stl&crBFU1`sM,`hbRFhq2(0zk|y*' );

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
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
