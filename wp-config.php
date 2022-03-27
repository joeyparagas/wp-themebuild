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
define( 'DB_NAME', 'wpudemy' );

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
define( 'AUTH_KEY',         'aENzf>mEPq{AA|Fi9zM&N}?FhoVvqOr%i](%hz>(+H~LQEvtt_:j*yn`#E4s9t@h' );
define( 'SECURE_AUTH_KEY',  '}_$ 7!S0Ce*Hx%qd{LYmY%]7tPNd~bv2#L v_THd-Y<-!7q<Fb0hpi4J (yHHECJ' );
define( 'LOGGED_IN_KEY',    'SQw6Y#:BT7~kZDAWM#mrwrg;D9SwJ+1wC$>f=d?,v6tGvw|-4Ec(Yh`2D:Zv$5lT' );
define( 'NONCE_KEY',        '+!P[]zT_Nf~2Vo#UI/Nlt%S+~!RLmO)s{PwMOK/[Y~^zJ8]a>rU^O=W&N%{yGwh]' );
define( 'AUTH_SALT',        'i2:L`DHj.oc+XYCCx7a:V17z6:svmA=MS7k%L$eBlT2>tAIM#J?cuEK@}]!F)!af' );
define( 'SECURE_AUTH_SALT', 'd0?cdg&;l`4;:{;|VNG0!#88tqQ.ai3Zy?2]?z3VDV9/sZl#IIn0zYMJ`@MQo!X)' );
define( 'LOGGED_IN_SALT',   '=j5 $&hm@zl,P}<6;o%h|i:T?De@U!oQuCbhC>-tGJH];:DC+.P]nB;Tffl!# ,E' );
define( 'NONCE_SALT',       '[lfz[~No>Q:.zV!CU|pW,QI5JLR(v1a6h/nS!8ygg$L#+#K(,Gx1QDp CDGeU4fP' );

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
