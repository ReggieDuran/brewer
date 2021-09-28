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
define( 'DB_NAME', 'sql6440664' );

/** MySQL database username */
define( 'DB_USER', 'sql6440664' );

/** MySQL database password */
define( 'DB_PASSWORD', '82zUfURhxQ' );

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
define( 'AUTH_KEY',         'fY>QTcxGG%MJyjMyJa<%zaJLH_TdW:kb<=Y%O?-#}eBEpoS9:]}.?/+Mht_Qd|g!' );
define( 'SECURE_AUTH_KEY',  ')5V >#MIayC)jILyB2T6pzPPaRu79{{nyH h!x!oUC`Y,QY~lnY@^##I<+ds3FP:' );
define( 'LOGGED_IN_KEY',    'R1h.LeD%w?U<?l#wbrE|UB9|]hg5x=^gK@?R1#R_3A./|MVK~(!DW^<ITZ/:6 7b' );
define( 'NONCE_KEY',        '?i>wZWxPD.`FMs7MxU@+uG&(fP1lf<YfhnE3) ws67?Rx ;PGyvPKynEyc8JD.u>' );
define( 'AUTH_SALT',        '8Iiqrh%%Nh>Y=Y0/PUpp%,~*uAx0}dvpgmbuOGm)E2b33k/ek|u;(0 ;foB?eSe+' );
define( 'SECURE_AUTH_SALT', 'K<AV~Jd;l=K_$:;1r-S8]e?SIYdX_f>j4{3<cU9kV)OZ)S78JM;Vgd+gLi/H/}^9' );
define( 'LOGGED_IN_SALT',   '~jZ,y0*.y!R$46}58{Fa1V?@SRs:32(z68N-gQnf8OGbPJWPhlUtXNo?;ct!Xo|4' );
define( 'NONCE_SALT',       'r3c.7Al?lDd;MJFH[IZP.^C|:Z6CnAX[bQlI$c!-yx1KVMS#[uW .g^n88(INP31' );

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
