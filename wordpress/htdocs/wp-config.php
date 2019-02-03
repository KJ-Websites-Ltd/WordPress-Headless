<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ',/8/Ll.7TB;$_q_orfwMdvB:MtJdj3iPq^NN>1V}:FRha#.0vQn<sd~zc@L<O[m{');
define('SECURE_AUTH_KEY',  'C54<yDg=-B!7nuP&Me3H,K`weKe+b}i~$Ve)W!d!Nm;jx.^<sy>7Vp9P7G*21ABj');
define('LOGGED_IN_KEY',    ':~+Bu|mz3.7:/%bu|g8XK;5Vg<3iP6F3C 0wt1nkF Q.x/^CV2{jF8Q;M|^%^Ouc');
define('NONCE_KEY',        '{bl9=VtAMTMrNS]%Fm6D_ x}4BAceLL7q<;<yY-I^.:?o-G GL!*!q`75EIu]kr1');
define('AUTH_SALT',        ' cf`)i$Ne/F/~,C8!}a)zy([=feS%+DRycC{gm0tI#K?UZjI0.@3Sp4l[!~ |&J%');
define('SECURE_AUTH_SALT', 'xL,MVS_mMr~@5pS93e/Oy(2)Ztw]A)vJ{KKa@(dN{(3ZBz9+}FE.%p*i_kZvABWu');
define('LOGGED_IN_SALT',   '`2?1&;Kz#Ddg,T_VfW|:r*.3%FK<-,p`eyvEU0td-RCf)DWxI,F]TK3+|__$12Bd');
define('NONCE_SALT',       'G]q2EH?mn ez(bN0(x)JZ;CkJI>r?nAwd]eM#_Pa1cF*!O@ =P8Xb0+xp1)estK9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
