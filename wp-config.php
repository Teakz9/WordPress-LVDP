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
define( 'DB_NAME', 'laviedesplantes' );

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
define( 'AUTH_KEY',         ' Mh6&iLT`3m^N6M)#u&_4HpLz!}[ro09bFw;st|6YO&%Do0%<X`lKe_=zqYJsOk<' );
define( 'SECURE_AUTH_KEY',  '#LVPPyefBZ-:A29C<ldauwbr#S%~#SDOZ= d9dk+bnLt&?L}L/&:=nEa@p0ILv0T' );
define( 'LOGGED_IN_KEY',    '?m[T]FEU6dp-n<A{.nr/xR~A=/qigWNB>!z=Sb{iG$?=S{lRqQ#BCV83&fb|R6:B' );
define( 'NONCE_KEY',        '.H8Y0dB>RlCkYPVb}Ktb&/GI}I9Hm!mM|_>F.Y?x$v_8PU5`bL[h{)gJ~-acBqfc' );
define( 'AUTH_SALT',        'I!I/G-!>1TQjyS_63Y2nm:C?Ft7nw&>V@faZ) 8;P?MYR)2-AxK%3Y1v=B/>f4Ao' );
define( 'SECURE_AUTH_SALT', 'hgqQTE1~Z9zW?.umIJ6GC<|a:_jx_4P(Krlih4cNoG([wq|kvPAvW@yNTE/!8~Iy' );
define( 'LOGGED_IN_SALT',   '6dtjLzC)*m$=>bi?6K~B]jEkq>?{#<IcRG-<X>N@deHRHM%JO^#N=8sTPLj)evvX' );
define( 'NONCE_SALT',       'h<Q)=+3~4kyCAKLoYvmaR+vkh<LIx1Jl*7}Wv*:9~oHRp<}7IBvH~c>(!)i$r_BH' );

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
