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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'F5H!1_8}+*+Jpy_F=RW6N(ATQ6p&q{uz)-HaodyxLj/mwN[IT<O~SFg@9[L/%u5H' );
define( 'SECURE_AUTH_KEY',   '72`-}6lDhq3B02-T07gWH[)^djeg;MJVB!E_!xe8*{LL?<3%<J9R(K#fQ$Vvio-(' );
define( 'LOGGED_IN_KEY',     ';Sm@hfYLy1j/<[)*`cJNe$rWpL+M*r:lZuOtc=QyXEi,AI^axv77N9Jy]g^Q6C<=' );
define( 'NONCE_KEY',         '7y:FfS/Z)+=0g*>Mnx0E!d_fPx4LG,BvTAE0MuJ4Y_i~csr1>VHN^LT1]YfxqL^:' );
define( 'AUTH_SALT',         '~cl]W(1?^ZwzB}j8_-y5ka<Z>aur&^d<3f/ZzPC*HNh{_Q;v]-Oqz22}gJ!%wRLf' );
define( 'SECURE_AUTH_SALT',  '_SB :Jm}QkCvM5<))8(ne:L!_^JA=oxOT~m=~3a|C)8aCq!qFn#Uv:wypU`H`K.b' );
define( 'LOGGED_IN_SALT',    'ADu-f(By/4z.(-y%7oHkA&4B*^)SBw~#_H~-6}[ECGWDh.cqDY_S}uY]+wj66j<%' );
define( 'NONCE_SALT',        'mZ=b_y{_%?r_=&4BM{s,22ZyKvr9[5dL9Mp1)o@Wr(X+fJDr$_<4I{0Xvl?6,C-]' );
define( 'WP_CACHE_KEY_SALT', '^DCE^y0l.ZA[},=p:<RSA4~-(-OJ|{Ae?{QG2375+4.Fa^i2$Rw[(LC]%cit;o ?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
