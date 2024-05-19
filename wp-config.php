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
define( 'DB_NAME', 'pixelperfect' );

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
define( 'AUTH_KEY',         'hun`jcuj-<.3^w^XIADk=lv{{(,!k;3]O/XSJo(yK&$&HMw;jQW[_m@x35,,2^H$' );
define( 'SECURE_AUTH_KEY',  'GD(;V(Z+k@$b@k&}-W$0{TOnFeW9BvEoXWiCPolxlE2P%>:9)xcc$A<~i_TSYO][' );
define( 'LOGGED_IN_KEY',    'C*UGSY* H*{wKw/V$a4|AgC!Ss.@ ,L6[!~MX1bC`.>r!;EV>fmB*:4ETyZe*>^I' );
define( 'NONCE_KEY',        '[TY+d::A_!H;B1~TeJ?r93*>/B0Z[cu7W6$8|Fm)7Xtl~=eD?g+#(KGtTi|#yf+l' );
define( 'AUTH_SALT',        'XLEl4+]SFjp]-V&M/`+SZsmF$judZi|2gB&MZmT+(k;-UljmT*`Ub$#Uh8=T@U,~' );
define( 'SECURE_AUTH_SALT', 'FU8sV2CG$-(*.Y;rld,lk8@575XR/Se0t1Ks!>C/%]u=p=hc]_;eo]R|A-Q`WR3*' );
define( 'LOGGED_IN_SALT',   'YzzrIJa${6^bms9W=]wZ#?Su<p4(Gzh#Tash{<IzO{)>EHB7`Rw~N/{$%ySydA.w' );
define( 'NONCE_SALT',       'h={QK*P&9dmW7)9UUXD]xi|Oe(=w+>>wfqOD$sg}b4JfNuwBZXurjO,&`[1qN!VJ' );

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
define('FS_METHOD', 'direct');

