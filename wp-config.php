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
define('DB_NAME', 'nc-wp');

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
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':Y3QYk.TdMI,.s*kY*;Rmi:Us;hLE 8X4T4C7~Nw&_z~*GeaTG7M=ArM>kUbtESB');
define('SECURE_AUTH_KEY',  '->|z+8UXw&iCdYaKD!~LOGx]3j/w|w`+i>]g-u?tLcglpuAI_73N1t;JS<xd0S!J');
define('LOGGED_IN_KEY',    '?te&!q0T*ow3cT?5I%*dTa!UsYBJ8kSj ]A/`%0, 17s{[2`J).9k1r}3m8L_(ne');
define('NONCE_KEY',        'FfYN(Q<P?yQzb?}n@-%gHh%yKeog0r8.uKi|A>CQeT?;`t1Q0$N|TlfYRt_|Hrw(');
define('AUTH_SALT',        '*]]b~lLeRLOkUORKn0FBMu^zm6n%BM04FYxEQ1dp/)#;-;EX5eXy(M){!+kACKn8');
define('SECURE_AUTH_SALT', 'zR*$z02JbC],e6e@@P[P<7?;kS<#Y0&4(YaS8+J|Ac<*DQ2T2X8[,2AR BWoc{[j');
define('LOGGED_IN_SALT',   'P+GoE2CQJ-[gf{i*RkYoW*32R?p(q)8SLB@m,09tOX]erzK6_=#B>,=o/!n~L/X<');
define('NONCE_SALT',       '/p>VEl?UH3865m]dMgp@>RMP|*sa-c^1$tj&8,{z<z8>1<YBICy/=>_Ygt?()-;V');

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
