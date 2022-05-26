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
define( 'DB_NAME', 'hrisdb' );

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
define( 'AUTH_KEY',         'V-]#e|B@;j?2qUcMLh9W5<l@RBS}Ipi2ccR;7wNYE4AeMAx(igJ=QxDGG=G<i%pF' );
define( 'SECURE_AUTH_KEY',  'D6<YZ6/`(/>sK+/N,4N KkVT&KrLw+Tv%%ELk;6zBO.vyRgL6^t}lw_SkGA(A5a$' );
define( 'LOGGED_IN_KEY',    'N.44P9cON(6Cx}83?YG8uJzo(,TpQ8r7 n{w~5nBA1Ns?U9<D03f]XLEbF:Z>kPr' );
define( 'NONCE_KEY',        'W(5$d^1AKW{Bx=vn=~sm(xU`<f{X#@DJDUbIYD%1?LQHu7_I5r}*nW+;1P/<[QBt' );
define( 'AUTH_SALT',        'j{~f)uf/I4k{31.V1j{MoG3I3y-q:R#LM/JXeW)|{Md=pAp2Be[,uaq$tD~VU[b5' );
define( 'SECURE_AUTH_SALT', 'PL<WBQ_oI^y@2ax;=Su`#F~XFB~Ta+xTi<uJ:>6Pl{JS16]oP%L2$U#h17vo3K<m' );
define( 'LOGGED_IN_SALT',   'JT#T_0:S7$RX~(n$J>$a%IS|X0+Oh(I2PQ@H)$~tsSM[zK_3/wW9f{89,V2Rs]Q ' );
define( 'NONCE_SALT',       'mxLGFJ&w_kC<dcRZ=D4k&(=,-=Yxgyu0zKS0Sdr`p|l6i$[by#c[cVg:31{1CSf=' );

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
