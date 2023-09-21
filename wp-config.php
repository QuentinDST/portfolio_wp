<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'lEY}XhRqDx(j;rEQU408jJK!<w#B`]v}~cbA|ei+)[V)N*_syWn4D`_,|yB4_0Jc' );
define( 'SECURE_AUTH_KEY',  'IDoe(35?9YGJ$aq9Sj&5Mu[5]1qGna,,tE_s(%3!3ep(21qsa~p_K g-xn/;IG)j' );
define( 'LOGGED_IN_KEY',    'YPYv5hLo:ZIt&rr8>C7oG1>U3!:)&*KkVHS*49PK/IU~o.*djj-_Vc?+4Vu7aqfv' );
define( 'NONCE_KEY',        '-^<&boueV4}2BBYe[#DhaL ><*S?EUo&`n#WA{7S!V^j#+L1#FkCm6)I`C-M9a^R' );
define( 'AUTH_SALT',        '0{}o$VvDoB13ZfE~yZ-wI,]5?m;0n[lc[$YLOC;+#%aYd1Zl6/cKJGJ=:b9Qy<%F' );
define( 'SECURE_AUTH_SALT', 'P+VTe[K&(@PKY=$Xh}PQ?ey!OvWQ}?i~]-bFSS9p*/e}nE%#Stt6a||>^ KVU5vl' );
define( 'LOGGED_IN_SALT',   '#.Tu`ug!lf6-4D<f.^,^K:m^dvS?~:}t}W,3twteb0FI/0Hk%ZqlZ]:4MOV:Ekr-' );
define( 'NONCE_SALT',       ':p&_gj]9.&EVMLSpo+g(l;.TSUl1DMD5lxppMzCDw7(/lY-STywQNc?lSAQIkcu0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
