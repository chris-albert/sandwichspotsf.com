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
define('DB_NAME', 'tss_marina');

/** MySQL database username */
define('DB_USER', 'tss_marina');

/** MySQL database password */
define('DB_PASSWORD', 'ZcXI3itvsky');

/** MySQL hostname */
define('DB_HOST', 'mysql.sandwichspotsf.creasetoph.com');

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
define('AUTH_KEY',         '$`$ ?Qu5QzEGQu.OvG,#xc;Z/BWQL;ndRX=NjsN^{7Nap@)`/E|4cBtSS;IZp.tT');
define('SECURE_AUTH_KEY',  '0_DyD_]fMFzB9wpn><7LTq`G?ZEnBWF7C-t$S5~};cy:lu_m;-=sUw!B|6QRK|Tu');
define('LOGGED_IN_KEY',    'wV^?sWj=Cd|j`.Vi7!igU-`IMWxu,aZ!f! iz[DEc-nVeWLE? 3TyN+t8}NmlkSC');
define('NONCE_KEY',        'kWh!233=y@/cA(#_Xi/:RxsJ9jg6CBVuz| }0R 4Jp$i7~|Z$Y6)qv=(+f5Hw 56');
define('AUTH_SALT',        '8ZwC}5j2M{osW[GOG`No0IsQFKNcD;#_Z*`;C*VqbP#1`yi63^WIEl R<5HW{wCr');
define('SECURE_AUTH_SALT', '6D:DE?=qolyIq5K$!xzw^<Qy!f9/r~-H6$t9lR}lV<7e2A)xF[*i$qk3U+azS[s7');
define('LOGGED_IN_SALT',   '@Y[U*bkbyg(UEG^h}rpOG#HuAH5??XzO5oz%AR/9S[+3bwI22)L@*&2k0&%oS=hV');
define('NONCE_SALT',       'HCrAdG~EO(?VtnOwWZ21dlh6CR-wFeN0 zKrcn)J,f8c`CToY2Z5@nl@uw#iF_GF');

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
