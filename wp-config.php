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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpthedeve_01' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         ':hy;`/e8i/2<QUb7<hIx3,S.&hs!^$EGbaXmNXzit$f$8?CojJwO>Dn~nakRM}yr' );
define( 'SECURE_AUTH_KEY',  'Xx)7WLpdU6+E^KIU%H*E[*kE1{+Pl]GTY#hKdb[aRsq;8t;;#;d|@za8Z:f3Upl{' );
define( 'LOGGED_IN_KEY',    ':%sX06o4CQb:ZGgZlgvff.$am=t[hcsq,c)p-KhbGPb[Vu6ukVKaC(NmkKvaN%|P' );
define( 'NONCE_KEY',        'iZu~PyQ=yAqx R5_mqYR]ZbKF&jXl([pb`Bcx_Mnr[bfe8%#7j_zqj3Q&i^mc&IH' );
define( 'AUTH_SALT',        'Ql;d3+]v3cL9.TEDo?YJJab2+*RE|&HicXm2vV?C0:XmEklJ)S$a!&Xt8h/v.YJn' );
define( 'SECURE_AUTH_SALT', '1r<VrwHPXVQ1k/Z1>WFHPfVC2h3z#Wo 6mTbBKz>H>,>I=4>c)pyX3^}h~y6ztE,' );
define( 'LOGGED_IN_SALT',   'zYHV T?egExqbzRhUq*Sv56,luZG,n8!9kvehElmWl`c&?r!YnL8>lm$18M2YVej' );
define( 'NONCE_SALT',       'k@gh&Q5KL%yT1rCRpTS8oa L/En|n<$350N?o~v3= Zp-K`MzSB;p6mlA94ygXf;' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
