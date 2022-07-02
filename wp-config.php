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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'admin12345' );

/** Database hostname */
define( 'DB_HOST', 'wordpressdb.cpaebcjjkfx0.us-west-2.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'D|E@x@WRo6yRobMyVZz+&u>Iga;nr-{=E(my&|c+ptFQu{KNr+:}W+pg` Ipy=LG');
define('SECURE_AUTH_KEY',  'Iwb1`NE`iQ 1&tfDb yuFh!@).fiuzuRGKsP/iU,- x~Vjmoel]s=jla +|w=P1|');
define('LOGGED_IN_KEY',    ':p#4%{{kra]:x+{7_/p!;|Er)==2oMcSxy8mZ;m|zt>@e0g}kOm_!QYg-v!;jS.W');
define('NONCE_KEY',        '4,x9PuwHcD5a(R84xvzL:<5-& n@rt.,vs1_dc&mZFlOXh6gCd4|7^[3BA6|{*S&');
define('AUTH_SALT',        'f|g}XE9ooCD [(D`DkP;9a3|+]P{g.8N$p$>49Ha6F|kNMZ8Q1^EF9 Z=sEz7tYA');
define('SECURE_AUTH_SALT', ' kq#6%L][-|3a)Jc&UaQ1?iYH_jaCxa:C~_5:9Idfh>fsiy]br$_h2|tzk[.K3f{');
define('LOGGED_IN_SALT',   '?-X+6QH26c.%z2#IH-[kSBQ+5n])e+A,e_[wo`T#/1-Y:?k(eS+JH|fq3(2HtWe+');
define('NONCE_SALT',       'Pk Vc[l-pT_BuJ;4yy:D|a4]J1:Ns1j)=in/tw$74U%j]=6U+EAP.kaoe)*%<+O|');

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

