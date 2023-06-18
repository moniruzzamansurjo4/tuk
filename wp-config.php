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
define( 'DB_NAME', 'fubo' );

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
define( 'AUTH_KEY',         '$~IZ7E,:Or{TneLmu`Z@OP!BH}?SXLH,:nbDIJcogr}VlXUA|MUQ-iw,8/<C,@6<' );
define( 'SECURE_AUTH_KEY',  'RyZ?+tsm_hGv^-+9gK5P~j#Zv(4WWd@WG ]fsoraH!qq:7sI^HVTo8A5{UYFFdxU' );
define( 'LOGGED_IN_KEY',    'rWu$Y[U7+8YGCi<{-@,Uk`x%nUoat5}71!eIi)0|~H[I=@e_6bKyA<;VZAY6Gt|o' );
define( 'NONCE_KEY',        'hMQP+Q~._t~cH:KYCtG-Ni3vVkm2%Rc Z1p]}p3R?EZ/>wmlD3 T]F)~r)?ZI/`l' );
define( 'AUTH_SALT',        ')_<T,dN2,9;x53ZkQaT,Oq[dN|kR#Ly{HO8.ql~P7_L#A.uQQVQ,=_{0AE=3/6z*' );
define( 'SECURE_AUTH_SALT', 'K1<4[j@{&P&CfDNEB$+(_$z,Gk]T#vJ`TO%%E<po!k^*j^nTttnGA<;L,R`7[la3' );
define( 'LOGGED_IN_SALT',   'D9VJU=cQI.kG{gr8R[-*s?Ij4_Ozc%;Pw)7@P{MI[JL14)#99-5kfmu3z/=[-UZ)' );
define( 'NONCE_SALT',       'gZG_S>}Wjc&m?A!;DUQF1?D#1^ex~%;#+t2}_.CvRFZVCa?M_ YYYiZqSDgBP .A' );

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
