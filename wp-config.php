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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'first-project' );

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
define( 'AUTH_KEY',         '%yRTA?s,}Qg$`7?Jd#R[?~-D,D)5_q@Q$=^q*NeKTwD2P%{0EFC{hM||X>uj>x=;' );
define( 'SECURE_AUTH_KEY',  'jV{kl?xU%(O7@G.7n!knJmmpGAww;jKm#+arU]:TWXtu-vGT8f+tHaL--%Zu1# !' );
define( 'LOGGED_IN_KEY',    'h&LrDkUzk8]I+dhZqk-vf>Iw=&;k.6]#Jt (x#b*, $Ee&6yFPX+pZ!_qa?{oU;3' );
define( 'NONCE_KEY',        'v[cUnah+/,dXFI+eWd<I&&.j$VQ0~e-==U({_0vA`?,L?}nOvQH@UmMm8&t _:n2' );
define( 'AUTH_SALT',        '%eIi^p9Pkq||5z{EO%EFr>v2~11,`}!y~R9uwv^S:n[?U;e@IX`Lz{OB|NL|6,#)' );
define( 'SECURE_AUTH_SALT', 'd]G]s5!JL=m .j}`z;A4K7np/14tkfP69rr.JzG<27V@skxx{[W`[H}jME?W<l>y' );
define( 'LOGGED_IN_SALT',   '#mwQ;Jo+2u}sPgYNLT2N/1~Q8T-ke+6m@4*ALmh{w7B9tS0GsmJMH8|&t3&TT+f.' );
define( 'NONCE_SALT',       'VFU<P6rGra_ bL1D3jEOXhyaCbRjQ[j0m4D/AIW6Bw[~04K{6PF`%-&`/zef(M`Q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp28_';

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
