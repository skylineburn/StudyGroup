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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '<G3Yx8^BKg2nVL80+F)hy[^Tr-wq[Hb f(|XKEOZ1nzo|]*E0H)m[/uS|_M~pij6' );
define( 'SECURE_AUTH_KEY',  '(vEi.2)b0ctTHm(R[:qF_d<dpKn?&kz|Q01*h(:]@L:[NO7LBO.*p}|xl5v6Nt2y' );
define( 'LOGGED_IN_KEY',    '93bCY/dWqMt():3(Va:fEK2jBuJ.*s0ur@_rt#_3s=kO>y(2?WD6b{W%L*QtG.I)' );
define( 'NONCE_KEY',        'VRiG<@@{`8Ebm>FQ<c?YzV9YKe8GuR4$}/{%|XH=)Qd.cZkYvN&qHZ4->),{nn?:' );
define( 'AUTH_SALT',        'tla{.w-)o.5lNPc5xoNF_:rm6=oLe>gV025TI>..1H:SE%|?;0uOhn!J|)k)K.UD' );
define( 'SECURE_AUTH_SALT', 'TZ<b<Frw3gdr_zRd`K&_C<5ycCER,(:1_#mpDc>eeR)q]ipM81:M(ftPP0]Rbo+c' );
define( 'LOGGED_IN_SALT',   '15s5,^(p`fT)*gS3^LQ]WExB*3Kg9y|J3/~!K3Y$7bfg5hHTop:a}a5f^`jQjE<o' );
define( 'NONCE_SALT',       '<)ks!Ty`xNLWul`wG97.@#oY;~vW?yptrdLI4q6ki_mjwK8ZU:V2wru34+bI)H<[' );

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
