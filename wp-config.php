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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog-2019-2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '5e37dad703d77d44c5aebcee158603588a066869e5f5ede4' );

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
define( 'AUTH_KEY',         'J(kG7$Zc!0/;SRqy9t[WpX9{V$JO,2hww0Hi[M+8{h{0?b9`GnL7l JWm~|pM30=' );
define( 'SECURE_AUTH_KEY',  '9.2vSASC|,R>a#hSa@OjM2NISD0yI:+$Pe+#i.k}/C!tYVInw8h*1Ip?6[ny/f=A' );
define( 'LOGGED_IN_KEY',    's1#d05YV8E@Bf/)Bla&K1%k0Uv(c]_nf~~mX)M^;PJ4H=O)5rOlG-e &j dA0)0A' );
define( 'NONCE_KEY',        'A]:S#I?:.Qd^PsJ(KW1+dv*qOkl-w-Xz!n-vm%XAz=%D_/_!M<ARrOLJkB;%@/|>' );
define( 'AUTH_SALT',        'nl&/53Q=OzB+*wH*{uI3)-|QjJm~t$pao7}lQG?+c8|>G;fF~nbkRAQ+Qr7|DJI!' );
define( 'SECURE_AUTH_SALT', 'g4KLz&GGZI$Gnx]-;},_Ap;-Vi0W$_5Ak8N_B)#MnLELygBbLUBIDU7fb~9dIq]$' );
define( 'LOGGED_IN_SALT',   '(Dlpc<%0=Bs~#?ZiM(I<#8+9_W08/IiO+,i>PF7v3<6~DT; qm^FD&o7r?&C9jZ@' );
define( 'NONCE_SALT',       ')Z-+%> XM~h)`H|ZxuD/BK.u@Ij72jpC`(z/*4%%D~Lz^6)K2s #)2BsLBL,A8i|' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
