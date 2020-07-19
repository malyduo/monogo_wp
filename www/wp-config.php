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
define( 'DB_NAME', 'wp_monogo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mo-db' );

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
define( 'AUTH_KEY',         'g.Ba@<88@:i^qL<M(_!Uf1C],@^Q_@Np)93}|$(t{2_dOBfj[v$:rMB5lC6)3(28' );
define( 'SECURE_AUTH_KEY',  'Dqf}U;9cqF-bov:kpr!/XZ$`M(.[7QKu($<rb2fI]FHg3W4f4a~[t;axD_>$g(4K' );
define( 'LOGGED_IN_KEY',    '$O+8Ta([;yKdxL.~Kr/OT|5*RLe}:5sUd:Ak*)E6pUWJ} uZ=Wh!c[fXyfZ- w,)' );
define( 'NONCE_KEY',        '21C+)]HwFq8LS+K#JtO*>et iT=umUspY@<xG2Gb4,}{R(JWvn=}i0avgJZ3}OkX' );
define( 'AUTH_SALT',        '@nugBHe_;/^Yjj/lrHVtaE>R>RAx< c5c@2)u3|XPlvel`|x|tli5/a&F>zjY?&W' );
define( 'SECURE_AUTH_SALT', '1(:xW(FB=/[EA7x7Cbi4O2uRP[8` [KT}d8yjtgymA-fl0r%GCv{vb/2VK9Ju(TQ' );
define( 'LOGGED_IN_SALT',   'ZaU_8v*9@Y=0UUg]16n5Llf8TpnW.Au/[zPXJCh<|=R,,hg@rzJAN#P:KWo9[2f4' );
define( 'NONCE_SALT',       'MZJ`U(M@7B(*3yt2:+J6A]in^>69=4b80|o3,%2P3v9C [,:4sA4b)` F;QU@fH)' );

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
