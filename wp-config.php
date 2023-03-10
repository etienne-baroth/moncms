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
define('DB_NAME', 'etienne-baroth_wordpress_2');

/** MySQL database username */
define('DB_USER', 'wordpress_60');

/** MySQL database password */
define('DB_PASSWORD', '2A4Jkx4!Jm');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'X02L4LMoh*Na#9hCbr!l!Djqp9kIWPDE&UuForvKMI6Yvcgv*HOjN5!C&yt2y*Zt');
define('SECURE_AUTH_KEY',  'uKME#CEhjp193!C5UAF7%bQCGOf3IMG%ZG*#e9mtmfBEQe(%xxiv0IckdFFJ#Qcn');
define('LOGGED_IN_KEY',    'YSa&%ff@AU91CDYDf5Tn%&NtUv2obXtnC7r^EP20i5L&X0orz46IHht4XIzLxv(t');
define('NONCE_KEY',        'VM6s5KdUcswSly#mZH*i2Mf%P7nNk^SoCDKH9kJzjBQPIiVNbEtVFBq&5j5TN0dX');
define('AUTH_SALT',        'pzwbjJf9Ict&F8yV0vJy14Y9Hz^5xMYymDaU!thNbPr0fO!q!#8R5TIU!62^YRF3');
define('SECURE_AUTH_SALT', 'bG4fkH*A)4%G&HeAubDs)48sksntsj2qO6N3mpEq&KA8VdWb(2^O&(#KJG&sXuv&');
define('LOGGED_IN_SALT',   'f9wNCWqM(HOy5Cj1IgJ#jVKZ(w6xyYcBjpWwD#RhyXBPZxVz)%kDSegnzc4oPwK5');
define('NONCE_SALT',       'eZC29@POodVzOB@scVDzY^4R24!Cxsm1JwKwK^6L52Wg6DiWAVmUE!S4^Hrk^YYy');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Q2uSL_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
