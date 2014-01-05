<?php
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
define('DB_NAME', 'eet-wp-db');

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
define('AUTH_KEY',         '<S,l|.6aaXT]|x2-6TyT+Op:.Jl94r--}YA][S~rjdS>/xJtzA*ETpn)]%iXKJ7q');
define('SECURE_AUTH_KEY',  '5N|%]c&_EPYI6iQjW|j!x4Go)!W-oS0;9fKpxk!z~ZHDr%Gy? *Sim3=w|mb^5 M');
define('LOGGED_IN_KEY',    '& MP:GUgR:NQ&[vncG>u `w)|[q .7)m2!8TQN2&tAdG!&$jBo{W!p1b6o}l%<TH');
define('NONCE_KEY',        '<Zga8gEMDlRqAU;1`[=Smz#A#r<]H+]Rnu%s]_I55:iRd4|j]GI~MDRTzc0)]|[k');
define('AUTH_SALT',        'JceOzo$[6x+K?LRlK[khL%wFB%rR&o,#rJu*v7x+k3Rc+ZERbJz,5g-#o}mtKk,K');
define('SECURE_AUTH_SALT', 'vCE)-_ FT=2{==GsqT>[_u%=Mn(4RL@>RS8$v_,XlIi(D/0W$3+{1zX3Zbj^hTG1');
define('LOGGED_IN_SALT',   '{Eg[&EivN_!zqV-+rWyEq|A*yMwQPr7-`v-LkjtP!Rzw.JN+HOj!D$7SXyg;wq8a');
define('NONCE_SALT',       'ZE5jLm fvP)v0A#bk7z$ImHJRs3K-2n=7o`n3V_xY70n|U+jk5sZ;2khqr).ejl$');

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
