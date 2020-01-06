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
define( 'DB_NAME', 'wp_iteh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9.}TaSvuZDGT!{S)on:qW: UTgm7]R@pRz]kw327ndidF$!ANzv_wShU.a}r.lzn' );
define( 'SECURE_AUTH_KEY',  'a*IY@s->uN/r42{SQ4``/OSAGRp+K]s,}m>CY~]E{9kvQP~1B>Ovx[3a;RMN0U{E' );
define( 'LOGGED_IN_KEY',    'P3hH[OE3Uf^G3|CY]@oJq=/=bM2u$<d+qLYmf6=wP>Z:ZlrYeBHibPPU^vmXZa_H' );
define( 'NONCE_KEY',        'J?TtAbJaCMH:33XSmSb>`IUs_i:e?I~]-Uo.DC=1q,}pvZ<RgP`>gS~x8FAH<&{r' );
define( 'AUTH_SALT',        '?7xB/SkPp~ `3~^=Xv9,iMW)%&?RW=hI|FTR&S($XM/{cB,4k/`b51mBatH^8mJ<' );
define( 'SECURE_AUTH_SALT', 'hP4=-zo$Sx(;?p#QZE7xXih$o0cbS{7 68& .sEHkrf}=$k9TKzs?s4v<gY0(IY3' );
define( 'LOGGED_IN_SALT',   'JIxRLou:_TT;A{Dz2}`F/-XGG%}q4?,o*!}l$f:bb5WPu9ueESr=N)7Or4cB:%}A' );
define( 'NONCE_SALT',       '*5:apw$5d!Bm$yRIej}2dG(j8o-cdro>02Rx?A]Oj6yM.-<&QhrxAk tT2=g+Am[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
