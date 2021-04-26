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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_H}V72}T^y=-o5(5C%{J]ULzjjP_PI:rqHr)wot,2/19$XcAIZx,@]?b?1(e.<)!' );
define( 'SECURE_AUTH_KEY',  'p/g4j2@x.G!~G*z ?}#Olo<i*}1t!bpzN3D/D&lS5prG7B5-U$(rvTuy#m|qQM@}' );
define( 'LOGGED_IN_KEY',    '%0ALw)>UZBV-V.DhfB6nlIDGA9b<ISebVI?4.{s!)o[3xTf>I<kj~l*&^5.w6HU<' );
define( 'NONCE_KEY',        'K?Yc: vUOz0(@t@YmHfZS;PO{^Qt?tDJ;FkNwv~wQOHS:]jz6Ue|X%(xA)>-X9{2' );
define( 'AUTH_SALT',        'dG8{Ypjf*l]~UWVmoGH2j+9y5Jdn!FS!_nGF~3p#twN,a4G*@=nsCD.XfHGwF<J~' );
define( 'SECURE_AUTH_SALT', '.%JgRNX-sQlOitYcEwp0omUfg:0(1C*>>08]KZxW-n6tll3z@WDKCJ~{iirsxD $' );
define( 'LOGGED_IN_SALT',   '^R>baQ}iu{J+>`Wx2jmw1TglUUSPp{.o]n}sqcPpj;^,mdD%}>f@2}X6$Gt|rb(k' );
define( 'NONCE_SALT',       'h(wg%@&;yx%!C%V@I7A>z7r!8dNUdw.T1d< VNX:ym^sD^WE56I.Hkx,SIQ[-b8H' );

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
