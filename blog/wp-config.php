<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wrd_1nj1ia6im6');

/** MySQL database username */
define('DB_USER', 'wrd8uWJHM8a');

/** MySQL database password */
define('DB_PASSWORD', 'emlRbD97AZ');

/** MySQL hostname */
define('DB_HOST', 'ptrickgcom.fatcowmysql.com');

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
define('AUTH_KEY',         'aYHiQgzcEL8MMDzAT1eIdTMhzorozczyPZnJb9Raj6N9NOEdoWpoARqcSni90Aea');
define('SECURE_AUTH_KEY',  'WiIibanWpywNzlbQjwRjHaU5P30rjx5vQnQcu0rckoaheV3d4qmP6Pyr9QpwPqci');
define('LOGGED_IN_KEY',    'R19r9Ibt5oAIHHUDgrus27UoaqVjFUmbziYBnAYvfN98VF9YBKuQh30MAo4UPzi1');
define('NONCE_KEY',        'HNw60VJgNw2dDjnN0U3ZPtJUr7SDO7CBy9I3bkz9hrEoVTK18Rrkkb26vcS47jcb');
define('AUTH_SALT',        '74xOAEcwVMRsZ088Gr5NJIu0G4jvaeg9uvXV5AoBXDA5C1spKQNEiC3EKyFaj0yN');
define('SECURE_AUTH_SALT', 'VFDocrz57vcuGn8rXtE1gN1Qb66xvLAM49ZXuVGrFqfnWzysFVmXSrenJ5nXRLz4');
define('LOGGED_IN_SALT',   'taiZl48vJDIpENxtZY9iGpHpWYYpzpVhAHzuTjmBwcOgr2bcIMqcKVN4oqOtaR8T');
define('NONCE_SALT',       '5CKZEtG6V9LIwRnIIcRBDp6Q6ue9lOcjWSsVJJs488ZD47sj71zicYtaiv1rbnRc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
