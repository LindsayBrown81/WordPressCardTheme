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
define('DB_NAME', 'inthenews');

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
 * Authentication Unique Keys and Salts. ~ LB
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{mI^-Y_a?BWV[@S6X.nz5m>Z2g<BnRwTY@U*4ll H09}=8ks0yg:nHvx%swQ/|w ');
define('SECURE_AUTH_KEY',  '-%%:WBX*!PB*sa-bJ-o/s-g7u~h$^<_cQ1HgI$_|pvJse6KXbmLwM_[VNJgL]x@u');
define('LOGGED_IN_KEY',    'w@tD/+go#.^{-p+K^-xTk->:,wAdde<h^tiX:rN|;~ >Gwoun<-q7B5;jv<u0DI+');
define('NONCE_KEY',        's~:Px~(>W^H1|$.dceypi*?IuUq34CpDWcUJ0M?&5?0EZ79zl<CSE[@``SZcwxR]');
define('AUTH_SALT',        'N^uKn;[U6CF+jDSMji9mB%@Vm]xD=`-i]@U|??|;&8$!+l>=CL+$lyv4])F+oRPY');
define('SECURE_AUTH_SALT', '[cX fnGn_4@oll8shkFJ7U!0/0qd8N.RcE4E+`*|zLI |^|8|g`_$;.+>;*;NIXr');
define('LOGGED_IN_SALT',   '];./L=+D[maa.1.k}3y<:]fN&7Zk.[14HI e)?nYn3x@Q_/[tq+]rX4X7|wr|idX');
define('NONCE_SALT',       'cmUwo^)i#CB-vqd-FUbp@]v^|QX(QK6T=(S`4{DMP{H>8Hm7kzbo(EIg8hUd-_gr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_brx'; // ~ LB

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
