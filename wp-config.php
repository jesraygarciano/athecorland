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
define('DB_NAME', 'db_athecor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password123');

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
define('AUTH_KEY',         '6LgHV.-+v,^`<DLLJD$&)4$!)X&qdOb5ctj^)M|,#y| vYgO90pwIYDlj/)_TV9(');
define('SECURE_AUTH_KEY',  'kw9Jd9|L/Tk@ZOR2HAcOM1IJkTHkVL=jZ-se{x9$@^$(MAeT-rHtLb0j~<_a^#Ry');
define('LOGGED_IN_KEY',    '(4Y]6,F1Jf{f lZ&]BIjhis($W6FOA8q{N.7WX62#akt,1.Jd`c7=(1`ps~>&f=N');
define('NONCE_KEY',        '3-#2<1X:v*pc-24eos~tqjo*O]6rzf-K$W:N:y.c;EW:%x.vmaR!6;Ncl*zbmZUO');
define('AUTH_SALT',        'TXz`rvrsXZD!;wSi_<t.7g|X4TFB.!dSq;of}_=qZ8r>=[!1c}Gp|Afw=Z@I{J-;');
define('SECURE_AUTH_SALT', 'yr&& M_2xdYhJL})1LBwfIj#syR_lxC_s [p#8O2qD!>Km+}~-i e<Fs3=jP`zH[');
define('LOGGED_IN_SALT',   'cDiKMb.a%tW};>PXb8y3E~=57Gx(jJVo+`-mYStdR=z5v_P$fbH+Lb/NJB}K.|S?');
define('NONCE_SALT',       'v3N1y:]9{*RD):2:~N-^7!ir#@q$wgPi5TQHM?0%&6E,^LYVK3. p[)ka9C9l$C(');

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
