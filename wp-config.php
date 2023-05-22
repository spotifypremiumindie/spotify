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
define( 'DB_NAME', 'spotify' );

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
define( 'AUTH_KEY',         'niSL?TyqP`B>Ng;Qws0d=$Qqh[Vx3M4.mdCe8,<(5h1M|X2huR5Pa0Ri-f$_6lOq' );
define( 'SECURE_AUTH_KEY',  '~!ETuZvuP:Et[ZHUx6`>W4+[28A76lj1ATCNN@[|_cOVD]5+x#&>Jcup /A%D10Z' );
define( 'LOGGED_IN_KEY',    '25$cc8gbJP$$BA2<B-FJ;u;MBoii/xMw#$P.1Ynxo@VE(5H^MjM1ixW-sVBG1m p' );
define( 'NONCE_KEY',        'x?W/B)#tgZ>9Su1=80lZGRX{2=z~_^H]7{AOi_(]d}rYr{:c/mN*tbQ_a.2i;T21' );
define( 'AUTH_SALT',        'fO5|`^Mdw]rmkfC|ngB,|h_j4<=zz)WxYZ:F*9sE<AP:#0s.VyXtxX;IKE#b9C:J' );
define( 'SECURE_AUTH_SALT', '/v^Vr0F#@?HjrJI:UwKeTF i;;o)fn}S6B.oxl](S&mE=24C5CW(q`ct t!wB]ds' );
define( 'LOGGED_IN_SALT',   'sS1iI0jpwI;n-STen~Z|W(dhJW,6jz4<[|sY8daoWAfsf:m?2h}6{((2.AkhR/3k' );
define( 'NONCE_SALT',       'f8yK[=sGErp&,+V5;cp.LNNaFZf?I!L!&h!!]foz;@j)RgG@L>Vy0x$M<pTP+xRh' );

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
