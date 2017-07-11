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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%uT~T%:YtUV4|->gBa*kO3MgTmrWLhrx8O1sr=!WZ~w|,98*$1[9R4TTT3kF@Y R');
define('SECURE_AUTH_KEY',  '@?p6M8 ,lcptRn17^`*BY2mt:6k*/3OW%/Vko3d;o.x=wq_zpxhk2MO/~QR| Ced');
define('LOGGED_IN_KEY',    '}t %J(KnPPReO_E)B|E $k34S)ai*1aFZ@9PH>q1^`1qW-ElSv{q9WtSvSn?}aJi');
define('NONCE_KEY',        '+2c=R f@Aqm}Ld,+@HtT+8UL)|Zcen2qn@%a/u7{!)5!MCbMV#W{/DvN&#`|hT[j');
define('AUTH_SALT',        'XQrEVMpL,wp_Z/Ye`XQ(0T2+Tq8:nYoS,oX&Q49I)y*%2u7=[SiDe>dBR?~7u4rQ');
define('SECURE_AUTH_SALT', 'l,Ys>c @E&booKi;IXK<DX6k6[u6Hk{3Ytuuld-fY*56^wjD=Gt~1i;HVW=U]<0M');
define('LOGGED_IN_SALT',   'VF)yT5*f*c<1ZeJ@)5CCEjz,=%OD;nsl%)yxu5~S9&,)*Oqc+vgM*}Rx`[ Gz@0Y');
define('NONCE_SALT',       '&-1f1e#M^bRxF_f=pS,1x1XA5.&S>06 !N7b~=YzOC3_FX8}H_*QU;dy8xeLRv/*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rummanwp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
