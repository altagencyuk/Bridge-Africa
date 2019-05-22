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
define( 'DB_NAME', 'bridgeaf_database' );

/** MySQL database username */
define( 'DB_USER', 'bridgeaf_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'n+ERLde4wc}w' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ' l!`C|^HQwEz>$DTP=PQIeGtWt<hGL*YX-BPjvM2(-@+0>[T.4scv~VS%m(|.cx7');
define('SECURE_AUTH_KEY',  '&]n`iYU)I{)%u|vK_jh-K/g o|-KNic-}`81nl-)-~D80-pCUz[ kQ$?fd[ns:Js');
define('LOGGED_IN_KEY',    'N)M&6D9:3U-gR/jg/mUDk2pG4aiD1B+I(M>{F;+`^-h 0K`Sbw,P}U<f0CLj,Fpt');
define('NONCE_KEY',        'HlJpLp+kEeG*x+Ol:Q0,{Gk6ApU<2Yq?UCjKBd!K/lz|r{iV#+$f7RL-E/8qH QR');
define('AUTH_SALT',        'E44s[6jWn5S6h8c{1}kL3Yw^v,8>|zKq#>a8Tie~8alU-0}_OHY.k^mNwdxMIy,A');
define('SECURE_AUTH_SALT', 'H-u-[]I/P@_Vk@^~P *p%ExWbS4uZ0%L60*8ju;?>qTG35.N~5GVu3SeF[K%Ip{[');
define('LOGGED_IN_SALT',   'U?2|k6J$g`T~2]#rU)47I+XL36 swaJ&q|m@<knPGG^[=2s/R`Uc!D=f;=Qixj}>');
define('NONCE_SALT',       'Y/m*e:6upq/&G(u:c]+(]H#7+i=]v|O^Pb8;roS7}KW3I&gC3JU`>Fz3jl@Lt?2<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ba_';

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
