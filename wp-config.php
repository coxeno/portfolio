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
define('DB_NAME', 'u931031011_magap');

/** MySQL database username */
define('DB_USER', 'u931031011_pablo');

/** MySQL database password */
define('DB_PASSWORD', 'abacaxi5');

/** MySQL hostname */
define('DB_HOST', 'mysql.weblink.com.br');

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
define('AUTH_KEY',         '+[&O`?TgN!17r)[$arJ1-u*f;%~ls E3*-|cl_5]Yn]TXZ%~}_df0h/VO>VC|zXY');
define('SECURE_AUTH_KEY',  '8[4UL#XK1?7Zi/m8fl=e{1<:a;Nw}gu;)foQ.hR6@QWA}KfI+a@HBm|JO*Qr-8Cx');
define('LOGGED_IN_KEY',    'w+-#3>n6`^NY|$;5x*8d5^i:?(uP?O~&[I?tDG7ZI4=zq 99h*f+p~1sA_XsMLE2');
define('NONCE_KEY',        '`9}CNg;V.[m~+0$z]J*8!x**d#JbW@56+UHKu%a|,M%zm2-new],Zh$qqXfJwqIG');
define('AUTH_SALT',        'Yf>a/@!.NsK6=u!pO@.ecIKd-HYd>WY5>ch_Nq-.Z(YcSyj@j/[PL4;P;53HN#e$');
define('SECURE_AUTH_SALT', 'm[pC[u[S/Tb(>YxCPf#3D$.qqXUS[yOe4KEMSYIa&~Sf]3|$n_g-|dc%KI`S(#`>');
define('LOGGED_IN_SALT',   '7do>@EjB.+kIii4=hlb07PJv0$P[PcUfWmnZ=?i+-%Gn+>MHm2y=#crV|aRpdrA$');
define('NONCE_SALT',       'Y_(#MJP<[8GXL7kj5d-L3s[/M%E-!1%8wXOh2C*+hB(nJ6^QyOeR/JJi)BNm1PM}');

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
