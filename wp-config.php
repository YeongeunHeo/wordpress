<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ':bv#q_]E7#wv`Tg1K6:-7GUy:Sw@jmAhpR2)6!fz@14<BWq^A2/|z+o3iG*8/#%-');
define('SECURE_AUTH_KEY',  '<uVpc5vX@R~*wjS{6b=f*+0L}nC/uxO0qbaF!!X.iA/_%]H28fJ+`=^~$ypi[ Vm');
define('LOGGED_IN_KEY',    'a5]XhteN)h)iAp!$77.HMbF&*KI2}yR?>-h}QtY5+[g/}khAv!|@S9U*,c!z} bk');
define('NONCE_KEY',        'ES<KalFYT]jfj$QfX{aqS%D`|zKI(M{Dg@WlC(Q>0+9`qO ]IH,wSh`PGs5akP&|');
define('AUTH_SALT',        'FikLl1,>krdfcb6AMhWG?L,8% ><x(yJ4G0=UG|Q?_yvpS>HLF#V0krTke<+$0W8');
define('SECURE_AUTH_SALT', '|P/gVJVG,1-B+A<H{;@Sl0}$Xc=[i04q/eA1|:XuY0H$/oJ^->wU@(4)k5qDmxm+');
define('LOGGED_IN_SALT',   'RVVSy](3P?b-+&!l~W-L-S/~JpLtZ!>fE^sh(~5>;G%t$qD=>|XVycma&3BmgkC8');
define('NONCE_SALT',       'mKx(^7emr(i8@>+S0Mwy-[|?-u8asl`)cLy`NJ6swl(7B*{T^Bt10YBk{a>xs9gX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
