<?php



/** CloudTech (Remove These Lines) */;


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
define('DB_NAME', 'clfc');

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
define('AUTH_KEY',         'qvxrq5pu1nhu7sw8raxo1wjkoif9laov4cj0pvjlzie7m6m5x5x0ytjkkjduincy');
define('SECURE_AUTH_KEY',  'dbdobkdujdtg5s3cuyxtcnegxzfk3eupcdfe8goz9pe9nomvkh6dlgrwjwjcrrqo');
define('LOGGED_IN_KEY',    '01ujkpaeqqc21ldblqnffdqbn6jwtffnbk7yaj2kw14wqaljh285e5gvlaekbfpm');
define('NONCE_KEY',        'baatkcbvxp8o9p41lljlo242vqtrief0cmmh5jz7hyszeawd3hv8g0l2wqsdglci');
define('AUTH_SALT',        'nhgv3iagv3e74cm0qdlmka9nqx1forjhdhxdn93zhalio1c2ieon3mzhegdlnzpt');
define('SECURE_AUTH_SALT', 'xszbrcqcvfol9stulhnan62kbzhijrlqvd9tslctvgcf99axl1vkysoaqy2u4ub8');
define('LOGGED_IN_SALT',   'bqnw3gbdcbplufqi5zuaxjh5icgjtsul79p9iuu08ydgzmvj8j6tfqv4a50zljbb');
define('NONCE_SALT',       'trmlwcbcermfcdfmrbb9oxnmxg7ez9blpmseiuilvldumxo16psts3chi1gt8eog');

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
