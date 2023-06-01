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
define( 'DB_NAME', 'AAAAA' );

/** MySQL database username */
define( 'DB_USER', 'BBBBB' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CCCCC' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?~%y[O}>8@x`92G6ysyqe-@K+0/7G _r#ui#>UMdO,c~wBHGK0>NM.c)vN_D13m8');
define('SECURE_AUTH_KEY',  'Z*tVk7t7O=^?/fFuYUm@ S]BW)!2BPXe.iCUq.k[z[}D8C)4A^RSWXB#2m2r_qo@');
define('LOGGED_IN_KEY',    '*Zhy;C+;-ZD<}RL+$9x@9i2l$N*&URo!,DTf;!4Ywn1[|r-mrmkkP)+|k&yA%?|N');
define('NONCE_KEY',        ';Y?v23C-At4+cj.0{D3?T)Oy;/_D.F&4&~P-X?9cZ=d/=t%uO~31N|%3^N-6pT:~');
define('AUTH_SALT',        'RsIAm[%N]@U{]htN~#3uQvXO0Hn [3}p)ER<H{N0SSq>Tsk=x]1{|lu{sVX|YAo}');
define('SECURE_AUTH_SALT', 'MT1|2p12x=5Em-#nW47VVq HlE-CLg->Mnt4[y%Y+!SE+*><&36QZ`z :/W*-E`p');
define('LOGGED_IN_SALT',   '||^[kxcUA;sdlW_s(MzDc<ntl$-!qm6HAQv15|)*9cHBMLfPJ+BvR;RJUX=(1.-m');
define('NONCE_SALT',       '>`m&sc}8vz=}y4K,IHDk{019kSq!8$J(T;td]Hns8e!*yCo9r|%]N8QKG~tlt(6_');

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );     


define('WP_CACHE', true);

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>