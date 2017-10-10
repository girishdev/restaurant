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
define('DB_NAME', 'restaurant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-y5WGN-d:Hk>^S36nlDYH~@LHj&fW@ss]ca/?3IkDFt1ex|K/fSIzpg+=5(bHt<I');
define('SECURE_AUTH_KEY',  '-XBKv]*MZnc3`J;^NWLzh~!VqsJ$6-MdCOuXU} ME>I~z9<HqtrK!d?SuLEiEtsp');
define('LOGGED_IN_KEY',    'l<> Rtr!@+Cm9BLc+eBbx7wOVfe_u)X]XkQ-Eg95!=2(i-Sv,3B,e(hibkrB(&a^');
define('NONCE_KEY',        'TGVMa_=];XHr(J=,&0uGf=-<-MYEGLX~;Tdf?rR+GED|]wQme~vivlY{;UT%,If{');
define('AUTH_SALT',        '9*DV|K`F[#&$OD5v>PW3w|l=+wWhhEt4%~w#<sRmtx1R1A3SbTf-n&*)WTUX]>,B');
define('SECURE_AUTH_SALT', 'n+|5L=d;A4Xzo, pp$jgX,j?}6NV@#W_w+Ow>G1%i6rZP-(;RgBXO23Wa)+Y:WGf');
define('LOGGED_IN_SALT',   'NNhP:)n$bQai/vK+a+9]%y$#7?ZljhKSQuF$dq^/NbSX0foFM=.0g;+]gJBL_^0t');
define('NONCE_SALT',       'R51g!t*z;;`U@f|jHe__q@52.Yc]#MPzN.[;$,X7clLh?CtuRZq=OyFr%x<w@^h,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');

