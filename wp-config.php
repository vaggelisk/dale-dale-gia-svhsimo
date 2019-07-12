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
define( 'DB_NAME', 'dale_dale_2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'koskina' );

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
define( 'AUTH_KEY',         'QFpV#lI!;((*-4JK?d[^`9GgGrvYs@ZouK2r9JX)o8cZy*MXvE7$LnjHHV)rSZa9' );
define( 'SECURE_AUTH_KEY',  'W!VIU_)k>FYDh3*+>M V_cOMxDb9[oF:Jr_OrUSJ.Oo.|PTv(/oCW.ce[[KWRNy%' );
define( 'LOGGED_IN_KEY',    '6^7JIvP=vQb3[+IZFIM>*P$?B10QW(iPpn?rHm#Z7/85&7ttDsJ] KFIs-(~-GKP' );
define( 'NONCE_KEY',        '`i[q{]>#VdBe$`/*SdR3Svh69[ilf27=.H/RWsS?>Z]@0R4HUvkO4%w%{W-4J)Tl' );
define( 'AUTH_SALT',        '${`(@*$OGesGOm]5Q9YJQ/(E8|h{Z`+^CC,+ yb:Kqp7CsX8};HCo; @o&Xt%CRA' );
define( 'SECURE_AUTH_SALT', 'Gvr$pqWcMCVs=u|2?=lQ>E?n>L4%%VzFZNjsP(ZZq>aC&$`wn0)M@N[xgRc-%0`!' );
define( 'LOGGED_IN_SALT',   '+`g|6aa]$2M rRzJ(J-9R+~5o>GQPr;Ak1]dBYg-,xKYdcIC;kVt(di%?H.WzehI' );
define( 'NONCE_SALT',       '91l>7a[]_7N17t9_,s<}goLNi$:IKoeH}j/VA [WE&F%RzgD%{89vMjqkD]si*$#' );

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
