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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'voyager' );

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
define( 'AUTH_KEY',         '?jSQp!k*BqQ(_|M-!}~ToMuL.Z4d!H|G]Mm3G 0VpH(aK;O>%k>rMGWZmM+)f:Jg' );
define( 'SECURE_AUTH_KEY',  'klsXfd,~(o#Y}z?[]k3/sh[4=^T)>T7x!NCD(zyfrfM?YcYfxN~!M?oV`);K9_5s' );
define( 'LOGGED_IN_KEY',    'L&1Dvci?k>srlqZ.<;&Dqg=$@qhyS[ra4^uIxHQN,$3_uHCv}k{1pt0`s &2l(B ' );
define( 'NONCE_KEY',        '1?4eVzsNwBh_9zOARz<U){@UpL00l9/z{MzwT)^^ge$?e2yQaJxxz6#3{hb%A29m' );
define( 'AUTH_SALT',        '|9RH&l>iW~Q=aCf|`6,7IpiU9gQ1(Ya^WqCaFx$HW~o|J.33$0|-7XB,,;?(%4(b' );
define( 'SECURE_AUTH_SALT', '<=W_^Y~0J$}?*#gb{#%!pVf*^AKdUJ;~aDM{_XR=iH8L19v##1z u;Q%*u_eTJ1Y' );
define( 'LOGGED_IN_SALT',   'eAyU`12LDPUo9RvJ>~jzGV5viPzJH<U@d0ocQGlBV>?@:9~?PFiJ7h+ i/&:q YP' );
define( 'NONCE_SALT',       '{PFhW?gw3:LVtfU]qd%-7`L /b3tko@EEt8)PrY<aF{AyIu2Bxqi[8>)%o.~#Wq`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
