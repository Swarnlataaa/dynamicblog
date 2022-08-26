<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u467863870_kfoSZ' );

/** MySQL database username */
define( 'DB_USER', 'u467863870_NtGTf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mpxqmMRKhq' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          's]!E7P`>](sBzEXj.wM6o/U~-edx6NL9{;oNkLEU$Ov6QogCaB0h5,yJI-:W+UUP' );
define( 'SECURE_AUTH_KEY',   'd=0)RfC:SH&pNV+VOlkgc634d8.zN03A~LBEF3TL(rBEf&EpXRiwTZE(7u{nWnV#' );
define( 'LOGGED_IN_KEY',     ';WZx*z/GfX?WTOJ_)c],  F*GgPBSS.}l<3VG(N&8Mf&0uol_.jnUjrWDvCd8eoq' );
define( 'NONCE_KEY',         '=sX rM^R@NR}meNuC ]YE~54^ I(n|h1pa<dL#s*9UK|,U&ID$b5EG6!>jpt_7Zb' );
define( 'AUTH_SALT',         'Iedx$lF^uA~_/#!`!tRs^t0gHrA=MU:ih;BqeJ3+PQkYd:.<Swkw!P(zaF)m%^J1' );
define( 'SECURE_AUTH_SALT',  'y;x8-6W|5%qzcO8d`pKw&GS+>jG!fl!FAMy.09SK?p)EuY?4mY@C2s{&K)RkZV%p' );
define( 'LOGGED_IN_SALT',    '>/%%Wm]?/.K%1##Mp) A;`Ty@&f&3:Zeg&H[n:w=lzHQnz-qOh+8(.3G0r{1GW3r' );
define( 'NONCE_SALT',        'F-rseTw()M74CwIS@zPuOKl8bYF45jS!)*K,n%6]PUbN>6vox$0oMh#$/BRrEdN[' );
define( 'WP_CACHE_KEY_SALT', 'Cx`YQ]+E*/by[s0yhwG2T5z,m54StLpz?l GZH<[eh0//R_!,mL z5Om,^>_scwn' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
