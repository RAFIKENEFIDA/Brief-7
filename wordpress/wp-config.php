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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '[vnslYbO+tP;CM-TR<+C2c)foP=00*D>` E_XFeK.U8?>u>#gOTBV3MTaz:.nO},' );
define( 'SECURE_AUTH_KEY',  'H V3.!S`qpeG2}R!X~r&TFxeQO*&~iP:}[Eb&5Y0-eTLq,~39-?)0n:L~EAeKkVU' );
define( 'LOGGED_IN_KEY',    'gDHF^N^Q?^k8uZHU*YBy~d7>}U7Z_*>u-yQjr_CJ^${rD]9!ffp[i`d`W1~Y`Djc' );
define( 'NONCE_KEY',        'e^-Yx8}D(h8;Zz6!_aW~>XZ?ik-|<o .k]5voi>:tg=~bk?#tU|Lv@J7=|-~%ZE2' );
define( 'AUTH_SALT',        '(J8AtpT1i(?n*>F3|Eg6nK;$ i1Xl6IUhcrW&d_ `^ddyclf=;]5r`c[9$5x~A!a' );
define( 'SECURE_AUTH_SALT', 'WDo)Sniwb[}0Yp]j?41n:v)ljsv?1o6EnSi? sk<eaC5M:>8hD`tooA*`Cx?s_~x' );
define( 'LOGGED_IN_SALT',   'Bcd;qd6C8CM!$H(O|5-Qw@k$e6wE8@z{{U2HbmfuxMbXWjiQTnCQSxc>4:RY7X&d' );
define( 'NONCE_SALT',       '_d9%u20#f3*icwexeNruir^Xcu>[HGLQRHbY;[#wn}^IeDZUF;W!cp;kk99T u;k' );

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
