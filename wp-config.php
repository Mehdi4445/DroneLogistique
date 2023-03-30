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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dronelogmod' );

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
define( 'AUTH_KEY',         '7xGcp%6Mm>1Jx=D7Ppj$3k Ol*.`4Itr=+&pT^4cP~P5!OP/i5EdiZm$KTa@zEoe' );
define( 'SECURE_AUTH_KEY',  'DZe^zN~?V/,-GimD64$F4(C5)Z+Wxeoog0D3I;gBEN=*$7)PuF+SuIg&Szl{67}D' );
define( 'LOGGED_IN_KEY',    'e!z<Ho^t/vFZaj.pwVYKPMo,w@v<i;-q^82o:4_C HBepE>uR12XW4NfACS~5nN:' );
define( 'NONCE_KEY',        '+[1Lo%6^a~}sr77:<F:PioCCQgpCSpg1qpZd?6EoZ!4<gds%dtypoTMnQkKrDa|M' );
define( 'AUTH_SALT',        'ft@Jg6XCl%*Pvtzqfb[;pA*`VUZnO8 h;$J`Q`MVQ3|Z9`t3JgN.j0AENjXhJcCY' );
define( 'SECURE_AUTH_SALT', '!h1)<U j2yOS(I)E_P;^ILKXZ?%B{vtQ74OO4p__wG!zEKJ*ZJBiaL~Lp2;SN%EC' );
define( 'LOGGED_IN_SALT',   'qddCu1rw_o_Y:ZI!qwN8Y@Y>A,DO**1:]:4QODk~`j<&|bNfFT ntc|83-SQljFX' );
define( 'NONCE_SALT',       '~X#^xpLyA]J,p/$.~aK?laYnJsDHu6)<qg^;n&i?t(}Px 0y$EU|g3r&N{Skx=C`' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
