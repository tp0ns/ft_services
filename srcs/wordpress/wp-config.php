<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST',     'mysql' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         'OgDe`<D,u7uBK5C%a?|i::CJ/>:(s;WZ|SY#~ru!l ^1@Q?1oZ.!L+L!&9+wj7v7');
define('SECURE_AUTH_KEY',  '8kEK*1hw*zAt2}pz )WlLPP|K,[_]+ak{q6CKl>Kf^[:9Hpa n]f}~(3EA!1IlNN');
define('LOGGED_IN_KEY',    '-IoEofX_os7dB~BSHfWprp*]7) )[f[Gi)}&i-KCRtApG%xtc*h()9+oi-SC]QC$');
define('NONCE_KEY',        'WLh]+%^YRsF8pCO( ZfLs%qK;t)I/VF1BoWd.f9Qlu;m;?K/Rgm]+|oa(ah^A. 6');
define('AUTH_SALT',        'K-N*uWL,i#asJd!ow@]e#_:gX.2|t}NeQV_j{.Gys1N+u<1ITE,40g-~X^&gIeC@');
define('SECURE_AUTH_SALT', '~;|[xj,<@>bb=!nxw+o<!L4Oodzg0|%042BG$DeAU^/klsuA+LEQY4GNc3Mp[&E5');
define('LOGGED_IN_SALT',   'kv}|6x 9aZstA@/|65BB0l^wER{Bde-vWCe?-j94_#tfv*{asN4AtsVtx&Dh<6^|');
define('NONCE_SALT',       'k*$1qpou-$1eHbpkt)KyO$R(n-0c91cu[Y%)#;+UU-`A/^=W@6ot6Njq-+;L^)+s');


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');