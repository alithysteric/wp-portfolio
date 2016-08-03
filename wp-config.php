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
define('DB_NAME', 'wpdb_alitadiwiguna');

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
define('AUTH_KEY',         '8(Ma w)q3lx`*^ ?zP8Wnph_<%l^fz}G}5,##B!F>7cKlb??YV[4.(L;!p@h+>pI');
define('SECURE_AUTH_KEY',  'T@OeSP>~?*-)rpw;iOuXO06ZVi&(QOBnS~LXJ eKHeK[y<.DO+pJW=zo^7zZ~k*N');
define('LOGGED_IN_KEY',    'p(cv?e/dBx66jpm[?1+S@gKK? 7kqfA]=$>=WdT2z/S,Um077n-y~w+D8^wA]qhT');
define('NONCE_KEY',        'u+;+6kK<)o} (,r~hOoXzOFYw_S[$&2DcDYD)?lRjOM9>{M-Y 1$wa^.:}n9-cs,');
define('AUTH_SALT',        ',bh[`GD`uZ|P!Je~Zt!8,6%T%{6!D,sw6WS+)_fThRja^.~rs97JGc^f|jsXtA9_');
define('SECURE_AUTH_SALT', '< dZ)BfQnqx@h+2!>XP6&3A^tVY?5`W<8LkI|v<aXzQ$##a:sD6=[j2^ui{cDZ4X');
define('LOGGED_IN_SALT',   'xX58aNIuz28].muO]B7o8gr!BT6A{vI4Xg0_,aj)vcK/6OJNAR?T[wzq@j=j-|+z');
define('NONCE_SALT',       'bFl}Dz0sev+]Yy4OfH(CEfbsi@OV[Mm9@.396%{d84w&!.mxH/o! zr_-T6 ,hzw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpalit_';

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
