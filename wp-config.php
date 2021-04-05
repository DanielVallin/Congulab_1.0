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
define( 'DB_NAME', 'conguLab_1.0' );

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
define( 'AUTH_KEY',         '7W;2&@6tRiFnO~>{?w8AmlKr^`IXA9&ZBXEU*ecX2}>5@([$_LRQT1}V-]gi/}lA' );
define( 'SECURE_AUTH_KEY',  '4Jpas#c5ac~)AnQfQsg/K=7-~>KH(}3J~]GE]C4@6]{mG#NBqi(X,m(XFqNJX$4P' );
define( 'LOGGED_IN_KEY',    'Td~V$N[nY*&wJz+}%4;JXS8PP|cu8LLa*{t&EQ*Z>oTH]n[nWHC,0Y1DudwdNlC%' );
define( 'NONCE_KEY',        '!-<Ufp}GHb-:YDm*7N5{4R{<Nx$qBT$E&C4zgedC83D,/]*6A0avf3qu9Fv5PNcY' );
define( 'AUTH_SALT',        '=/7LTj@dCqBYhz?*chp[mW.rE i>2+> S5Lzp<@L:{*S<</BZfZX5eyibf_mGQxP' );
define( 'SECURE_AUTH_SALT', 'QCMlebg%re]-1{d1a|tlv3cJs~B^,*,>IO#$oj#Ha [r4l-K|vz^^=y$w5@;Z+#]' );
define( 'LOGGED_IN_SALT',   ')9Kx*~X%)T;vZqmI*jfC>DwsFD:i}H5Gqdr)WwR1;D9:-o,qLa1OUC3B8eld]|xA' );
define( 'NONCE_SALT',       '2Cz)]bx%Q5$gBQ78q+M}3%YZ$5/;)nwVFsI14kp{D`0l469z}C*9cm< DAw0V|UE' );

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
