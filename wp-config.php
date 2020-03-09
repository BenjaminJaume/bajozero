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
define( 'DB_NAME', 'bajozero' );

/** MySQL database username */
define( 'DB_USER', 'ben' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '9QOSH5s7XH, ZV>C&RIC&x)*>%bC:G$v]d^=7U=1e^iF>oI#NoQUuR1A|I=tk? a' );
define( 'SECURE_AUTH_KEY',  '&@36/A{XW+s,{|&lJ7R`0v5b9dRylq%6>$IxNJ^NImhdcrPonfiI>x7)Ww!;vdlY' );
define( 'LOGGED_IN_KEY',    'p2RfFy~a]MycW`nBnEb9`=9[}]JBjG1AT?>Q4Qh)Xn=|SU[:i#/nK5Tkx0jjy{|l' );
define( 'NONCE_KEY',        'yj~JU)#qo;U;,3r!+Egw)k9o}/8:U4Jc/v%Ed{3xzP-=7j{kqia1@zaUOB18XFjr' );
define( 'AUTH_SALT',        'm$R{}cK}/,y/ZTNIUZXR-)|KRXt?o?#h5`(rxq9~U,2;+QH$w+JM<=Ii64zl:^[;' );
define( 'SECURE_AUTH_SALT', 'kb~2$xZk0`c>P#o|!W#OoRJ6ePVq%=]AP}WQ%iKF#A7Aq$vl>Hgi!G^lRn/>/?gN' );
define( 'LOGGED_IN_SALT',   '_bT_Y`m&l5X.raP$GLi*2Q2nrD5?P:9-<~9j|o%;9BmEE~zUg_E6a4|7<u,Sj3^~' );
define( 'NONCE_SALT',       'Rerc/xF,a|%uUkN^;M>KV%V.ut<r]FbUi_5CqEwmi#CqJLE3 H[-#m#d51 ^8j5!' );

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
