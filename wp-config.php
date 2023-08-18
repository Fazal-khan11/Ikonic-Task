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
define( 'DB_NAME', 'iktask' );

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
define( 'AUTH_KEY',         'z3|lHjsKMR4On?>V)=Ek~1K*)X^59`CGNnN>6Ik%jR1ij>2X{isaTR&2U4luEZ+[' );
define( 'SECURE_AUTH_KEY',  'Vxv[^@XL57yTx-1CT>bEDm(Tu/RsK]}]D,@t,h{oNVNXYE7]wO1DcbaMHye=VVW0' );
define( 'LOGGED_IN_KEY',    'Z(NPrZ<@$;Tpj!JmE7HqDtI-^p<y7;y)J[T? MZp@#u<K]Umv>Uj7cMMD(J>q-,<' );
define( 'NONCE_KEY',        'kY7.|LK6S3N&NYdQ+U_v*rRk-BH[(}#Ct<On0gWz4w{ vt*mN.SG.kl(I=}gFVpC' );
define( 'AUTH_SALT',        ':U.FW:wMEa[0cBTcm7:EcNiOSV01CNYVBxxP3qGje$`*neOv8+0/8K_.RcwPDeQJ' );
define( 'SECURE_AUTH_SALT', 'mC$%&4g$U7j3JRM7YL]bi*.n?Z;v:A757W4etW${;p4M%N~$pGt3S&IdSghYV:`%' );
define( 'LOGGED_IN_SALT',   'e! Ktl-1hD5^nNu $`}&Vt<vuI@$uSd_F(?1M3q5^4l;oY~v1+jOL62U<||zxo,S' );
define( 'NONCE_SALT',       'l|u{M7&N46_!(K8?S1tRuQv^KH=ii+U}=QLNIV#3(Q,,z_yy6-poKau=Wk>>isr,' );

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
