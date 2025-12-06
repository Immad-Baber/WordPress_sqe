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
define('AUTH_KEY',            'm g=g~*+{m+iZdVwI/CQu%NSU>*$%#IWD@Am%g:,$.d4cJ$71$})[');
define('SECURE_AUTH_KEY',     ';SLNM@.R8i@5yRE%XY#PlH.5Pde;<+iT1rj1[)a6qn-eSg/]Qe-8(<#<');
define('LOGGED_IN_KEY',       'pA_~r#DyrK1@J`Y~|a+SN6|t]1xk+-iCRC3-emvC83CFZf%f`BO_2EopS!S8a&G%');
define('NONCE_KEY',           'pXxRPo._FCL.eb|fzL8ib]|+oONX6c}%}AABx1[J+EMO>PYu}?$Ycn/xCCutoIN9');
define('AUTH_SALT',           'DhW-e9gVmH4aCnvxTM5$,z77u#O74s*~K|*]lQN9:G) d^A U|j$f1n=_Wn|^ZBv');
define('SECURE_AUTH_SALT',    '_iKbf>_WK(+&o5.uEB4+r<4>P1e!)mgs(=)<3,n^Cz2c/>ZPVU&K_Xmx z}ves}f');
define('LOGGED_IN_SALT',      'i9}^r1t?Dru2@R.XSQF!JI3:+8D.F($=}Y_pe@{+9Qd|.%J5vF;oDFyl^:l}U6>a');
define('NONCE_SALT',          'm g=g~*+{m+iZdVwI/CQu%NSU>*$%#IWD@Am%g:,$.d4cJ$71$})[');
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
