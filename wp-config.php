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
define( 'DB_NAME', 'wordpress_local' );

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
define( 'AUTH_KEY',         'j=I>W$CaX4p^7nw1XkmZopeFu7Iy9O_72)}=&8[E^mHg[!;.SOEQ_q!*&YLqfdKv' );
define( 'SECURE_AUTH_KEY',  'M^fNn8 *>`^aBzW0hH#PI|>}fgR#>B!`7.5u-*%h3g%ZaR-Y)}t92];r@f$RMO|=' );
define( 'LOGGED_IN_KEY',    '!}QV9H2i=Jps5@XukU*]+ 78SDuL].{Y6vfo[%*z|G<u;4bQWgW})+wfaK-;kTwG' );
define( 'NONCE_KEY',        'gI{he8;,W_vO* qADla)}UA!H:6iR6{VmS/tbst5#kZ5(|YSPW5.%/{vVV w:1Dt' );
define( 'AUTH_SALT',        '*ueJo1AzZyWPQI}Q&VeABwN$}SUx([9(&Lr67@3QTUZEp533u)vyBcvX;TQ6oD~I' );
define( 'SECURE_AUTH_SALT', 'Er{ZsbwMz[bQ88%IFr}vKjYfS0xYKC!fg{(d6Rv **QyG5o?MBI~zVJ>@,62mn`;' );
define( 'LOGGED_IN_SALT',   'ooE-I,<h${Hu|z^w2,=>ktE67*45p#i_y8pugW7qrk`Q)(oW[iGtxBZIe|Gs;wOj' );
define( 'NONCE_SALT',       'bv*/5&f<Xfu-yH-h8r.C_m2>~@joPOI2t7j<`qK[~>6DQ&@W+@:U%nxgU4_ h*GQ' );

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
