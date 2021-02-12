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
define('DB_NAME', 'university');

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
define('AUTH_KEY',         'm+HGMxyDI}ap3%~{Vim]Zhb*5(g!$Fd?dqk..#vY1!rY@b^oy/1cBHf)o*5)<>/$');
define('SECURE_AUTH_KEY',  '=F5GFVf2P^#GFK+M[Li c[?-?9Eh!W)}x.l&Lvb)^H1Oe#aB3s(,`)KckCRqUz8R');
define('LOGGED_IN_KEY',    '{Mv[h@X;<C*EsFuSi)ehh=uDP!GF&|mFyaX lP2Jk..[mSSTK.LPGtXy`n`KPi<l');
define('NONCE_KEY',        ',/y/H4p+VOv3q`)2lgfZ1)lH|f#CS}71BO-[ilW!*7J{f]N;:.XR=BCR`,8H[,0I');
define('AUTH_SALT',        'An=sl-$)r927N>*;S9`)CW/?*LCarX<ylMD4DV( hKYQY=lqPl>7JR75;ac d$sT');
define('SECURE_AUTH_SALT', '#{L26j[OEV-fsSdHKqmNzBYajgu1Ii-)o97:pPL^l<g~BlpeHa2IpQ^uJ[]T(^yc');
define('LOGGED_IN_SALT',   'M)8O2P_Ss;Q)Vda%jeu*.HPm~8zc0v6OuDlW$tup= Ug5tV0zzSApn`_Z*cn;uaL');
define('NONCE_SALT',       '+PvV7n{9:v)yd<F?E-{vcJl5<iba5{|9CY+h#66Q0Yn6<MjpglZENoo-#-]>l{l3');

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
