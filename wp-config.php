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
define( 'DB_NAME', 'ocgfb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '?V<y*{F_w839KKk#F@OhWrif}woOAIzi*|-jBxDTmw]I$P_e0Aa[EZqL@%&z0 a4' );
define( 'SECURE_AUTH_KEY',  'bioNvqg%c=W.a1V3ENjqH`6c982e`QNO-*vwy 7Y2BuMmxeUW6)0|n_lj?honqfX' );
define( 'LOGGED_IN_KEY',    '$#P|IR~Tf:;)*6S+(;gxVCVOk<?*)lAn;+,d_*CM5N>!X[nDb9`aK80ZiZ*z9rfM' );
define( 'NONCE_KEY',        'M%gR+Hx=r2CWF a~^8}}7k2S_v KO+*ZnI}%cC>^4Asofto:NRlW<0>}No]<G.O#' );
define( 'AUTH_SALT',        '.YV(2$b$x)w@aGR?N*5@~YjN5W<Xq4hJL.@V +ZhF;f%nAWx{U}x0%Ja^=}20O*!' );
define( 'SECURE_AUTH_SALT', '1t962b6/) k!E|3_>0zR&9*/1*kB$I#?-KGN{Gi5J3D%4uHV~n^4w! N$H{Yi$I`' );
define( 'LOGGED_IN_SALT',   '0|pZ@gqoZGeAa{6Fv8Ym:w!y0xB_[eY<D`XW~cN`;nR@H.%CdMsGENrM&m:]USl~' );
define( 'NONCE_SALT',       ',P}0k}r(gZexi]yQ:nn{hpTW@H&uXuUeY&l8:#w#a#^:9J*!<HUxuCUq:XIVgH!;' );

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
