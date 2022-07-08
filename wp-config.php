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
define( 'DB_NAME', 'satendradb' );

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
define( 'AUTH_KEY',         'w0C?H,=CGDtg@^0w5jAYwu^hEB/B*p5URm/(8@A/`#pv#GC>Ahl~;Vc.56vU)UQP' );
define( 'SECURE_AUTH_KEY',  'y9wnY?X_M1`rG7wMIPWouD2Z~bPXJX8+JxvP.E{<&5$UKjV?g}kbBn2$DdE-$Q^(' );
define( 'LOGGED_IN_KEY',    'GMTIsGh5<ZXfpPJ[ZRK1!L%2sYA!jUI6@~{kbE<*0.iP^}J~gB8YDx=S6bt9gKuN' );
define( 'NONCE_KEY',        '] )?jBaioz%rJHmBD $ly}PY|.V^5m>G;96-X3p8E<h](bHX,UGY=%slB95|+-D{' );
define( 'AUTH_SALT',        '5!c9&J^GyzA B1NiY@r,.o8x)@{`; ySP!6vA3qm302H7:Vl,ZX`WTt00~f)??T.' );
define( 'SECURE_AUTH_SALT', 'sirRAIis<9JyC{KbC>q1/TZ[3&q&0H%`e;5++D&JvK4|iP[<G<i2U[:sf4ON/9s,' );
define( 'LOGGED_IN_SALT',   '<T|@fsZ4C7dK~|^HfIfmzvZw^2q/Lb]|)[+,DfB|s6yE%h&zDvxQ_$5Ge)My`XQ>' );
define( 'NONCE_SALT',       'j9+<6T$[k`d6E-{I!2BlJ+*:u8^KA%Fayq1dZqL7%pT1jcRR%;v:SxDFz:kHADN3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sg_';

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
