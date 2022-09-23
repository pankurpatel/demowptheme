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
define( 'DB_NAME', 'theme46' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Q|*>wX|fW!b_Lw98b||{E(L/&Ae) y_%!>u9E.M]#4ai(Xw;#]fThi^(}}4E)hp.');
define('SECURE_AUTH_KEY',  '[cFK-]t^DRMC&n3804:_W|-q9+h&&df0To:2G1tA>~~44^._^jc-;Bn7_j!@*Xc<');
define('LOGGED_IN_KEY',    '?z,#R0*`D{_3RMgFH-CR;Nr|a=xh##|-c.r$C(VM|^nXS+@(e1SN(*G_e{M*^$*Y');
define('NONCE_KEY',        '-uzB}v9L)%MAFY8kn@K|AmZ|EZ}0,0Q}EWH];gDiQrC=Qc5 ?X`}wAWpnrXnSj]M');
define('AUTH_SALT',        '&Zd.S-0)C~ uKRYh!jsDn8q,#JjN )r:$:jbD=F>O`s~nh{=U:(X|FEzf-6Ay;(?');
define('SECURE_AUTH_SALT', '.PBL<%ZbI73{s+ud(R]y8~s=J#u_8]&;j6Qmah(DV -<F57Y,[fNYBA{| W;!>Mi');
define('LOGGED_IN_SALT',   '); 2()Wy#{I&8lVCOa>6`*X[{=?h1aURc-{Y10Q[R`g-Q#uA3/L )~9  M?*dOZl');
define('NONCE_SALT',       '-|:C9U!=mX o0YKkV;vhZZ=83hsq 4{zxP_c,>|1N.CzH5)Auat4[O3a}5+GvsmD');

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
define('DISABLE_WP_CRON', true);
define('ALTERNATE_WP_CRON', true);
define( 'WP_POST_REVISIONS', 3 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
