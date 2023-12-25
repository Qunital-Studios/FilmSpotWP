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
define( 'DB_NAME', 'FilmSpotWP' );

/** Database username */
define( 'DB_USER', 'Stefan' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'XccvUW^32X6-)+YHX+<UYW7Y1e,Cp1D8*xS~yN=<{G1vC?0)vQC(0vuIm{],>8)*' );
define( 'SECURE_AUTH_KEY',  'Ce~QiHm$(r+Nf~?yaPfc:PRQ_MR!%BKmO4o3;DDEWVI6-P*(Uqd9<&yd~G[k<]FN' );
define( 'LOGGED_IN_KEY',    'M+:xnw^m $v^pg7/~tmv][-Tlj|_rrba38=I4ay7;q!5REt8|Z?#X;<`5_y~alP$' );
define( 'NONCE_KEY',        'Nc XAcTax2i&&geEz:?wBC5Bc/nIpV2}Q<.bWLea:X/h]p(&Y^=>9(KoAI2Q35bx' );
define( 'AUTH_SALT',        'Yc[HS[^sO*#DkWA *rV0Kt@rtXyc<BVa@Mi#DAS9}JWXjs#%6}orF,GM|TB~J $s' );
define( 'SECURE_AUTH_SALT', 'y)5K3Y05fEB~F@sGPfsrMou[0.1GD14hE^uR(>Ot%r$M!t4.G;i#VXtqj_KykG8=' );
define( 'LOGGED_IN_SALT',   '$m(|v8Lf4MtS4)}k,|fF,.y5E~t,g/0@;=/!C9rXbOS39Lu5:%f=`D1:LCqM]97*' );
define( 'NONCE_SALT',       '>#&cYP3>oEF{5*]/.vr:6s1W{~0<HMA7 mAU/wS])D%Bw)nzCjq]WRUqFS>2-Xrb' );

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
