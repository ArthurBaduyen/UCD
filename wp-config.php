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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/ucd/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wp_ucd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         't~yV[-qT >{&Nrc|gi.JL)Zp>?9mG|OQ_Lf&Idn,vKMaLzk?w)?.Gh}&@|+)du|-');
define('SECURE_AUTH_KEY',  '1}4|/r~X&Jy;DHLIyhZwMN5x-v~t5I7HdP(_|Iy)aPE=a&eBnJS9H+<_CD-yMfG%');
define('LOGGED_IN_KEY',    ')fIwb`+8b}0lJr2~%PMJln@D|ghWSF<?x+YKpzL,S@/bJOd)uf5~+&IJE`9,s$dR');
define('NONCE_KEY',        'F^$vt|uA(Wh-s45j-kfHk~vs?iGBwkSKP*i,L$XyYB5Jk#^!BE-LLj9`BBFrB`$=');
define('AUTH_SALT',        'k~I&Y;C>N/Op1<qT!.jK,>nH4jk 9F+p:}=#yUQMVG5vzeI@xoJgef),B-+p+LlQ');
define('SECURE_AUTH_SALT', '=-sC7wQK-+^!+3+dTxdhMA5d*IB)@LSCpaK7VO?2pJHeVfX$H7spp#|Ox<( -Fo.');
define('LOGGED_IN_SALT',   '8gZ)~*n)+UyRwV[qmG^1h3KyJw]`:C9.9Q N,|<c)DC>w0O1E#2~r]g{CQy<hBUe');
define('NONCE_SALT',       'j@s<tacQj#IMROT+IVF.o&rP7w=V: ;,It/@W,*E*Q=8e|HEE6pEyNF0*T(()8~v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ucd_';

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
