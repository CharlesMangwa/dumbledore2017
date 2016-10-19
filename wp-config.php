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
define('DB_NAME', 'dumb2017');

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
define('AUTH_KEY',         'g3.B)^%!89SNZt S#.pK||M-)SDgZ3|UGgk@0 /hsyu/8d5U9%`vtcOLm]h>N OO');
define('SECURE_AUTH_KEY',  '* A<UT,P<HG+K0b5zF_V 4sL@.>Hd%#-)&D@TQ<7sw-:2B<z>Jy$Y_Yb(C3Yt9PD');
define('LOGGED_IN_KEY',    'SIRny?v]jKoO:nCvNN( 68V(0z+b/jM>y:rCwe[(6,s%,c];o]gBDVFEo~X}R=PJ');
define('NONCE_KEY',        '7SFkl;;_ nu(^)eSr.6Vb|!Zse{@caIrAHOkC7r |C,Cyv F4FQO(alRO+`qJhJ+');
define('AUTH_SALT',        '(nqYk1U4_R~?.HzT?=G87Rc!M4]uyTiskW9@,9+tl)eG,4jEHlTPst(NTJUQ{812');
define('SECURE_AUTH_SALT', ')Z#euu3I(zS>?Tde1f,Y2j,apa}GUC9C:$JM6Yet<1L(11T.fqEh{_e(9V9tsove');
define('LOGGED_IN_SALT',   '6!8K_9A^e/`0s  }snkLS+&<PuLdN2wj>.)t@7o#f*+P~w$+y^9r<>F.7BfbB-2_');
define('NONCE_SALT',       ',#Q&^{,m%*1n,3oV0)@6|vG(YLNwL2e78w5!(8v^B-X)$(q65XCj862;ccLs1!%t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dumb2017_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
