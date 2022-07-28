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
define( 'DB_NAME', 'rezastore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'jfi{4~L1</NAb>h0OTDeao-ku9kP[?Ta_UH.F?b/xdFbkIig 71nI>$C$5%}Z+!I' );
define( 'SECURE_AUTH_KEY',  'wxV`E;]Ka=:p4YcuI*YzO#!3An5JBd4I6(m<5_ENqn}+m{aEwvpK$d2)aLy>.%y^' );
define( 'LOGGED_IN_KEY',    'P_x})0<AY= $H9]fy*X6Fkjy?DF]JnFT^<BIy%vCKE3|ZzaD},%0dPQy#+IOIvs9' );
define( 'NONCE_KEY',        '54uF0q{y8|wx8S+6{8.P!3#+6kyz+j1519hJP&,ID[lIL(m&{A.7+QpqZK@)=S.z' );
define( 'AUTH_SALT',        '8 J?~sk4Gn1L p 0_HqF1=D+%`.30D&vpjy_~C)j%0hr:a-(<~XY6de,[wa?a*J+' );
define( 'SECURE_AUTH_SALT', ' 7{MOK|/MjuMo;?6t0.{fG^c:[4M;1)$cp(r=E0ma4XULW2;6&H)O!e]J3ct(k<H' );
define( 'LOGGED_IN_SALT',   'K #bQ*1V.B*__:#TTyH0vK:.Za+=BXh$.8+vGJm8t~paNA:#0aqM.2*)6v%|[I3S' );
define( 'NONCE_SALT',       'cdL*oN8raU#LmN>_pEG1TT0*N Ej]/7N80/W)oS>4CZ,[zo @$Svp*Fy38frySFV' );

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
