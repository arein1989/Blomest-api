<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Blomest-api' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Bll<CfKYFAsSS+g{|`CP$!Aq+!J3azb#@0[_Rq3O4*8W$Z:(4L^C>?|tv=eyeq,B' );
define( 'SECURE_AUTH_KEY',  '5*Uw-jR%~$ }>yqE=/%aK/~}%$tDpB#<u&{Q98]hWCS& H8B%Lmd<{C{WnvWd[xE' );
define( 'LOGGED_IN_KEY',    'FehQJ]^i3*2EM^cZZN*lI[4g!5Uri+UOaw5S]U.!A.(2H^MhaL31sIF2oMZVDqOM' );
define( 'NONCE_KEY',        'nLuz]vE99^tcxRCfZrlXpR)hLx;cT``V7AV,BEo@jLQGf[yZ+qR|Z1#}-fmZ{01(' );
define( 'AUTH_SALT',        'nrTx{bk?9&iM4]e B ?:G36CJ _=!n1^tcx(Wc_EBGast-w]L!>fWg2)?U&q1e!*' );
define( 'SECURE_AUTH_SALT', 'ktK+4jvi90s3a8=_m/]5/Sg{ULbVp-Y0>;]!OSL792AY&4qm}4Kp9Hhv4uE5,`0q' );
define( 'LOGGED_IN_SALT',   'mR`P7O]86su0SQ=Mi[0CLGob(PK|$HD=jS:$,)z?WKtX@8C*ckMReRhYgvNnY5NG' );
define( 'NONCE_SALT',       'H8<u]7WF:Dj5.tFLPy/T#J1-X.E`^gN=2t@tf~T90mtv[gbm{-p)2#G[q6c>@b!Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
