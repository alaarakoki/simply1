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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simply' );

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
define( 'AUTH_KEY',         '&EjQ_e0c{HR!o^R2vZ.EkLUTdfGj!{lggef3vh8if;6~A[&kO@8^?SND.7.ChLW,' );
define( 'SECURE_AUTH_KEY',  '^x!rK&$[T7O2Y$/EHHmZXDP:-,4(4D|;5Lus)G h~yTSkvJ7,;!FC15>29gnM -i' );
define( 'LOGGED_IN_KEY',    'd>0JAvL!*8&^d_E:SJ$CoVarz_vs5nfY[+{V*+tl8/A_hXCOE;_1aUjQn+CIpBym' );
define( 'NONCE_KEY',        'Gqz;?;(vG;MgWQ1yDFj*/.AFFv=_8tJ[{D@soZN|~Y|~Z*^7q=8cBfF}zm, $LJF' );
define( 'AUTH_SALT',        ']$(~Qd]}_u}4dG~{|ggk{+qs8s8XVGB>a4n=73.j<Butr|bFJJa2`[SP{%m5e,X~' );
define( 'SECURE_AUTH_SALT', 'z**y(f&RonQxCQ**b]y%u&<A(-IY4Y?vxy{?n5xxE9~Ub~FytD#6g.$9$aO#Ci%r' );
define( 'LOGGED_IN_SALT',   '>h#L4xjKRm-AT`2s-6>!0R!0l+|:]chK!^~iZexHx&p2C0m193xumr~}bVS*w,gC' );
define( 'NONCE_SALT',       '{]U7kp`L0j Qu(P:YA%dzn>&uce9sz2`<l/j/i_2ztdjC){^ukp,D=,RZcPr.4B|' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
