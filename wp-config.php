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
define( 'DB_NAME', 'insurez' );

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
define( 'AUTH_KEY',         'nP>Z)ry,pl7]vG{vD>@<(cVuI9Q5)X9}_C0,DW`uIsiPAr/ob_[Y29UH2T!-Z7u9' );
define( 'SECURE_AUTH_KEY',  '),aIxbGBSI=yNrK]yNy.[Ih#)O2n~-rEIH8sIy]}1`9rnLZ*lG~%.cuu1AQo&YB+' );
define( 'LOGGED_IN_KEY',    ',WanLx[ }C!Rix)j<#R|kmmHN.O[7dhQhpY]i9Y8Wm66UdVo%on:hCWYyns&un+j' );
define( 'NONCE_KEY',        'e&OBRw)j|ocJ+.3:03PXd_Y)gxCbt5^<6XhCy;1t)H:nc3)ifYiZx{tnT<VI5uQw' );
define( 'AUTH_SALT',        '7U/47N,EooC|Tvqu%o!N]VRH`ecP <C-oYB,:BkXw/21 G,c$Jgv,aNL}#c+k}#X' );
define( 'SECURE_AUTH_SALT', 'VuLD6FE%@v`ESFw`;NBAC|fWy_ih]T+YF6b4`bx&(z),TVcPa,!;jnnRYNFrLG`q' );
define( 'LOGGED_IN_SALT',   '22^y(XM%;$l#fe8kI$6T#!;!y/;Em5Dam`FT>-Q.<6?,]=p{48[Sn@d&^b)C#0wG' );
define( 'NONCE_SALT',       'p.Nl1`R-x6}{=ug PWSbeOdl|%x<xFE}>L1*,FoJ:!V>/<v|!Ge~z_EiEk$iMDtO' );

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
