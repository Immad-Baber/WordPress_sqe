<?php
/**
 * The base configuration for WordPress
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_40612822_XXX' );

/** Database username */
define( 'DB_USER', 'if0_40612822' );

/** Database password */
define( 'DB_PASSWORD', 'Immadbaber1947' );

/** Database hostname */
define( 'DB_HOST', 'sql104.infinityfree.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * Generate new ones here: https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY',            'replace-with-your-own-unique-phrase');
define('SECURE_AUTH_KEY',     'replace-with-your-own-unique-phrase');
define('LOGGED_IN_KEY',       'replace-with-your-own-unique-phrase');
define('NONCE_KEY',           'replace-with-your-own-unique-phrase');
define('AUTH_SALT',           'replace-with-your-own-unique-phrase');
define('SECURE_AUTH_SALT',    'replace-with-your-own-unique-phrase');
define('LOGGED_IN_SALT',      'replace-with-your-own-unique-phrase');
define('NONCE_SALT',          'replace-with-your-own-unique-phrase');
/**#@-*/

/** WordPress database table prefix. */
$table_prefix = 'wp_';

/** WordPress debugging mode. */
define( 'WP_DEBUG', false );

/* Custom values below this line */

// Force HTTPS on InfinityFree
$_SERVER['HTTPS'] = 'on';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
