<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codbyby_cod' );

/** MySQL database username */
define( 'DB_USER', 'codbyby_cod' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tEGOUzKYc9frfC' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b?YroIY%#,rNeIQ22/p@DPqt5=GX[v~Zn*ei5geWoG}l ^~H7NzyRWK$kg.5-kb.' );
define( 'SECURE_AUTH_KEY',  'oOJ!5sdSsd!b-X.L4p$L&:()$P8,jcp Oly<-#!X3 tLo=r&t,4nv7%T!VW{^zC[' );
define( 'LOGGED_IN_KEY',    'L>ae9>h2ZDnCI`!~)e(]WPSutHpmH/pGx>42M}/OI6zEoGN.htie@.-b)}y1zk-(' );
define( 'NONCE_KEY',        'r+ReLrnp6mX4<z)|.eXvQv-JM:u%I+3/a#3bm#5x&P,}sy O!8)OcqS<AOS?niOZ' );
define( 'AUTH_SALT',        'CCCS]46TwVZ3NA[7wza7?6Ie<iLmFCleOXwI`<P,mMO;oxIZinvtZOwI$2Ygz{xq' );
define( 'SECURE_AUTH_SALT', '>uX[cs}kUo-b%*K[D@/STL6vc.=zsEFzD+_v2/ZL]^#O|%1p.M<(?d6)MuYS2&}?' );
define( 'LOGGED_IN_SALT',   'Doz 4^_vJH*VmQb_Wq9]o?if7]eE0ki|,,El+0<3%6lrm4u5{{@r51%+^<M`_,-S' );
define( 'NONCE_SALT',       '&H aj||{{B&Fc`0i~s7IIA5:3#-e8axIW8A,&oXMAv*ljC`l}:lQ|mbImr1]}2a[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
