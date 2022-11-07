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
define( 'DB_NAME', 'nk' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&YE#q>4itQIQM2tB2E0w>`}84I8moFbcC)7Veb@orgwdtde`$?cGheHd ojlw;49' );
define( 'SECURE_AUTH_KEY',  ':zC+wEs&TGz;GEB9qLZ?cWbVQHg=0)%*++6,Vejw[8t)H`8Uc!6C!cHF668D|)xZ' );
define( 'LOGGED_IN_KEY',    'Tm|5VoP?B:s*|LjG? R9>=>Uio*0qdLB^W8^#^-cP*NsKJ-@xq}-[j]J@=Cu{!_W' );
define( 'NONCE_KEY',        'O3q#ZlnM}c#<,2eR`/Y{OF]6l=SQK[20z4oOQ5t=&N)*i#`vSvZR&`yP|>2xaZ$?' );
define( 'AUTH_SALT',        'GzK(qNmn&(p>GKlee$29{<?IU:}/uppDTDdQ-o7)iD&Y^6o8$eps>et37A/#;~!5' );
define( 'SECURE_AUTH_SALT', 'I+GtTc .GD3xo:%nGw`Mse/@WLb,R7gKT] *>!3{H;IV|`cqb:r>0EG00YwyMqET' );
define( 'LOGGED_IN_SALT',   '|9_ga7|@I!LwEa[F-Q5}7D`6CJ0 9=1AkUwX4_}Z.3]@l6:Z<(1ybb &RiC&oa~Q' );
define( 'NONCE_SALT',       'olo>3/CPYDb$_1`V, 0vTUqM!@b#$[@2tTFzPm?KQ+iyAL>i)<;sn7`cnXHz|dht' );

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
