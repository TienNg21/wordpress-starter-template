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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FORCE_SSL_ADMIN', true);

if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){

    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}

define('WP_HOME','https://blanclaserskin.com.au');
define('WP_SITEURL','https://blanclaserskin.com.au');


/*** FTP login settings ***/
define("FTP_HOST", "blanclaserskin.com.au");
define("FTP_USER", "blanclaserskin");
define("FTP_PASS", "1");
define('FTP_SSL', false);
define('FS_METHOD', 'direct');
// define('FS_METHOD', 'ftpext');
define('FTP_PASV', false);
define('WP_CONTENT_DIR', '/var/www/html/wp-content');
define('WP_CONTENT_URL', 'https://blanclaserskin.com.au/wp-content');
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
define( 'AUTH_KEY',         'd=ud>`6/HPZ2&O<AHylU[qy/9xl<W|qr_>9jlhlH=CJz,Hl!NTcHxG=--Q-K0cNr' );
define( 'SECURE_AUTH_KEY',  ',S-LWJicM)sAH)5+= bzZWc$wBlCweO53AvcyGLb^T.yd+Ho!dXucqL-E_.-`gd8' );
define( 'LOGGED_IN_KEY',    '4d;ot]6KBEPn>A9o)_`iH4$L!y5ykzn=-5!0yS+ztHUXT1-?t~16WtqQ]92^a!*U' );
define( 'NONCE_KEY',        '-Xg-bj(-3oX8fiFgk}+yD;!rPHy|WAI7_6c2!Ck%}!}`{; jK~g!W#[j7_>Ix3u(' );
define( 'AUTH_SALT',        'YW(!t5OHOt2~P9$2QDiEvpnPp/&20>_}..eE!]fk0u1d~7F`1AEd;f4Ki%cG^4Ud' );
define( 'SECURE_AUTH_SALT', 'g?z?KOKpQ7pG6=H80c] _dCbtV`fEP$-_VIV_<nHnwz?7En2P%(/F>8bgz)T<=Ot' );
define( 'LOGGED_IN_SALT',   'GL2Dcm@A&kzL%l{+qvh#%2JCF/rov2EqNuLOUAI{!8},@;[,-{48IkYHDe 98~2g' );
define( 'NONCE_SALT',       '9IS$<5fo21V=)*,D:dPg@(+`sIkM2VnO:Zy[;%)zO0pQa(,CZP:D |gA|pF:y3G`' );

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
