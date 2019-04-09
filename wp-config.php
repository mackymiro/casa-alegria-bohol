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
define('DB_NAME', 'casa-alegria');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Bgg.dxbT/@jc3g-$$=ITwUUS?7}%m-4nf*~^PrVW&[9cSFx80KstWHqL]q@4wgc-');
define('SECURE_AUTH_KEY',  'PH<Cfk@)[n8=}J/T WdQf#1lP;3uW 2rS61RmHq`_@:4H]c@@iIa$tv([d>T.6p^');
define('LOGGED_IN_KEY',    'g{fXAU>Pu~.6V?Mpuf/i!gWK;%`*&]Hy]3ySfJbN%Y:sUSaHw8Q^G:K4U/DpJETP');
define('NONCE_KEY',        '=u3*`7Prs*+(@V{i; +7>!Mb<)9:yf7JLJg7PqM*Pgd$6U&SJEKnN*#~!0RY:(/d');
define('AUTH_SALT',        'MwjBm<*mTVupj=ts.NEuH;3+zIIWdGI6Hx1S9{A8FC[p&Qdg It/[*nWQfkbsWk:');
define('SECURE_AUTH_SALT', '6@jSei}X7i<ca4-Mic_^u!]B~H3X@h 7/h35=na-p74 t<+&o:eXb;5L&kBrD1FU');
define('LOGGED_IN_SALT',   'xqen7hD_E@a?w>MlGiv$9(0l8(7~<g&=:qEEh:Vj5q50XVE9,=g0kGN!NO*CWRaX');
define('NONCE_SALT',       'GN0f^=a<})x<Nf5nuL:3#Ts0G$KEYH)TMmSLBWu| h?pvYdV1w~o7aGQTsDdOOAv');

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
