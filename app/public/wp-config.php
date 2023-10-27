<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-M1KHN}AEY<&obETm[[iY2d(zdE2zsM**l}G`$!/jQ5t(g}cEHW@1V5t@OE(|we*' );
define( 'SECURE_AUTH_KEY',   'D?z__JIg]Z*xe?`CqM~HM>6<Jfi.}J!M@Jn#c~fWK@aB0. W)ZM_*{.{H=avVcLc' );
define( 'LOGGED_IN_KEY',     'l&Sg>;zmctS6-y--g~Pm*x%jr[&`paPC!32 piBpSo;xboIQ|$W!|vexr#UX0nYS' );
define( 'NONCE_KEY',         ']QJgL%mA28Pon)~#*iInZF.}BszTVshMN_joHG47eNMBr#d_}wC@lC$&}k%mM6+V' );
define( 'AUTH_SALT',         '+<cu1O,h^} ]I(|yT<XUU/xa4~lojWvXr;dn=*~|Us n1 .noLD~X^5aRX]wuN8N' );
define( 'SECURE_AUTH_SALT',  'Xe/=M-a3x?7bH}K*{;i!r/xH;1#{IWJ]_Jg[%]v/<l4z#2B`aW/]p8j^~#;Vh_ZP' );
define( 'LOGGED_IN_SALT',    'KT1FA+Aiq<=ivC3.omoqaU$APz/t%0ii<aTqk%Va=QJW}F^5hASFFJ(I&8Bg`g?r' );
define( 'NONCE_SALT',        'ZSKp?/%9YysKXe5Mo<uP9l=H[aWuTa,^45/{HR-6.>js<%4KmqX(,UQQfqX?R&_<' );
define( 'WP_CACHE_KEY_SALT', 'zv#@G)2b$zxfg@5&/DU6$;u};,-^VtO#%|p?S[l@8ql]5x[kvMFOs)x`6VFqa0hP' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
