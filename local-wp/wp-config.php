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
define( 'DB_NAME', 'wp_real_estate_agancy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'VnQ& F_qy3 )_XY1?yOMuT+gmZ3%OnYsN^d6a.DI +#w%eC ,];2NEwaE8M/W_=;' );
define( 'SECURE_AUTH_KEY',  'MOmH(]s&9^PYy(:N7U~K>CDrTAPc9h]:-3yXI,u^u>88ik~9wjuLY@ou9ax1Q%$[' );
define( 'LOGGED_IN_KEY',    'h:qDlL/Q]N:zFqd[4.E-?E3=(&E18|V3T(dgnJ-%*}NveA]g@Lo%jO-l{5GXG}$;' );
define( 'NONCE_KEY',        'hy@X5WcmweKaAvM;}J#vTv#@I^5-p,CRPeLM_p}&+.zNqhsXVd9~oZ7L1c?yoJLS' );
define( 'AUTH_SALT',        'LQonV+Y(ko7z=w1g|b|bL~lYWxZB  Tc#i.n/4yhZPL1wQin[0!^[G:8ZwxWi^2}' );
define( 'SECURE_AUTH_SALT', 't*HVsp.p*vWj0$:&yqCr-9Aa2p;7oV1Z7fs@{#@}odL?:v.oc]hA{|t@n=k7M!U)' );
define( 'LOGGED_IN_SALT',   'q5,3$]n&LiOc4?#vOnMlyGjspj)I1# ZWj*?00^W6:hx[dak9:H`z$:v3%xaw3mI' );
define( 'NONCE_SALT',       '^&oSnCc,9UiYaGh`p`E)=sPP1XiC5tG4IQw4e}36[rS=!]3 s}L}6_a;AA0@a_O3' );

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
