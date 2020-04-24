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
define( 'DB_NAME', 'wordpressnew' );

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
define( 'AUTH_KEY',         '&itsx)0`)ne&}pP5OrN4;Qu>:-.ZPVp?&(B*@.7z~/0+=Hi;= 34h]+Fy^O.ff?g' );
define( 'SECURE_AUTH_KEY',  'PP[m_{>^lA>}OtOb0buA&Lm88[js2:x4]m.ytITUur#BM>C0vaFvAm1j^0_%,t(e' );
define( 'LOGGED_IN_KEY',    '}Tn@98.RF9FLg&K&#[,0y:;H9)bApoP]V%[H%^~]_*A5H}jy_>`WY4cNq3}dVN;;' );
define( 'NONCE_KEY',        'bJc4)ynOzRVZGxGBP23NHm_,#Yq$adkQc]jX4`Yx:KV3nXg7NCon3a:8@u3FdIxk' );
define( 'AUTH_SALT',        '=b%?|I1ZBIX>>.o~a4 zp%ou2<+$aqt4P/2n5{,_Ufk/t4PoioU.v}.3<ZY2X%9<' );
define( 'SECURE_AUTH_SALT', 'nR$]Hzp!W%:7#TIx)4taoZA=&Shn/F=mX^(`/Z6K$rz6xx 6oIII!En.av#{&Y$Z' );
define( 'LOGGED_IN_SALT',   '-%6wxoMy,>#6PjCqE=1)tjR=vXA%EdTG`viC~5fvuft#<8lqq*{icNbqnn,b5+Dm' );
define( 'NONCE_SALT',       'jj$jVl[zDO_qHDQXx#gI+qi.$F)>O~l4Ai[u|/-c<Q$.dbrQL|j+@)^}Bzkb>uq_' );

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
