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
define( 'DB_NAME', 'db_furelab' );

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
define( 'AUTH_KEY',         'oH{S 8qR{]zNnjGa68%v/g A=:!j^#nUZ+wABQZWzC(i[{=0[G0X:zyiYmSgf~FK' );
define( 'SECURE_AUTH_KEY',  'GNw4/Ez>e{1g)JG6FToQT&^iuL?<He?w<e2Z>7(uPM;!F?Lv;I|q]UBZ]l]&iT8b' );
define( 'LOGGED_IN_KEY',    'n8^Mj4J?ZP8qvAYyzkJv@85`vYfHTOksXt|ca~>bgKzFD2TGI^yO8pp44-tUENsV' );
define( 'NONCE_KEY',        'KNhZ]^klQ3!W)W2ZcQQvfG[_^9)!Q`z?U^B/Ym^X)W&)$X*1f0YJW:q!+eKJw?;~' );
define( 'AUTH_SALT',        ' D*]ux e5gBQWat0=B<}]<KJ|ZtEaUM:eXfR]}O$J!iTs<45Ai;Gn:W`1gw@*GDq' );
define( 'SECURE_AUTH_SALT', 'oV>r:^ts/gl{]9/#RXv$Q?.}X<At/-51JMi@If 3XL]b$}O:e-?P,qly$l(eQ!Wf' );
define( 'LOGGED_IN_SALT',   '8pU9jS`v|+aV:=DB^fNrtUOt3T8!#`/*v*woLt/9-[a:jm>fKZsGM,u>^j]c*<9i' );
define( 'NONCE_SALT',       'bb{aNxzMie06nW}@~I){&H)khBbL{uJT$yzV3l-]#Asr_1y04kG_H}P`07}-(d$i' );

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
