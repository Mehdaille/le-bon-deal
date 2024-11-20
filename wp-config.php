<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'le-bon-deal' );

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
define( 'AUTH_KEY',         'P3qv*u^.nXZ@~*VM(Oz^$l7zQ4r.ZR~H737)M|wr1_eg2@PH9(;QlHHXJyRORY/j' );
define( 'SECURE_AUTH_KEY',  'ip0ir~J,1oJyh?=6y46n8AG54IUa*OX|p&DnDUf-u}]u,AvniWTr3yY;~qoYa}ri' );
define( 'LOGGED_IN_KEY',    'Lv2>6l=<r?`w!4</.%CVD((J:q`,z6fL?1^* k8H8UdS14;azfd;!,M$K_ty6,/v' );
define( 'NONCE_KEY',        '+gcQH@%BO$mtba7B9|r&BzhmO/!m.<lW};x|}I_/xJrdaZ|HBe4uc&_i!>}sC!}:' );
define( 'AUTH_SALT',        'USbU#lf4DkU$6nW;A%Pgl?7n!t$<=9r!*/tcTH}xl`J8%&G sCwIynK7u0m|)m*f' );
define( 'SECURE_AUTH_SALT', 'n,ig,BR&[#A%H}QrLI!kCay mTD79s#T%-,ypBR0vWAM)*5;2Z5m7)*qL+m!]z:4' );
define( 'LOGGED_IN_SALT',   'p16R$@9[&)K)|? T<969;fkPMpUsTc,$68OFb>zS;:-Qm!v.uK5PU)vx# 0);@5K' );
define( 'NONCE_SALT',       'DYMu_y?y8Mf8C)K-~o_&^%<Al>^}kD-5h=`z(.6)k-+O?UoOr.&`?kwlzr#Q0yV[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'lbd_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
