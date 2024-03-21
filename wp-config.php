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
define( 'DB_NAME', 'hamedjishan' );

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
define( 'AUTH_KEY',         'P}Jr5q2yp}Y:K,z_G,]&CskQiOAhheN wRV^7v)ebH3h)QP>A6y`@uL|TNZzGfER' );
define( 'SECURE_AUTH_KEY',  'p1;4|9F!jY#,Z<V(urYvq)38l6,,NX4^/N2Ri`k_N&]^OKI9i;f7Z5cjZC%+$1J3' );
define( 'LOGGED_IN_KEY',    '_W5.@m1j)su}yd`b(2c7cN, !DWH~,9}2u 9O`8sGY%C8o;/n7uY%#^!v~3)^|a/' );
define( 'NONCE_KEY',        '-.jas`lA9p^hs#|iI2:q7^D6r62Ycs}LYFEi:[UGbDS$HC t<96VbNBh==NUB;{=' );
define( 'AUTH_SALT',        'a&)]c5) DS5@V$YY0NXP9>/ANtCA.w2cA:AttJd!(~Gpn!D^k-!u prQj*Tr3dX:' );
define( 'SECURE_AUTH_SALT', 'x%_}X$]873ae&M(m%U5.J&6xv(N&^;mHBq8{wx  a~X2).?x;Kwqm:^Lq[^B :gX' );
define( 'LOGGED_IN_SALT',   'djtG4E6`,%<)+kp0 XjaBuCc-^fg6lOOw[SHbzD5ljqJZH`u1O 2i6CNlTKV#$n?' );
define( 'NONCE_SALT',       '[~V~1?W)t335VR7mw>+SZu8#^^e#H{9)(^]~G0=$KBNFuTx[nkZb,yoSF##nTOGK' );

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
