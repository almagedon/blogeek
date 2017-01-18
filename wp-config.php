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
define('DB_NAME', 'DH17');

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
define('AUTH_KEY',         'Vsc(B4O80,U!+$[542g5K}sAl>Y0:6F3uS<a4/HROdg*_5P/;~0rgY}3&?Ra~qPl');
define('SECURE_AUTH_KEY',  'h3J2=<G7()&=Dp%Z?kZX_EcCN^N^_rnj`UTe+C:@qKTj]!yY.` ?+<YeV0dArAgA');
define('LOGGED_IN_KEY',    'xFlAKmkMf|jrD|Xl<ZF_#l7)8{ydASQFmI[OF#[ 1D*2xWNzGv>_|}(.n*_& EpY');
define('NONCE_KEY',        'w; S!@ [-7O}py[A`A3bx{M[{!1@PQh#B3 p_=jgCaf~$wGaK;8b0Rx-R:0iE1)L');
define('AUTH_SALT',        'Qbv{O^/^&*dY;4`o({xF{ZS7xN2aLj3jPntgI(b^<;3Wrcwe)QA. fWKQ|;Y|RLS');
define('SECURE_AUTH_SALT', 'ze:8SP* 2GHXM6S^1=%A|}1wm8XrlOA>F{Y?mh,ojP8aVo&:2FoTmZe(-fn.lC3i');
define('LOGGED_IN_SALT',   ')oWV_UNqJXO4gAw+q{9FhL:v/`VbSF,{`;#(V&)95HJlP&9o9+C(Ljoqs4?G!9.x');
define('NONCE_SALT',       'sv<j$`xrx%Th;~|(kl8fQ`E5=EH+x6*rHQs YS+|$/;>Bjusr7aULG?;EaksEU(E');

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
