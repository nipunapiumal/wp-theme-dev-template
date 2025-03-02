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
define( 'DB_NAME', 'theme-dev' );

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
define( 'AUTH_KEY',         'r~s2),(6{/`]%;;05vz{3M@1#>:+>4uZ7@ay~Zjnv2[2s1X &#Mqw!f+D1lIEd}H' );
define( 'SECURE_AUTH_KEY',  ')]53;qf*M4!Da&H9#?`PyY*;$tz/wB]5_B!;5&pw#P,8}<Gi=3G eC[l_HPx04=J' );
define( 'LOGGED_IN_KEY',    'rdpH`4@7Kg7~fg/-{zKvf?w+?V[7ylc2KX3Vw#(Y$E8uSro[3?w`/x4(, xsnlu]' );
define( 'NONCE_KEY',        'Ir:y&5j)_d[?}?^YNTtEU~8H3nFi<tLY+TEih~So .[0J(Fqh#`(Bzil+EAt*@:&' );
define( 'AUTH_SALT',        '95soaSW}thU)b29{urI+PT`Um<nUoT+%gTf{KuFBy-&uFj<cVf?_RL!=GBhsOWXz' );
define( 'SECURE_AUTH_SALT', '0*F8S9_6)K[&{X=[#xa+Y,fce:odz+G8)^P(khfnxR=F6;E?G#V3Qm1hz<oi*:9~' );
define( 'LOGGED_IN_SALT',   ';%<gexz7T$h2IIZg% QSQKNBcP^[!g1R2.d90OA7JQ~RyLh9Lx4b}ln?BLuB@LMa' );
define( 'NONCE_SALT',       '31x[`H,I#WLMZLDASk0jey^tDhb|_+%K(;{I[>}o6Rr5nDF`Y3-T~Q<xRcrs*Z^}' );

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
