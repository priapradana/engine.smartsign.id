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
define('DB_NAME', 'inflixer_beta');

/** MySQL database username */
define('DB_USER', 'inflixer');

/** MySQL database password */
define('DB_PASSWORD', 'b3M0b1l304kuDB');

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
define('AUTH_KEY',         '+J(QuBf(OJ%.?)##H18>VTKxwz[nmsOGZiVrH]EPp?y#qy{yR>SCT=2782Aw%5p/');
define('SECURE_AUTH_KEY',  'O]1|#Eh)JE?+mm(!kTgS0LjF*CpA7psz{|3j>ggV2fjKj,/}7o(1+!63IRd`cLeG');
define('LOGGED_IN_KEY',    '80SrmlC?6aC3.@WN0[;!MO14He~O,SBfZDieEi0d1-N^ui63&eQw,9pMjs|$Em<O');
define('NONCE_KEY',        '4ph|T@}M2E$#p`(h|b{xa]7Hi5>cSEFja&4@m5`H7KLjZ|)+oeQsAIrj/zw|dZEq');
define('AUTH_SALT',        'ywy2t5$z)x6kJo6M7CP6e<3w|]<,t`!I4e$MHk3XL<.Z$]Y3|1iZSr4ZkM9B=i>R');
define('SECURE_AUTH_SALT', 'FcB${AWWSlo<4I4gW K.iVlLOn{^e~VkbkSH#<0@a*mL&J%<aeP9emcwtfL=H;Kp');
define('LOGGED_IN_SALT',   'g]No-+{y&OEzk!NB`;MM{Z3)Z$`&8$):>cJ:tOtW6V9ISP>$jc=L<gIkN-h#5ZH!');
define('NONCE_SALT',       'Yn&2]OmPs)Rw`e+9+;wko*}m -<Fbt$TmTJWN_wYU[E>0GpE2Gs2#^1B=% XTD8C');

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
