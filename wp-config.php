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
define('DB_NAME', 'mlvmediation');

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
define('AUTH_KEY',         '9`q)NbX6W:VnOCG<>2 RNgZs(}X[MFU*=VFg.0!T=kbPW9!VCF 3G[vMeeDXE,G1');
define('SECURE_AUTH_KEY',  'm/4zUg7z|goRB%$5$!QplkovG<D``cV)q>U.W4k4%App+>CH%4ny5p[b8iM%(Uyi');
define('LOGGED_IN_KEY',    'Wz4n9:,EM6v)aZWkZf`x%m#|}z2$tKS#WFf~^?uF{ 3bv!g0+L2V>}Ah9P6@{I9P');
define('NONCE_KEY',        'H{.vxod6q/,+{*Kj-%/h@;uWK]cv`5quo&vdFx_X`[`DW3~P:<}bb6jL6)06J8$Q');
define('AUTH_SALT',        'w9}r_6pXUUlY7KE#Sz~(,-c`|Cg6L,#n%r_H<#--hLX~Qq0Q}O-~j- l%bn;b3E=');
define('SECURE_AUTH_SALT', 'Tu:LFl1HVk>X:9!=$lM*yJrM51wY-80b)MJzc6BN@ZdH,SM^tT$rzfMuZU]^V!@]');
define('LOGGED_IN_SALT',   'Mw@{=L:0vZst!D*uw0s6CD4$8tYgjc6M&2g%W.|s9.),R7xR~Q#R64l$*AcpT6,Q');
define('NONCE_SALT',       '8iRRmG;?X%cmdJmiTA9mgg[$.9.n%!n<lRq:yy>5F4e@pu~G:#9m[R5O?;4H-}sn');

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
