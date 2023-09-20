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
define( 'DB_NAME', 'task' );

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
define( 'AUTH_KEY',         'T#sFGMmDN-r$UzOoX5PVp7w&{!pav9HrB*vMn<7j~ZB<sePZB,TgmM1 U+OSx~h|' );
define( 'SECURE_AUTH_KEY',  'sCeM=8KP*%Uq6_OW4AIC9gPORLul6pFp|w)KM(pmS{ C9t$[QoEO$hvPTkn(5NjP' );
define( 'LOGGED_IN_KEY',    'BW++R;_;k:Fy?8(1G7ZYd|JYulwBK]%8d<vxXoNM0Gq_8weZ01<{Ii2jrJIX_-+;' );
define( 'NONCE_KEY',        'XkD(qV9vdkxk9rE_Ee1/Ld)E$ ![F/Py&FKW,c9^elqc<}8,,GjoZAD>Od7)+]ja' );
define( 'AUTH_SALT',        '9G8[`<Ha=UPgSE}F4y?WW!=NQX)  !^q20![9v%P=E(.D<;nC@!~a-;QetUa2n<z' );
define( 'SECURE_AUTH_SALT', 'U_#i^#{>;)!AiaXj5.Z&T5h)!.@;jE~3)LFLBBnUrr3i/(c0$(a1%hx},EKzB.C;' );
define( 'LOGGED_IN_SALT',   ',|=HAGe9?k}/]=$CdGd@v7CrBc=v&?x40<3cARAJ5qCioy 1r7ynpkxjquFQ%WPZ' );
define( 'NONCE_SALT',       'SAtT<C`,NB-Ei>T{rm3Y:R]Xa]oWG@!>`x?4A=@6VT6D~DRu6D*,u^&EM%7Uvb4L' );

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
