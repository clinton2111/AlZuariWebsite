<?php
set_time_limit(0);
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'Al_Zuari');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'e|:7#7B<:yy7`Huxx70>]5b%.}iN%zP;mKdCT;N}7e9`!nPAcjbX#)uVwOw[Fw_s');
define('SECURE_AUTH_KEY',  '];0S=n2DFCoQ3 )[wg0y5oe,FP52|e7@cWfgY96fadHh3D|4/A,CI[{MBlA|FKV{');
define('LOGGED_IN_KEY',    'c]XBvZRyw-+M5 sK{Fi%caD*%:|dV(ju{jgfn}f1|880h:33Mp[d>eB[blwWkXk`');
define('NONCE_KEY',        '{Zo^+.s-6WrNyIHVEk|BFpZ6+8qgD-<FXhbSWqylZuKg|RZv=>(C*hry-&`iBb :');
define('AUTH_SALT',        'C{%C3/,v0#:H((GY3wRePNOL-*f|QxYF9T/tJ)_a>-D1nDl;%e1G]m|%/T*23zi?');
define('SECURE_AUTH_SALT', ':O,hd&vPcP,J[|m|])xZ`IzH|xb}}FX<VnMZ$grS$z4?F5k-CW|w-tPTt1-/xOEp');
define('LOGGED_IN_SALT',   'mQ3v{BZ+o{sGJwcC+$t-vmw*(@lf_Y?hC~S_M^?1yiMskHt!m4zRM/oU~?yY2U{~');
define('NONCE_SALT',       '#ucZtEQYOk>x8$eeQR$=]O|#4kN>-~TAydWK(ad1^uv9jG8A(GrF*wi$@+|YL&U6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
