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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'macgenm' );

/** Database password */
define( 'DB_PASSWORD', 'Ninasreca1' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '51H8,El{u^@XoM:1}NJ.wmW*UprnX(Ce,`xjX)Wui-dd=|Z~+)a}_pB%R=d|esjD' );
define( 'SECURE_AUTH_KEY',  '8[TE1T3ag!vFRo(f(:x`cWRH`v2ZDig%g&96^UUeb.#UKy4[9C[WPRRYtWtb,)g+' );
define( 'LOGGED_IN_KEY',    'Cp!(=vW|~ l]R<U}[}~~j_L9~;rzx!p2hvM:=k)|m5aSYc`1e^Wk,[Ylc}|bwahl' );
define( 'NONCE_KEY',        '4z~bO TO%FnF?Y,.>Ac=Gi7-dSpZ/q(`MyR:C+S*An:9;/w7f>T[0qkI,d<RU@*j' );
define( 'AUTH_SALT',        '/L,OVvMeE2AH<STky+k) p6p(:w5Ak@k9D*u%e9RKy~g9+cCDHa*a^0?NIwK{z9O' );
define( 'SECURE_AUTH_SALT', '_FT:b<rMjOl; cF<SW`w8~lZ![bO-|3I5**1#QoP!eJ#7<mX{GKbA%MUc:~oEx>,' );
define( 'LOGGED_IN_SALT',   '7Yh.2FxN66^sDlzECAG-JPfhsJlYFRF#I4)..tFbblMK=]2d`^]!mVubH~QOMN]q' );
define( 'NONCE_SALT',       ']NC(1NP^lPb#E0}0^@i7<|]qJfBvS3bur>@F%ax}$V~:cOd!OKdXl[W5{>pq^5y}' );

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
