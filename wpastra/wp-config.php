<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wpastra1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '``${iQ8Fes1UBl@8(`QnCXpw|mmDIU,qtc4Q|yLd.zGfO{5=e2&T+,ZM1[9S$-~n' );
define( 'SECURE_AUTH_KEY',  'JO&=btv%=%o4I#e_7TS1$(0yray10%P1!y<WBm32h8%!tn]gx|u#4:~Rzz0<ftq ' );
define( 'LOGGED_IN_KEY',    '~C=h/^fr[LXDF}}8IW@n+N83El8C317E;UP%jc[SS+sMJN_)dtS,fowK8[EA`0p;' );
define( 'NONCE_KEY',        '6A[&.O,01S~r1;3o4OgRb >m+KcYu{ :-QB=u#}.(_q;?[E:DbRbgeJIi@Ag@i{i' );
define( 'AUTH_SALT',        'o#Yb]>g3]]t1Zp-7fmPycP>hnB-<*E`~x)>33n7cq@xaihF#p:w!G$3m3Sad46h}' );
define( 'SECURE_AUTH_SALT', 'D8HQSvp:@?OMCO3q7LEtH9U$K<NB*p:Npu30V% Nv~MHZ]q.2)^s~q*4I-iQP.-9' );
define( 'LOGGED_IN_SALT',   'P(}F?-pDA2c%W|3*vJHR8&3):Vu$IeMaVTQ(FIIre{zae`Wsodv]0XXrW%ju^>Y5' );
define( 'NONCE_SALT',       'Cr1t9EAx9V,H&.Ki%=6!kxAm,td:/-LcoEo8+kUXDEwp?!;e*.2FkW2z)_a6F}0L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
