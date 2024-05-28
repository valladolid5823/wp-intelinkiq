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
define( 'DB_NAME', 'consultare_interlink_iq' );

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
define( 'AUTH_KEY',         'I{*DDd?luU|zB@#ePZfPH6:2[xKN5V?hbkvp(?[{ev(6@9xW{6+FFrglcuYli~(>' );
define( 'SECURE_AUTH_KEY',  '1H{-X?I5;j}*ySf}!Eada0!HtbqT#%M*1^ ZP)iZbaQP&hj&!T2Td=RDH!^>/PeR' );
define( 'LOGGED_IN_KEY',    'cphBOTB~2F*OwVBBF-ua8zyR$3BR6H9|aZT:HQ:Y*n0TXa`PEILk5?]w~K-(tE4)' );
define( 'NONCE_KEY',        'Los[tq+u9T?;Wpm~96&NGR,tIA).`zE_!{8I+ry?S_wX5|F2PG9}pB*-Ku5 `2Fi' );
define( 'AUTH_SALT',        '~O.60hAk@AxBhD?B`x Yv2%)S[&_q#s.BGiXsu+M.-Od/x4-%<r%L}q,^I*G.rJP' );
define( 'SECURE_AUTH_SALT', 'L5T$1-8k.S#{ObXNF>Q#zLvG/;kxB2dX MJ^3w6DECeL%!w%W)f*5+[=,zkl5r,h' );
define( 'LOGGED_IN_SALT',   '1G&Gg:*MTa8/.S]$,M}q}25>Vgd6}`w?}[y9LMy#FTU%]v]_<f!6gQ;y~_A=Yn!y' );
define( 'NONCE_SALT',       're.H!sAnS>V(OLceb9~0-HaMASd]:JbiPQu{Ik}>*&!_N(:Bj#c{QMF,nH=B/cHN' );

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
