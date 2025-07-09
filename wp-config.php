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
define( 'DB_NAME', 'db_pasarwajo' );

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
define( 'AUTH_KEY',         'g_@*FI_ KPj1_9@xRQOuOj_1Yf>m]9&}4Ci=/ +uAHvNcBwYNwPhW05HLpDRSI~c' );
define( 'SECURE_AUTH_KEY',  '@KC_kG~C+svm_TnEb:o,#xB#|iaevj;`$#Wt?~H[{`<Q*El)_c_{v c]fqUm^(]H' );
define( 'LOGGED_IN_KEY',    '[Y/ !ar Ce4Rz*ncPvzg0>l~k0eW>1mtrf+J.!Pq{2->`fh_dO%FCj<g5_BWgQS<' );
define( 'NONCE_KEY',        '0q17G.K]nw@G0gb@)!IBjj{1zd5pu~;$V/V.qpTxYv,_rpJ.=-yaGyD=Ftzw-7VN' );
define( 'AUTH_SALT',        'EjOD}Y<&l&bPW`d^5NGpti@xvt0Q/[PC|qq+t4[/t>OPV8D1n.:*ri!CQ_6e+FCT' );
define( 'SECURE_AUTH_SALT', 'B<9 efZ-k8`#m&lcv*ooX@4/@.S=y%=`,3/)[>a1Ura]w.ttPD{J}&:=}E:_}g=J' );
define( 'LOGGED_IN_SALT',   '8}2e5&U;Tqf<B6RB0,U)`F*FOt2,&Fp.7YycelLGSlzO,?jYR&OJz:jO9nVwd]t]' );
define( 'NONCE_SALT',       'VTWV^$tJHxqkxxOAMb#k3PchQ/JI6C[rD=y=yFhK64>QY*l+q1+&Im5nZ^m>85Yl' );

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
