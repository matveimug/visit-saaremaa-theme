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
define('DB_NAME', 'd23332_dbnvisa');

/** MySQL database username */
define('DB_USER', 'd23332_nvisa');

/** MySQL database password */
define('DB_PASSWORD', 'SBV6ztwNPfzxWufAdmsm');

/** MySQL hostname */
define('DB_HOST', 'd23332.mysql.zonevs.eu');

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
define('AUTH_KEY',         'MEST.7JXtc~1N{@l2K&fF]h1];)03Y[~?30P%$Nc9XI?$/L~@DL9D{6#6-N4;bg|');
define('SECURE_AUTH_KEY',  '0?ECjXD6NycU( vYpm~>0qoZ)1EHg`Oqdk)rF(J(nj=.b9;be8KLc@KsT<1{c-[%');
define('LOGGED_IN_KEY',    'l=9!R]97^5k)y],O(p=@ Pm{#&le(:5$i9FWn9oV11q>Y2Ekz-}-Uo68LVx]Dq2u');
define('NONCE_KEY',        'q,A=A[WDq0cp6jWr4S_xpmmKwVpv:%.s%hQD#|w?NG9,Sd1VV<%l^t69_7aKmzRy');
define('AUTH_SALT',        '=Uqr5)8U1Uemg]EyF`fLqQd*x=h&1o;1{jumM>sdgb>r?Y)(3cat7>?4.Kdy6 zg');
define('SECURE_AUTH_SALT', 'Wz+V:P_e-ZjuYvPAR)%By@!(ufU?DYd:1TL>>G2AtI;s=pFuKtub&8!wwW)z@>.O');
define('LOGGED_IN_SALT',   '}=$;f(=3AJZ$yAl21,0N;bD:-}E=[n#>G]OOJd>$};ycCMpu0lyl:qw^mZ7E-8Jp');
define('NONCE_SALT',       'Kr VmZq`QxFE,w@NT>>GB`v%;Xl*pM^OIj;|ntk?p-Y@y_>uAXfxE[A.Q;B:J,S^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '6DcWtJ_';

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
