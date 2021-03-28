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
define( 'DB_NAME', 'delayne_testing' );

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
define( 'AUTH_KEY',         '.5XZyylT6[F`OKu^Lk&Lc9i>*mhC|5dxmxobU?vJ]yde!( (l,UC2Ik|a7n`59`0' );
define( 'SECURE_AUTH_KEY',  'FZH;fV[R2R`Fw.$bbB=4EcdxptR/q8v5[X)z(;#,y!$4>E}&WW]tihTUL$<1qv]^' );
define( 'LOGGED_IN_KEY',    'go+,9T}[{XctC!EznptNwqXTD wE(~$=N|#1vgx&$i,V|.zPX5[~Z5,q>8h?u)Y&' );
define( 'NONCE_KEY',        'FU;(xz~=iJE]B%XN(32prPJPdu&RW=vTu3FG|Hq5%yFJ?y{F8(zPP)LNVv1Q>X>,' );
define( 'AUTH_SALT',        '3r;J2gso=v9,zYte)N4*cbGT?u^EI%N0d=LKow:<DO1SWD.lO*=~h3BTG]U~QVFJ' );
define( 'SECURE_AUTH_SALT', 'BG}l5ZI;TfO:* `*1RvP_3jqD6+YYaV8Jo>}n5iz=BzNKQzPDFZizGmg?yu,l1f:' );
define( 'LOGGED_IN_SALT',   '/3C.-nhv.n:u<L.O8`wp9GzlYGj8qfU.b;0SKS!ZUtHTATriL.u)]$QQ:SuP~oeB' );
define( 'NONCE_SALT',       '[lQi)(c-Jn}++R|b{=]<Z2D7I5GNURlt{3y<CR)Z_[,PhTg1[l!iR4k~FVuD78w5' );

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

//define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/Applications/XAMPP/xamppfiles/htdocs/php-wordpress/wordpress 4' );

//define( 'PLUGINDIR', dirname(__FILE__) . '/wordpress 4/wp-content/plugins' );
//define( 'WP_MEMORY_LIMIT', '1024M' );