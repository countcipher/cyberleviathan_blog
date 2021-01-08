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
define( 'DB_NAME', 'biz_wordpress' );
//define( 'DB_NAME', 'chriirfa_biz_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );
//define( 'DB_USER', 'chriirfa_g0l1ath' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );
//define( 'DB_PASSWORD', 'dv=M@(^hCLkv' );

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
define( 'AUTH_KEY',         'kJKxPc[ir.kkrGM%clyLp1`h79R(Icl$)]>s(JIZR]i4)/U{PmZdcR6>@+.z{hgZ' );
define( 'SECURE_AUTH_KEY',  'xVbLgyyL? c+zn;Mwg|HC]:/Wrz>`h.18>N-Z@,.nf$Fbt(CUt_B%Re9wdV6)O}W' );
define( 'LOGGED_IN_KEY',    '&YW+~Z&Qf<.X0t75[amYm2xgHw?0fwuAwc5DecC!edr_$Q-o/WI!js@)p8uj^,@]' );
define( 'NONCE_KEY',        ']<.U(Ohj,;<9vFz?;aOo+#wi:!8hj5&UM&?zY 96Yb<z7vf2.7UI*#d/Nt44H3D+' );
define( 'AUTH_SALT',        'sa~3%t[DH*1/t|B>X!3]S<BpSrVLQ_:[$S9@AT3Ys?vf?G?ChqwlGE-H5R%Ya d/' );
define( 'SECURE_AUTH_SALT', 'K[4La&=%=NfdSw}dNp!7(r?d6X/Z<T8mMElv`;o}3` b!n[]0:Fd};4,xCF<}[d@' );
define( 'LOGGED_IN_SALT',   'VD.B5buMDi!a)PdL6_9liS|s>K9oHw,?x-5{`PGA47vDm2!HqjVWR/pxV}/d?3xs' );
define( 'NONCE_SALT',       '8LhZAK0xf*P;/SIwaR.!j/|fUv2$opy^4NGja6bM#d+EIC(b4:ZD&fJ1j-<;e|vr' );

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
