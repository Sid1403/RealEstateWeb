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
define( 'DB_NAME', 'realestate' );

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
define( 'AUTH_KEY',         'uKt_HWcjS,U[p^QY#hSeA14{Q9&4Hg%2*H,qUNL!:!-{G[/Qw%woC.SETk?q4%=u' );
define( 'SECURE_AUTH_KEY',  'SfuD7W;05Iel9$f bu!GrBY!I)!$qt7{x#7P5#f}XVu!&bN|Pw06Ps(_skgERo_H' );
define( 'LOGGED_IN_KEY',    't+s5iTofO48ZG9phyBz|NM.#e&TCdf__~pu;n)g@m?!|zS-wL3Q>nI9CM`bRv*>5' );
define( 'NONCE_KEY',        '[4[8UB4`n24O?W^y2+5y80&i3JiR3nZeS9z/j]8?Ps*fp3WiuzXYt2@8e|KuI?AY' );
define( 'AUTH_SALT',        'IY{]l48e?S[N_IC7IQXC|`+]}z<wK)QIF&yg{Qotr<8(0iCEU}O(ql-Xn8Njet+:' );
define( 'SECURE_AUTH_SALT', 'n26tYmYeu4VaMZ&V04:uTM0zG5?j5@Qltp3dg>)t$S@)/xH)Vb4wwGkr/eL,-(2 ' );
define( 'LOGGED_IN_SALT',   '{BofokEd-*8C5.9 rZ@cmb(8lQmSieE.k&SqxL:<FDGR!w61+_b!nuMDE|93fFU~' );
define( 'NONCE_SALT',       '+V>mDA~kL-uer!5:JNL9ico~e!vGc`/O8#D-,9)ZOc[~mF}gY}/nLzPdM+#I~?FK' );

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
