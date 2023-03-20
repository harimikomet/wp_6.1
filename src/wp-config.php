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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp_cms' );

/** Database username */
define( 'DB_USER', 'cms_wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'cms-wp_user' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'g(tI!9m;+18V+|R]$hnSLLOo-&P%WAL.3?)&_8rWC@qasfEq*YL8GTI:uvvM5L6A' );
define( 'SECURE_AUTH_KEY',   '(t?Y3nIKo9{w)GKm/k;|<lVj^u+RPe$MMt+HTx#9^8fn7z_|f@hu,xFIo3(rV/iY' );
define( 'LOGGED_IN_KEY',     'qLW6?AEZYzgV<k9:2lcDmPE]SU)^TqKo^q%V8hzf*~bIO:8REm>.8]#mavuhp(ER' );
define( 'NONCE_KEY',         'F/zzFK&7-ObX,ooFQZ2tm`wm@entHJ~3Q C{3!K@$OV$d=GA1$]VRwA$=F/pD-ZL' );
define( 'AUTH_SALT',         '3rCSf7WZk+;Y)lI5)rC.i hb>Bx{ft+zcj/%ag>qz.bT@IOQ{CFWNM2)sQFVkw;?' );
define( 'SECURE_AUTH_SALT',  'aojykZ@c~}]?*04WHHEi(6FHudh1Mn}[!*Q<883~q))dl/%sM+HA<dgC:{#m0UfD' );
define( 'LOGGED_IN_SALT',    'O~NoK+zUQNn_/_1spSx?_m7jtz`>g.7_^JD$MWh8&AaQYaR~o,&t:sU@pmk[]Ou2' );
define( 'NONCE_SALT',        '@TEJNv%2!d)%42hB!FY%)48XT#IWvAEUF%O`X1{((Y#voXgkzb&nrm}orPzEwRXm' );
define( 'WP_CACHE_KEY_SALT', 'lua7H,)pG%}vRl ens)QqfJgA^3i0(xR4aJ#Q9S*z;FU9mE9`|+c,f}*:gN_  n~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
