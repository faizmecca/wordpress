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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gss_compro' );

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
define( 'AUTH_KEY',         '!R6sS+M z{ouGW.Vn=8miQ7av#*Wa1.|6k5?)sfB8:gTGi0s`7oS73%|t_l[+W2L' );
define( 'SECURE_AUTH_KEY',  '0e7MtEz|.,OlrIt`<$<}_Hp=X(=;*1oS5L2$a)8])Eo3EhV3Ml2V5gfG>NRP>X_I' );
define( 'LOGGED_IN_KEY',    ':0)X4[bz7bL{JlH7p3Si5p0;s%7}7x]w7t:UPFiGe)fS2_]RK^d<[rJ>bd q$8pF' );
define( 'NONCE_KEY',        'TsSap(t+@McfKslzCc#[smuAmn7mf)?dlp]%e$&Mm?6cEXFCdem&DQVJ]G{1@`oc' );
define( 'AUTH_SALT',        'N<X.aL^UF]BWjZ@%Ghj,+*a2.@gw.dgQ$ 9|,)WgltMjh?S6~+#R? G:r~Pcnk8h' );
define( 'SECURE_AUTH_SALT', 'F2Mv(L{`?tP!-V5YlJdAE}kRh72M7%(Ll;]VDQD+|]d/b*wG):!)1Z{%Yfhv5:tw' );
define( 'LOGGED_IN_SALT',   'XT<.rYS(8^=y{LJKV|*t@uk=?J:kJuScBsL=Q/4XM^?1}qE &U%Ey*y8nxVO.he;' );
define( 'NONCE_SALT',       '}O-4m;4Y/!XN*;kpLcd2Me:K{~mEg|B?@ewsKvCROGE1X-iH}MemwTMTb70,=)/D' );

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
