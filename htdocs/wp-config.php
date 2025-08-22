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
define( 'DB_NAME', 'if0_39611162_mded' );

/** Database username */
define( 'DB_USER', 'if0_39611162' );

/** Database password */
define( 'DB_PASSWORD', '2xG4RSE7yNy9' );

/** Database hostname */
define( 'DB_HOST', 'sql100.infinityfree.com' );

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
define( 'AUTH_KEY',         'HR ^.^ (5ryc@r>|VLj-PQ(1s.%z&^L4$uV{}`56|:a7=7>[?2Tg@Yb9(rZ84MBf' );
define( 'SECURE_AUTH_KEY',  'xb;cOtfVz@@$0K:V#G|z.(2McyP-G|5+N>o3L`X-?wl(|qvK{+4ze5|wi#bq?uXa' );
define( 'LOGGED_IN_KEY',    '+cB~2.wc6.@%oa+qi6s:k5:k9E@6[UGSb!Q$K&ck-y2(mXg[Yd?h+N60Nhn;1-Q<' );
define( 'NONCE_KEY',        'rDLSf*Na~~wl4$ePS?;O1spAo!@ow3K+y<HAF7Bo&oQTzm)X![ioE:4_anlUmykw' );
define( 'AUTH_SALT',        ')Xz6R[5v#Ef.-mAo,DII>V^g:mg,22&7D{4iW[TDpO<.*J)Bc`<(}LQq]#F4mk=^' );
define( 'SECURE_AUTH_SALT', '|sFPC0:NA5_ulV6Y#7jGPHi<->U(>O2(~L;.r7c72B]M_]C1 (*Z4aS#RJIJ1o}H' );
define( 'LOGGED_IN_SALT',   '7e7%W?8<hD:^diBj?(BTJvRN?[,o.+:~rATGPGa+d!RO|Z WNese+@-<~*BtPo0g' );
define( 'NONCE_SALT',       'jcE3M<LI#szP=*S<Oy-20}h8M]^}fgnW3tK}>/l3X|W{Zv8T<BAxodm}x_o}LUbo' );

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

/* That's all, stop editing! Happy publishing. */
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set( 'display_errors', 0 );
