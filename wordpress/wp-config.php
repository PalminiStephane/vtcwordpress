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
define( 'DB_NAME', 'vtcwp' );

/** Database username */
define( 'DB_USER', 'vtcwp' );

/** Database password */
define( 'DB_PASSWORD', 'vtcwp' );

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
define( 'AUTH_KEY',         '^Jix7-P-mE43G*eWMn1kV1Uab*VyYAd3+>)BaUD#&u<sFb1VwT*S #Ef<I@pziO3' );
define( 'SECURE_AUTH_KEY',  'Wo%m,v4.9>cr1~jn6 K8Y*XlRXvnQ(L[/T c4[E;ObfT{.l4Rk8EBV[wf3z8Q0B>' );
define( 'LOGGED_IN_KEY',    'z{|/J|s<6dSI%>0F-A@B[n$+mS`@Tl6y/?^qDRrS+KZ&Rst8uTEI@J^ 65zW:Kkd' );
define( 'NONCE_KEY',        'I!f1(*P}mhA&oXH~Nl<z|=SE?g0nU.}jJ5FQ*tc[v|sUoH*lWjM*gi3}q,Oa$E)c' );
define( 'AUTH_SALT',        ':S<qGnZi.0uJ85W%OO9nAC&_)c~l5xPHSoZw^xD|ROBN[uqu/@BVc5SX:@|[h*l|' );
define( 'SECURE_AUTH_SALT', 'ZARtF3@/B2xZk:3~k|}kJ!qNrOd_om9B>2fBwTXbML@443y4a]U(Hw+0;6mEx@u=' );
define( 'LOGGED_IN_SALT',   'tBJYW!fJiJ_Ve,+4`h;SYn^9.@4,jJx}h*B>`Sc@v[X RK}y6M-Hqb;9.OVb8*mx' );
define( 'NONCE_SALT',       '+o,:[kzjqv=uC|:7PwPTw-tg^k?qMEw9I<l|8H}4/2z0]slYMTtu4kNQ92glTsgg' );

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
