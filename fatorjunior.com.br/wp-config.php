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
define('DB_NAME', 'fatorjr_db');

/** MySQL database username */
define('DB_USER', 'FatoJr');

/** MySQL database password */
define('DB_PASSWORD', 'Wt0DGOuoIM*IuoI3a');

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
define('AUTH_KEY',         'C_EA~]#&`-ey}&_heD,(7<d8xN1bG@N-tOv-w[(.H/q$dIYWr};n*L7@uZp)OSB8');
define('SECURE_AUTH_KEY',  'Dfelc~uRX|VE5(XX^Xd 1(a`+(Ru_g(m;R90.N,Q:<qP}zJDC0|hFAY,5>^LqMyD');
define('LOGGED_IN_KEY',    '853uloHM*HZQ<=.~M^+$-S0&+^I;~7(#/[k>s8xRV@2*)!e3T:CWf 2d|qE9c`dU');
define('NONCE_KEY',        '(W4`q/hfPCcr-Me%-l|#$dk|*&~&QI(4;qU+[HceA&F=Qj?lt:v*Ofl_QUYB=f{k');
define('AUTH_SALT',        'yoejER6n][GR&}y:fks5#dW:@~SqbkCnbg]kxcazda+|E4T2G)3yrV|F7t|fmQoD');
define('SECURE_AUTH_SALT', '=sf&U[zx7F|w+ZrMU=VQ.lvw%gh|<6+GsLtbFS9Ept7~)z|W^)Ge2B&]c~Jo*O;z');
define('LOGGED_IN_SALT',   'Y@LY2&BUc_#x_n:|Z}%m(LT <^h6<UoFje|ge[W[&*qodvJ$NoEZ+4!~,nrQ5m{?');
define('NONCE_SALT',       ']@Xz4KM`:PFdQPt2].<wtU[|GMBNt6L(Ng;5,Z<iRPvmT{LO[)2 7MJa(PKH?2XZ');

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
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
