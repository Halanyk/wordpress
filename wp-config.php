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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'ba5480263e38393bf88148df35fbadbb518837cc049cbe79' );

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
define( 'AUTH_KEY',         'KtxvLEYT0f0}bTG+U^$KQ) ]6b/<%a0*bl~ri<TQA?oL2Wc!3 g8NM[8yp,k90^{' );
define( 'SECURE_AUTH_KEY',  '+t-E,On~H8,8ovlQj.!QbpP!L--F{8kb}Qs<a4WOlz%Qq1|zqKm<(Iq^V`N ^+Td' );
define( 'LOGGED_IN_KEY',    '=UGVeF~O?.UFhh3/$G`,D)9xN!fi*]AmKKox]#|S;?Ev|EK6Fd%)#I2S?Umq24dH' );
define( 'NONCE_KEY',        '5/Yu9F%NCwT:5Aa&S[uIr)H[TEEh[UtOVR6hKW_TS =N!3Tam_0D^+!K8A]^>Psu' );
define( 'AUTH_SALT',        ']ahq,KJ@8dhom-ev^g_OroM@4Pa]vJRAXA/<u.]YnIY~c{J+[U%g.B8rJP.W2`d#' );
define( 'SECURE_AUTH_SALT', 'WhCOt2oH7rL39qGe,&n%L/4(Qy`coQ|Wdk.Y.(f @LBxPQtYLIjUoD1~WE^-.ntU' );
define( 'LOGGED_IN_SALT',   'b|QjOrr/xk=NYQPTN&hk6:zn[z1V:?f4r2uC{+,=W=.n5K0LDxn$%JbRyQ[ZQ<VA' );
define( 'NONCE_SALT',       'L[fg)tVUp1?QYN7n}@z0qp&{:c^j0S<]OBeO!3poFF,gYPzTOlQjwBF-WWpn@}Wr' );

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
