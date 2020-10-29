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
define( 'DB_NAME', 'boilerplate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~E~;BcPVJ7&7HyiRgj2%m,aF!%Ij5K#@n}`SqAFY$pIM.1s?OIt)uH|XK{9T:;t!' );
define( 'SECURE_AUTH_KEY',  '1THFiE_m9#8NytM>:dObwme[LWr^/9:]OT{MiIjE0Vu+{*{@P2ff?]U&*+Gc^qV`' );
define( 'LOGGED_IN_KEY',    'dz9nxaOB2#f9W<V-)p.wrifJ9>HW$$h r#.uCA2dvg9ysN&A rOnncn@0=`,kdj:' );
define( 'NONCE_KEY',        '[KHTT[f``a1t1o5i)&!n)s2+Y=1Y,yV?I>]Zb6JLJ_QBMv`bx3-LqOaDe[5)i/X9' );
define( 'AUTH_SALT',        '__,mYt3^^K,VNABM-6uR(;U?]*UZ?Gmk5lypE6_.Ey;aKizs|7ZLJ6yHJ:Lggs>g' );
define( 'SECURE_AUTH_SALT', 'pRR0Q])i?pjYKWpgD&ssqjnx7{H-t$m8OeF4 3HUs7{)_:vC>/0T`RQNybMemAoz' );
define( 'LOGGED_IN_SALT',   '+o]L6AR>@2S<SY!iKSh e-pkX#n:^<`&KV<#d}FLSiDk&RJjk/!O=^4lXOqUPx!P' );
define( 'NONCE_SALT',       '=Hw8ue7 &y5xGa8uqZCY%v3B|vn@/O_U(-d;WgcG[:=|=.Pk)Mqlglc.sEJR=`M*' );

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
