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
define( 'DB_NAME', 'ilhamstore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '=q3=U,1MQoXC7`;d<;r0*QY>EgO$z<d2,P:axzZ;brzt_>%i%=$30S{Wk3-=M.Gr' );
define( 'SECURE_AUTH_KEY',  'h2)H}w-BN;hbwsb|/p:]%1_BPMA^=0>akh-LQ/OQ-[c[Pmg-F,e|GnmAYcY1 bA$' );
define( 'LOGGED_IN_KEY',    '<:msfbu^j]-mXt|{;*e&R5b;-zjS1?OY+]?*Fo%N|R!x<s%QR}&.$~Smi{Iixw_%' );
define( 'NONCE_KEY',        '<2(YtsrLQ{W4x{bpdz}iOF~_p@6}R^D-9tVwK i$zujwW^v$D[E|i/QPJ#zZNPMc' );
define( 'AUTH_SALT',        'wwxF!)kzPW7Ubl0tpQ6(< Im%Q#G UM=x%K%aDk{Ur1TxvlW^K ySl)<Ai^k<Jx$' );
define( 'SECURE_AUTH_SALT', 'KdILS~n[vHe9$FNl<]?yu3Etf#I1M)O]6-XJ0HTUP<nS|%MBc2_,gr@p| Z{](#S' );
define( 'LOGGED_IN_SALT',   '&zZNV2s^$(J]dHBY)Do5d?QA.o79sb>EN+[`U #:ZXuy })i-U?h!i%_E.x|e;^F' );
define( 'NONCE_SALT',       'JL,jOd(y(/,~!OAb([0/8Ts2a@m.ijD-~nk-WwSx2k/bx-rZ;rQdYTNVz@ G3*c=' );

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
