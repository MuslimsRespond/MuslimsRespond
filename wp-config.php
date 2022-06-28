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
define( 'DB_NAME', 'muslimsrespond_db' );

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
define( 'AUTH_KEY',         '?oJyN3.Bx<4GBj7fb{?|F==[9kiFXMt<S!++02>89.:jc;e.EyE;L5^eWoRm8<s(' );
define( 'SECURE_AUTH_KEY',  '@&4%29C~yO_UHjgT;wvD_XW0`/7%[ci/FhF~#d$Q{]5,{PAe5r#-QW2d7=$m!n/d' );
define( 'LOGGED_IN_KEY',    ',7:3uWHuw^)spFXI0Q2~b/4@k#)H4H9;-7nsFi5jIB,%:(5>Ww=/)bOHxco@2R,q' );
define( 'NONCE_KEY',        '0j&ikWLje!_E0B/<71`[Y7#:U$6A?:cUtJL`c7KVDGAnbP/u],:JgM5Be(lFj:^K' );
define( 'AUTH_SALT',        'N/h0~*L#RdwnI=kEp:u/`sI!q2}1E4^l&pZStJ ;8YWXh |P(q#;O2hz0&07Zz3;' );
define( 'SECURE_AUTH_SALT', 'i8*yP9]DOwNR`q;fnp3+2}xaAt?dQy{hh+&+Y6J:!CN*,wOzEfGTY#jAUeWG1r=6' );
define( 'LOGGED_IN_SALT',   'mdp)T9X!uY_3~xC:zM:+[(sdYto]dPqx5*f9VEvCw?T8/uoT*KR2x`oUa}V-+Mfc' );
define( 'NONCE_SALT',       '=&5}pEVu{@91^tL]qjEW-k~2XlzdgB2@UtbBJGRH?~TvlNAn+zazCoeakl=Fo78@' );

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
