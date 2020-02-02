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
define( 'AUTH_KEY',         'LcWVz_5Y`^y]V=4$s@86!7s7{@A8n8;L*<2jd)qZPd2;yr$NzOgH/>b4a@7p)g +' );
define( 'SECURE_AUTH_KEY',  'H6(Kl#!=eslixI.y{k7`fY(0Q~d&q,XHd??v7$Bx D$6SOQ}aVj(`/d!N#KXD7-W' );
define( 'LOGGED_IN_KEY',    '_7>y[:6_..iYJ=PH+c`i;jl#VqA_cUp&?R=SwE+[sF26xEdC1jzX:}bM>Oz2o;Bz' );
define( 'NONCE_KEY',        'biHHt/.zf%(iRChYtJan*VRY@C~IQoXk5Ne@F.(?/6;dL-T]wiu)?eD,S_N)sYb/' );
define( 'AUTH_SALT',        'v6PSw|(}Oa+gG3BP*bAWfD&RnU-s@93M^DrZKm-a9Hey3)fB><hut|TAx%.*IDC[' );
define( 'SECURE_AUTH_SALT', 'CyiMyr^e#teJvk$awh<12XP]}]i|nbm/omrwMk=ef7,~y}>Ci-Rm6jFQZ$/[}s|q' );
define( 'LOGGED_IN_SALT',   'tt^dMr}1^=N9u{ZLW!7H}S=ZdyItY:6Vo)-k8r$T$;k]{C^$ALA;]ju7a^~E$#kH' );
define( 'NONCE_SALT',       'MS$(e#VH>*uPCJJ<FdzwWXMErzSS|<a};)J}}VtyGU88BM?tCb<lz-rY]e==s,8^' );

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
