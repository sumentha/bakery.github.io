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
define( 'DB_NAME', 'bakery' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'eCdpEDw?71j-IVJOZrDhs^wx8b+5htGq38L_c#TpgL|g[2?o+&Yt<`t.}nD5R?mh' );
define( 'SECURE_AUTH_KEY',  'b=* ovBb>IeS[Y/}q.Yiwp{`r}H+s+=f4uoGtdCruTQ%cXpxPl.at-_(<[$DdM_~' );
define( 'LOGGED_IN_KEY',    ':+Rf o{%:H.WULPc<kFvibcb0K_h.`k`u.sX=@L$%R}+t>T=rekK35H]*=h;?T3i' );
define( 'NONCE_KEY',        'SWY=a;!iO2;?KtOF$NJ^TRJTew6ubW=h+?~g p+<E$2NhpfF[@;czQ|-!RLUf]]o' );
define( 'AUTH_SALT',        'hxv>Wq@9M#-fZ,gI%)~l4[*G5+#~af.$_;*]qKXOpS,B$[PR(uy[=!to&_cM5gZO' );
define( 'SECURE_AUTH_SALT', 'F>&$MmCKI_eQo&+*w5Pkv}^2=y8C)FoY2X-zO)f*yo-vA-8@y#Duy>TgBZq`?~)|' );
define( 'LOGGED_IN_SALT',   'i]!^ZqM Sf_W9vkt*!<I?r _uru0u+L,.{s}Zf];$fi{lw3<iD,`e`ZB|}/hY^W#' );
define( 'NONCE_SALT',       'y!{45EyS~QE3?LcVPJtE1tC^v?[E%n9L9Q+m?AU*fGh8E}gdfP??4&blyLAVfyKl' );

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
