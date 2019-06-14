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
define('DB_NAME', 'castle3_clubnautico2');

/** MySQL database username */
define('DB_USER', 'castle3_176');

/** MySQL database password */
define('DB_PASSWORD', 'cmxAPBzTFrEN');

/** MySQL hostname */
define('DB_HOST', 'db60a.pair.com');

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
define('AUTH_KEY',         '<f+>)}&F.E2KopOOKERlv>a@o%/ilR[N)+StX}aRr;VrQLrZ)[}t9eu}`qkQL:G}');
define('SECURE_AUTH_KEY',  'BpYO]Z(AJ`(!C|!A-2e(/Zj_JvEp+GJ#Yzp+D8SR0?Fv4v%F_yE:[Ie|XS.8y+,)');
define('LOGGED_IN_KEY',    '@_?GuGis@S6AO*|Mg`dKU-b`[sK[  E3#*$,$?go1R |FudnSwF_T~)wZ},L5E{6');
define('NONCE_KEY',        'Y,]HRmEl`qIXaJ(p2YtT=e@dSlqxp&WaL)96DLv>1AKC7w(iex,;J_<>DrC>/xn3');
define('AUTH_SALT',        'H0Dm$9SEL.qVE@vblKqc4e_sy7R}!#:L1dm~sU_1p7K<dK03Uu{6FeE^UW?V.O//');
define('SECURE_AUTH_SALT', 'b`9uD%InHf^+KQ>-&]PSwP),P0=RQ$Wk<Sb+rozJQx%.=OHSE+|.V{%lhep2Z[+R');
define('LOGGED_IN_SALT',   '}7,_@|p3q.I tbdI[hIHozjn+DM0T1@%he8fBgI%(iRA-KsIURR2irX@&S26?S}g');
define('NONCE_SALT',       'CF@$!lMZXW#o]tl<YL2<HJ4Kc!t 7.C+Hav:`CY+.rEa`v7rpFq8Km (gMvrG5Wt');

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