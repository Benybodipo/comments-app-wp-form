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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '6xpv=LxAfsxSh.f&GF~zWSfGlqAh4/QNSg?%,dKD,y!]S2OH`/&(PC&yQG;Fx|g+' );
define( 'SECURE_AUTH_KEY',  'J7>mZFi=YRnRbOOD_m! +9hYLv@$Dgc_Sd`zg:T h|jQ Z oYh#gR?!|.,-EjXmC' );
define( 'LOGGED_IN_KEY',    'lOb4uIAlR%U=N{q=vh5,86R)@YOwA07Lr088]4QRF_ykIb_LRA@]4w9khLaE1+-H' );
define( 'NONCE_KEY',        'Ia7JE$6lFzcC[)UtxTL+XUKv!ePfusGC$[^UAR3LVf}4QPcJL; 2I;W7&H&}CsBH' );
define( 'AUTH_SALT',        'p}}5($b0X54N%E]LS6[>,(xATNJgg*kh@W%bO)s5gvUQh_uvl9x=:w{/dqUB]~0J' );
define( 'SECURE_AUTH_SALT', '*(2b=N;!Vv6# !>SiD9%ssoIWpQ|pYp[[j|J_[9iN$&_<xX)G5PJkq#,R&Bq_7.>' );
define( 'LOGGED_IN_SALT',   'kin^vt.T&<<i&gL+NyeqDV1,-2K1..-?a.;WpM}2wct=cI9x8`M%>gR0KlLtcJUL' );
define( 'NONCE_SALT',       'jL5DN6kDr3Qi.qHqg:5G}9`XgRAl>9!lk9`>&.v5dzY+!=$ w#WzrlGeib2ExE9]' );

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
