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
define( 'DB_NAME', 'ncmnewdb' );

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
define( 'AUTH_KEY',         '>%2242s|%&D:#(Wruqsi`Ydf.u__[`80*{I/>:+Q{*W4b~h 4IJIM!X/yzu>n]]I' );
define( 'SECURE_AUTH_KEY',  '(gI_s*@!zA4Ea}^6,/@vYiXtS%B n &Qc38_dqHu*hDu0*@%xux{JX2p=p@}?Frd' );
define( 'LOGGED_IN_KEY',    'Fx]2f,&wX2moHVo6*@l}78P}ok/s[^l9YR_X?sDs`wVNi2YPv.qogSLKqMMs7(y/' );
define( 'NONCE_KEY',        'j{NX~o+=W8c#=4/.$g $(GB^WCNWUh&q`4[=Fs,1nJ4Hr8(Ar{3$9$A][mdz,-G9' );
define( 'AUTH_SALT',        '>Wy>,|G%m:b%B<bT:l<1eT k@0WXeo;;}Q2MuRq*5!OZxAdy`xTlxu7oo9U((fqc' );
define( 'SECURE_AUTH_SALT', ']zpDU:fgH4o_ BRfHTsPAC$RgKs2CV~^uNv4vC*n8! 3gZ:8Ef(5@f@69N,Q@+uz' );
define( 'LOGGED_IN_SALT',   'a7_=*<]Gdl~ppMY^m8nnL>?4I*hx3NW5LXC.:cYz4zS?e~Ee/ryTU~G8m[]HxEFX' );
define( 'NONCE_SALT',       'VQk0dW!a`4Iy1Q:>|)ZkcS[o]aEEXlOY5te~<#GzvEakyAY8K6w)~SrsrmOx3iLv' );

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



@ini_set('upload_max_filesize', '50M');
@ini_set('post_max_size', '50M');
@ini_set('max_execution_time', '300');
