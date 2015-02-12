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
define('DB_NAME', 'frf_wp_1260');

/** MySQL database username */
define('DB_USER', 'frf_wp_1260');

/** MySQL database password */
define('DB_PASSWORD', 'frf10spw');

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
define('AUTH_KEY',         'lE5kdT8OWk#vuXKIfgOw.~w1%$[u<ZR24ost|/ S9^-J)dVGD&[Hz[drU]pCj$|S');
define('SECURE_AUTH_KEY',  'N<)B(p_56Yb6ND,iIZcj0Dd:3v4Q; @Jx7PAsd[T?*;V$/-@MfG,L0{O]Qwt-RTs');
define('LOGGED_IN_KEY',    'a84om~-7;zp_58Ni%VX!f<,xW#G8+bEDPY}Umt)48(De b/ E7BGGEEChBRJ-7PF');
define('NONCE_KEY',        'ZT91iI~~.xtqk^=w;</|wZ|%IT>p!n.n}V)/Y1ezFk7|h1R.o`K0bW0hNpsgfQgn');
define('AUTH_SALT',        'j#XONm3O,4+KI5kJ}Q{X2;J(13,ALch_}G|P*_7Oj9hyqq7eGyqW~;n-*2GPb7wZ');
define('SECURE_AUTH_SALT', 'WXRlVrmzI~P=Sq^pZ/`P-iS6`f^&2mHJyi3(Q|=cJ=9la0by@7oralRHB7UM&Aqs');
define('LOGGED_IN_SALT',   'jpt]5N6qE-dhWJc|m).`mzA`P?l#>S5[D:*$%AAZw!*)==LXl7tGUERL-xtY2|>v');
define('NONCE_SALT',       'i27+}jBYskSS=;aAcaz;x- Cfswd]s| <}9l0IV<7AjlmbkaX#!DVLd`9IX7q@hL');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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

/** Override default file system method*/
if(is_admin()) {
add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
define( 'FS_CHMOD_DIR', 0751 );
}
