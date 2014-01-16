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
define('DB_NAME', 'rb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'BBzzz1984');

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
define('AUTH_KEY',         '<+Jtkje>vodq+vvoxnn] |,6K1GuvFTuso1w+?Tz5&{*)^HBsl+yyjwi2.oeu+.m');
define('SECURE_AUTH_KEY',  'A~}ku)%qq@?-^fwML+v=,F.>>#(8PnZE,%>D.ft1mD]Mx:;$x2-y[+?j:h8XkfA1');
define('LOGGED_IN_KEY',    '(|Bk(@$4x~<I[c@}?yoe:Q}#`^)e|fQTsktun|/IVzIo0LN>KybBb|TLJ^uD/E4$');
define('NONCE_KEY',        'WPmoEu>]jZG+c[e?7+se:HEpK0^DT|>.:&D)~m92L$yq~1i{z9YtM4(ksq=&|EB^');
define('AUTH_SALT',        '9aRspP;r]N~L?|OU~XjtKy5q]apSc7gQ-`V;-&bP|TxS~Y)U&8g~bRQ&1M/ixy},');
define('SECURE_AUTH_SALT', 'C1W>#>VQZdGW*Afh4/]x3H.%O{9s}cxDZJ+tb9)#z#+DpP5as8imT`3@jzywNc!&');
define('LOGGED_IN_SALT',   '-1d[1;H}6d|-P.0*$-NWYtlh!P_-24u8DqsjQ];)sv|:# tL*X--9<[:g&%X`I.=');
define('NONCE_SALT',       '|GbDrEb0XjXyvfB2X?z|wXT.5$Mp%D|:2uUBf[0:w<_c0L)nGefrl5kq%E,PCt/D');

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
