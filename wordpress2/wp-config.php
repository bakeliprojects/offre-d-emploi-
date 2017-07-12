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
define('DB_NAME', 'job');

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
define('AUTH_KEY',         'eU.3(}`)j;l$@9*fVnsMKPPv/+g-(wmIICL`$IDl&P=SVE_u=o!De9f2F1#saDY?');
define('SECURE_AUTH_KEY',  'PMD^ss[F1I^FlrjJx9TxI7anbCe4FtWP_h/B@;G+Tj@8py>(v.0yL`MDMjro3[ _');
define('LOGGED_IN_KEY',    'E$j-3smyxt/DdR5$i+U2eUQ=h?L^FrB4QCmnYU<L_d-d@U8`>:`PsCvF )b#9?Dg');
define('NONCE_KEY',        ':,Ze92f$>2({n,DVw-$K|TZM4,LjwsA09}a2b%9gv(?7lE}Kmm0tV5TaL]5w&x@]');
define('AUTH_SALT',        'ooo$8C3)zj<BjRBAt4anl n+L/64K%6Js]>@X%N)q(Y DOubb)kGcKZtvQ%x1lnu');
define('SECURE_AUTH_SALT', 'V-dOU(|jT.y-X,o$.L&B<SM-K^mXbg~YRH/b;w*K8i]A(l^d,zia<i_OxyN*s_1a');
define('LOGGED_IN_SALT',   'WU]P^^~E3.$|]=69_q@k%dPy@?>}+E`K_Ej1v<LE4As[t7TO02(6i]0c~]{eN/xL');
define('NONCE_SALT',       '<pxP3|u.+lUO)Pq(3?HT~uW<na=isPn4l{pK/)t4V~k:bRMU5Vd=0O6(Et9#Nu+H');

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
