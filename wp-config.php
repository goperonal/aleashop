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
define( 'DB_NAME', 'woocommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'gop3ronal' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'cl?LfY=[pJE$a0UGA/(Z^DCmE:)4 kJFI]gTPaS+S-SRS--ZAj]K~-+gW^9@32&K');
define('SECURE_AUTH_KEY',  'qFnf:u^#q]o4~|TC*sp&OJ.yz{|Nnl{VOwUwp2:j2i}!|pVfxiS~n97}kB,7 dA@');
define('LOGGED_IN_KEY',    '7,fa{7,Xj<m,-C-Bjrb+X|,{xOGPOXA]krmt>ze}`otQTmD<t8O-#d3xWkPYZXP$');
define('NONCE_KEY',        '-m&|{|Bnw;B&0g|*#0ugaC6OpnjP7[$-y8)C%uMIft>nkKjXi06g}wmESUHPhci7');
define('AUTH_SALT',        '(pE3Eh2MVT7A|J5-D*(F&37f3nZkQ/-15ACZ-7er#Nm]Oc}^m0aLDTykdX+?ib--');
define('SECURE_AUTH_SALT', 'vuK_g,)Bzi|F+=}u]&iW?Etb(V3WsF|Mq0R4ep!mb/fO+IC08-./._ZItsXKqO,u');
define('LOGGED_IN_SALT',   '89#.:lS(n$C|f-Vx`k$y?/DJ^PgW|Q+PgBe3#KQ+I*%txCM+|Y4WT^yxK-iX)o}/');
define('NONCE_SALT',       '_liDdIKqMmIg7/#UoKo^x}wAOJfvzTWhgW/M-|2yQMkqc}&f>!rgO=KmoY3!xJX$');

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
