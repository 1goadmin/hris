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
define( 'AUTH_KEY',         '!1~>T$9{cKsSqi]J0Z;kQ$sF#j^]6yCDz]_D:FI*Jhr<Og3Ykw{<v#6Yw2bRfSw3' );
define( 'SECURE_AUTH_KEY',  '$&cY-]K[MgGJ69U6S_%IQ1rcQ/o D]0Z=<`ww;tWk>fwlYbudwJj2_NNG{yAUtlR' );
define( 'LOGGED_IN_KEY',    '$`/Pf|n=n3q%h03?JvPiGWQHW{0sXF=RdXnWWq9n1@WP;N$q,_}o3&J;S3]8gX/]' );
define( 'NONCE_KEY',        ';R3:1oZC*gS9,$$THtnax>6]i^Kk`Dy5gwWg7v=6$f.eT%OCfgyeCm4TO)w:L@cp' );
define( 'AUTH_SALT',        '@{znG48W$4%w._k]g}:jTU.b@H:%2^@g6gJSWwRB!Jb%XoRgR5s1EWsIFz7!V?^J' );
define( 'SECURE_AUTH_SALT', '&AekQC-oBaW}LS@W@Ddg8--i,l9kLCVa-=KsR(h3x_95r$=l/(?4)~II[j@{6*AW' );
define( 'LOGGED_IN_SALT',   '-m39UgfM8Lw{0C!HeHbtk+<|Y8ZR1A?!uH2cuVj>2,!cH8c4JEVM|d~v^TB$b]Y ' );
define( 'NONCE_SALT',       '0Z*o]RZFV_;F=WTe;]`IOuE*)V!P!kU>IGsXh_mXhi}e^$j:>jN2B-fV9z<*UKVb' );

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
