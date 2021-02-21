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
define( 'DB_NAME', 'guestvox_blog' );

/** MySQL database username */
define( 'DB_USER', 'guestvox' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jsw90w&6' );

/** MySQL hostname */
define( 'DB_HOST', 'guestvox.com' );

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
define( 'AUTH_KEY',         'R/z)}YEZjuE%Vg]fyBB|#Koul5ru$fU.X6jpAz&Lw}hZctH zAdSlx}z~8~k!H![' );
define( 'SECURE_AUTH_KEY',  '~K::Znvq}P:>QBuu5Qxx`d<]+NW?NA.`nA{r1t1%_os8)p o]Cb9CKAOVb.JXuvP' );
define( 'LOGGED_IN_KEY',    '}eDRVk+[8D;nKHf5vK`ou[i*7y_<yN;X(sHJstKG,7DNrWxCdiqBi7Zwx9|mP=+8' );
define( 'NONCE_KEY',        'GCXi<Pdl=3SBw0*F@sg[[186v~A5~Ka=od7~AT1aIk6xZ.N3yan8ws-KkxeZJOX_' );
define( 'AUTH_SALT',        'S{wWRQLD!3n4nfd#^:=P~9Y[GH[{(~4%XcUIGsQlF8~=aQe``?ol?P>_*6@{P*9t' );
define( 'SECURE_AUTH_SALT', '_6ZoIIB<XC:]bCjHxLM>X}}cs_8NO6qIiR{yk3o9^OCMe%|y8ZEQM3Bi0XteL~/y' );
define( 'LOGGED_IN_SALT',   'G-Cc<7c$pw 7F;WNv+!#.gvm{}KsB>t(35&l U{2P4M+Js%+@1bv1PfD02k5l%90' );
define( 'NONCE_SALT',       '*V:XMlSbVKxR#E,]yG!2~62dHW9 ~|9~KSYwIHIOxLUv5[CNumV*{uq#{FQmO$ic' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gv_';

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
