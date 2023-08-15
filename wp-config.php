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
define( 'AUTH_KEY',         '(aQdG>UZL=i*kpDD*2i?mIwrx_-H;hGWyqCn3/$`8)s@Xq+kG:Gf&(Z7[cA2u*gP' );
define( 'SECURE_AUTH_KEY',  '$;%K<9sIk_2>!X_A4E@u})]1LX9}YSV,biVxSIF,&j794`D>dtVcEPSGIv G(r4c' );
define( 'LOGGED_IN_KEY',    'Y0FfH?yOn[J=lpz7npwZ&#vVbG63f,g/lOI0@mp:8+#e|g9-~Q~A&%n,0p?1<V?}' );
define( 'NONCE_KEY',        'G&]Z3$p%bGS`&)Mjv:6{24t*5R^AIw-iW;o6O&d97;-vmDZgltrTum@aW95zZm*/' );
define( 'AUTH_SALT',        'T)Ni^gsH_ktdq7s7Y/pn^H@V>SKbLwJ`E&l6?toLWV+6YI>XFcK#Bu3#^Wq< *Iy' );
define( 'SECURE_AUTH_SALT', 'NFsNFaAk$vhY,&~g*)hui8xdCn,K2?1?8t*y75~YC}jPH?|*YF-?)6rp7R$xt(G}' );
define( 'LOGGED_IN_SALT',   'pu[c2A@yHor6PHEzGn8IEX/GSoKAhckQXnP)!Ig=x1JGCD+iqoD!(oN;h}vV<e/X' );
define( 'NONCE_SALT',       '){n1K_FVka4u1Y$ t@dExk2eZ[qr,=?/)bud{#E~bGny)[e/Sk[Z!c6QuHWSR4 $' );

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

define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
