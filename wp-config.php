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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp\www\captain-auto\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'captain-auto');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'dJq{il`(?)}?QA|OrM| NM=CV!@IUTZOf2}k|G*a+&so}7+ARz}bJ+TA&t=A 1qy');
define('SECURE_AUTH_KEY',  ',)~7]j7]I&6M=ZKpy^HHRahJ2uf>d?Ka?`oE{wfXwWJs&0-BYogwgIr>6lg<&l3Y');
define('LOGGED_IN_KEY',    '.z8$=/JR[Sx6#sFmO!tNVVbdZx!)e=y;ZT51):PRV$Awt^B#-{X(W6jB?-F)@Uqx');
define('NONCE_KEY',        '(0US[H.eZ|u[0/gLHNabAus|}k7H,n+U{~zk/f]2Lo4#8Nc <?~bf>agDiQj4AAA');
define('AUTH_SALT',        '=GAV+X9ju`}+ k3!W:^wuL1].>Xv=Mf1V*.W7K#/@Fjso@@]dz7#OTA@}M!!5?`R');
define('SECURE_AUTH_SALT', '(IsFFE`sC81t#ms!M7BKD0#u)D;VJ[%&cTC3e;G=taPmdT?6ol^Q KrBKD)HC7n?');
define('LOGGED_IN_SALT',   'Jg[#jaJ[ha)|Ywhs.cc*v{-?;uJGvL{G};,hlXL>$6vKqzJg@YFDlBrpqi%:gv!,');
define('NONCE_SALT',       '`j-W;(EpfnHADx=Qd]09gr<Hdi%YZS6CJ!LGgnO$@3z(:iRK:Qwmn#-NORr@<< 5');

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
