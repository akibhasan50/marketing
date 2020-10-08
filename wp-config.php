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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'marketing' );

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
define( 'AUTH_KEY',         'h/xeun9crm,^:a1I%RLBIX2uhG*81.pW2w|Gn`lcGUT-k]`[ZqNmyj=>hwEkT_^P' );
define( 'SECURE_AUTH_KEY',  'yc|5=KXV_Iip9;csbLVkEP5Waps&@{.Pt=X:]R[6wZuHh;-Kzmy?S5i-`t)`roQh' );
define( 'LOGGED_IN_KEY',    '^wx7CW/^%z`3t(D/s^5c4&_=^Y04CjC3@_#/uj7KSzw- nDKkWyuKPN@@&Q@gL<t' );
define( 'NONCE_KEY',        '`k?3d+KXIT]pn0S@q]R.:RML!LOv}# 5gSbVs#(7hF.BPW,`mG<xd~w~n0zfWZ<G' );
define( 'AUTH_SALT',        'k$MAl/uz;X5=5G^aTXry@bGhp~[|Lv)9!N]PKs!vvaHz(qiF)>0ozyhF3h]mvesh' );
define( 'SECURE_AUTH_SALT', '{7)?*kZ!7=BwoutTOa^?adwpbOAJXz@&oj{1PSsvd|t&HP{l_MSwu~lSvem40~-}' );
define( 'LOGGED_IN_SALT',   '/VwsN<lWOJF>u`6#xw 0pAb{fo1!g7&x>rYY<&WL,sy6|| `gZTQ 0%^[EG>YjW5' );
define( 'NONCE_SALT',       '0a<U*WJ?:)Y/,g<sL`>5*R,nVjivTF6HYic@^cIDp9zY:#b[qf/zML6_7bA=^wCT' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
