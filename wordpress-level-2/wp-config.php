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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'yahya' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yahya2026' );

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
define( 'AUTH_KEY',         'plQUZ6MQsXl:Q7Mk$m`7ns{V)FEj/vT*m?mkZNoT3H?2#w1I4l0{++pyvw `bjLt' );
define( 'SECURE_AUTH_KEY',  ')MY0WQU%VN#HVmX5z}~U64_MK<DM]W`*{%S~d@u9=SjX4Hi3e= wv$K)-/ITQ9z5' );
define( 'LOGGED_IN_KEY',    'DTLyvTm]~{ S|8$q;U| S2XCs~nytRCLntN2Gbfsox.DO-ItuNoHwIi3nj/9MnEl' );
define( 'NONCE_KEY',        '5OE2YPL#RJIqvbnW{7U./wFuX!2Z_$y9-Qe=i4cV>4+NGsI,hI;gh&8TS(S`XGx4' );
define( 'AUTH_SALT',        'lH^6A3~1ShGWY`36VmLIjTb6]j9.kldUxA6~T(DA$myvMPMv2ac_OykRsg,RZFA?' );
define( 'SECURE_AUTH_SALT', '%b~$,EzL}/P#ZB&.XX,|GDC@@/T-o+,ALwmGA^k8s|; 9cLa>1((y_~B>r]fK|fg' );
define( 'LOGGED_IN_SALT',   'O9<:^=c}QC>eDSDh;C3ldY~-l/q$0}^w=m@j|=B:x|[1nSHAgH)x{$F4[ULua(F+' );
define( 'NONCE_SALT',       'Xd9E}#]fq;4Zc@!S,ur4W<sAD=U#e}J}#Md.6GjU>_.U_k]{ui#b9wwWct#J|GV]' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
