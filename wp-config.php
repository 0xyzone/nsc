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
define( 'DB_NAME', 'nsc' );

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
define( 'AUTH_KEY',         'q _9ZA9.DLa8{PH8`09<v}t$-h;>sKg>5/Hy$X5`LKE_FEt~Z+3trU?WV+MMKRo&' );
define( 'SECURE_AUTH_KEY',  '%]m:n3Fo&kgMuUXfWQ.@;}Q_>wU,2}14`:^q]VrfHwNHm?[9q,1Cr6cz1F2*TM2n' );
define( 'LOGGED_IN_KEY',    'ioE6sUGsQ4UvkAzaPWk43!qjqTh9=d/)lVdxH[@Fb5$XYKyNK&NjT3/,go32erbe' );
define( 'NONCE_KEY',        'j`?-u-Y{y!x?Me3ne3O2)$FB-6A7RTpu<nL}1^M$z,d$XETAeHZrT%m)pkG|t@P}' );
define( 'AUTH_SALT',        'Ru>Q6V$apoTrpf/ b=|L%yBis}(^S@bzBR9dBYP&$b:il+6#cE`y_x(vD<p%r>/K' );
define( 'SECURE_AUTH_SALT', 'e/6P;3dvB:2au5jGCcjZ?Jelw[|]N=<IihDXZdM/X*B]6~G}nOC>K=#}}]yXOQ3_' );
define( 'LOGGED_IN_SALT',   'rg)-P6z&/lA2(|]<R+bf -;bn0[6h>;^[t7}9[<%Q)-{wJ%uHj>8:UVo}(06w>s|' );
define( 'NONCE_SALT',       'w(l~3kFU`U!3;,0J](B>9#SyAKuFhJ)*%=E5/sW;kI%>VH%N~u!sOOhGB$:P2(sI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nsc_';

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
