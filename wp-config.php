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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '22clothing' );

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
define( 'AUTH_KEY',         'X(m]s!K6bwXDV&4En[@78!9=qIN]hzISu0a4togX7QJQ1]Z?.FC$/_+DxWZSdV8.' );
define( 'SECURE_AUTH_KEY',  '?wF-:i{km|lua2;&->_.`=T}Fdkjda#OY=/zypvsIx(.vG__;.@0uQc~k_4g>6Q,' );
define( 'LOGGED_IN_KEY',    '*;Z$RPSyw;UHHVm{fak-9C4Mj>,o`NX:jlv ~}*~Gp38rR/V3G3M&B`#@gV-j20o' );
define( 'NONCE_KEY',        'BT$3% $RhA+f&7!qp.$eSRuXiJ/ik7YoGi!U_8;h~o^~@Vw-.pkZ8Mf&*WH^&$&B' );
define( 'AUTH_SALT',        'F0$ps%Ql7:_ R&~b0SY3&@/0@yvvEe 8^?H^%0)HhYcQ%x${aB:P.WB6=n7RD/]/' );
define( 'SECURE_AUTH_SALT', 'hQz~GYlC;!x!|Q,E1]5uk9|>>up_ 8FAGE^SZL^.dW#rp2R>z~Q.HXl(3FtNvrFG' );
define( 'LOGGED_IN_SALT',   'E+k0P@y@b}gO5BK@$60Q2lbxx3V@/u850Pg:Uf{@!JTSor[&lYVy1S~-u0QTciub' );
define( 'NONCE_SALT',       '@_2J7HxH4Octnw;C8~c ao:}wAg;U&{P[Z5,!UZ!^5jO{mFsXAgIL.P&0,0J.U#x' );

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
