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
define( 'DB_NAME', 'ADETEC' );

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
define( 'AUTH_KEY',         'u2vVaXPSf9zp&&-4Hl=YD3w&eN? !WD6V|+zI:$^{(E3`/sYwj5S6LWV]-!b$^X*' );
define( 'SECURE_AUTH_KEY',  ':VJjuur/|Iy=);_Kt1Xv^$XD:/Z5JV0&D{LoH<~eK]]!9{;b~$,xVj*s:qG7wPGf' );
define( 'LOGGED_IN_KEY',    '/95akWXt+h{9_Ebbzc&yOg%=0c,<*s4k.$CXyc,N;%$Wk^[n00WRswjUGEMq~$~q' );
define( 'NONCE_KEY',        '|xRG,0 Zu4k~OXT^7u4mPy:9ZcJ9FJB]wl|N@l1Q5Z}O@xP7HhRlD6*Xbl[F=1!8' );
define( 'AUTH_SALT',        'CzGD~n9?3di6(8Un#emzys0-A-spnq}N5JVr)8,+8pDDu3;7]0GIT.R3AT7e~dY8' );
define( 'SECURE_AUTH_SALT', '9toXZGzCY1MqHRFBz1WmJ-tkP-yo[x P&n&Z5:N<#u i%#.d:V!P#X0{*b%H[F`:' );
define( 'LOGGED_IN_SALT',   '%n[/[Y?#%%2 u}zZ{sglVj+IlaoqN0x7Jn5w4![ia8]o#WNjh~PxYYxcf=x(5K)Y' );
define( 'NONCE_SALT',       'amwRqG3LUZ_&u=g{%a]YuS=(^1cD/3?]X3iqsmC_Pb6k8rU$d^nVNOHy%!aP77$A' );

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
