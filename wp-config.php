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
define( 'DB_NAME', 'michaellevin' );

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
define( 'AUTH_KEY',         '9%Lsm/W!C*j;O@ab-ygr;Eclo)35?in4:QEP(8t*H{Go|%hd.(RN.6x_I%F8vxuM' );
define( 'SECURE_AUTH_KEY',  'Sr(qYfkk3o.pRuJD*~A`? )0<YeZyjFGzYp6S9s$gtRX$B*-WseL$|_g*&2=/V{}' );
define( 'LOGGED_IN_KEY',    '<Xqe}OA r5Q3Mx0U_*xn~{*QBgc/eSsGK8L;pr]O,liV^}~Ezd0/UDIn]I@pYUk@' );
define( 'NONCE_KEY',        '_ 8zwmgr1P0=/q=1M$!]#/bG.pW(Mz+F!m4X4/5U(:iy2fc-*!p`|fN#0iWbPtUe' );
define( 'AUTH_SALT',        'GXpGYy;_w.3C^GJcba*uvzsKm^$zHz1%>8q9kXPWp6Q4`F/9IXd~DI/j]/kQ7,Gi' );
define( 'SECURE_AUTH_SALT', 'J<D87?HNdr6?`[Z,bDAJLM#;J6Ld|UP|*R|AI@|}y]?,LNSvmkXsi>w/>8lVqx*:' );
define( 'LOGGED_IN_SALT',   'PH59uDg>y6V%?!07sDpEG3U5%7,`a2,f(Hw ;)nLnTh:g<AF}h^Alfb9K!XkM5*6' );
define( 'NONCE_SALT',       'h0^dWEO_<wy{>Pne<M5gt(H;#3x9(pLeS U|wpY-c0TSf M.,%F8K,0/tl3Sl%k.' );

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
