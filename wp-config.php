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
define( 'DB_NAME', 'buginitdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=1x:yuQ/+58e8xGrx /S<Y9R?94OuQMJ-fM?q=)XHu;^==vY%q$U2s9y:d:yh?V@' );
define( 'SECURE_AUTH_KEY',  '?fW%}&DI--lCuT_!|}K[8qT<6#T1OZ-zW=1Rb/vB=N>tL^~/S>t>C`4~vm3pnhJ$' );
define( 'LOGGED_IN_KEY',    'zqB#=<Wd_7We(kExILa:Fn1wP5![;9*&YxYxJ<4rvzLWDBgY7CrX4Nq4jo$B3P#O' );
define( 'NONCE_KEY',        's[Jofsm]UxsAa+]p6D7v<|[S?$=H-_RKjGC/t@t7.RzU?pUlYINos=MYrL]#o:%1' );
define( 'AUTH_SALT',        'Nl&+1BDi?9U-Hn|;&N<|?8lc3hg~h$K3 vNQs15^)E%3:O*=l-e;z0I^oP13cvzM' );
define( 'SECURE_AUTH_SALT', '2bX7k~0]B?Y<=Kow6 <9_S6j`2WWF6pD^b]G~a/8(m*yP>L.W4?<a]u~Gr^*hr8%' );
define( 'LOGGED_IN_SALT',   '>D100vcW,ZWa-P1fi(&J:w,LK>(jq;*rV?n_<aE9:NI*(N E x:%v]%ve1ayq pl' );
define( 'NONCE_SALT',       '5bi+Z}:Rx[Vdf@IwZ7ZI6Lx9e@}[+l3:JegnPN.}~k|)_cmIL?%h>S*/.G%(9xF3' );

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
