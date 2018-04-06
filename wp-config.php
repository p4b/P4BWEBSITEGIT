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
define('DB_NAME', 'ss_dbname_mi7bbio2ol');

/** MySQL database username */
define('DB_USER', '7VdqWNmpT7mwTch');

/** MySQL database password */
define('DB_PASSWORD', 'Ra83ieCTUXsmD9eq');

/** MySQL hostname */
define('DB_HOST', 'p4bltdcom.ipagemysql.com');

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
define('AUTH_KEY', 'uLpUz{te/SJNlX*xiMeNb{AI*@?|Efgk>=O=E=FGv?TBEzVFH-o+OaK[/q{T]UD|?!=f{x(-[ex&?UMifjUmUb+wAW={mWFWft]Ub=++o/kRwLnXE-ltva&ONoGUQnlc');
define('SECURE_AUTH_KEY', 'gn[R]/U+{qqKx^R@@FDdynhzUil^RPyvQZm=aVGwxsJVw]^q]t(>u>O^go>jd-(+hDWxPvyasnCvTCmf(P/oukrxe;Q^QQn?n[sh|[sqvuW/(++hZ$IC@vo@Ci@Pj;>O');
define('LOGGED_IN_KEY', '|/)Y*B>StrgBax$AM;M|FdCzl=J[_PrpVd@uloWEs*p|/y|XM}Z[/sX|cFp$@Fmt>?/UAT]?Y{mG+A?gY!Mc/{!/J><BVya@_NPHFolJ%o;pSOWr&kSPWwu}Y&YsNGB&');
define('NONCE_KEY', 'uM*a%Ygj]yo[R{wFo/namZ%R%bf}mIfHIFyF[}_PDYICLmR^E{ziinH}F>btMewN)mjnr|YJ/r_xfMUu_NyiyhBq%iJ>(Si[Ig_wd@;>shpw?&Xu@nBX=h@WNLDyJGbf');
define('AUTH_SALT', 'Anmp{|]GW)D|D%d[Xj=wZeoHnvQd<h-Ptje[f%vC<UEv!gv{JnNMZ+Wz@tP*B*$G{S%=onRkM)yvd&[EaVHs=/qou*H?jB&ZxIUUE?ZVW|QrQJ+ZB-{FRH;+xL!O>D^b');
define('SECURE_AUTH_SALT', 'F$P<Tx>Q/W[D}d!|mRK]oel}x=jv$ioEjQ>VVVb(GMdj<fBGf]AMp]aY})zr_ikJFwiDV=Ssr}PHRTGR^wZXK!bG[!mToNtjiSCH||HXh?(oztp${pY$;]DpHzvB]v-I');
define('LOGGED_IN_SALT', ';Fe^({eRYQsNhSrHC<;)FilEmQdUIw{$=SGoEUtkh&S?AorV{afy$IF-tRvLIq=/[@;=@+_QNWvNIg@a[+VGYxE|s@DuCv+n)dLe;&MfhD*wlqL_Rv=q?YLDrvwWNji<');
define('NONCE_SALT', 'FhjLm*ymfhIx<fR!NFK^lEED*Ut_vSmuY--b]rsm!Y&en[/tsg[i]gFEb/?@+ClCF;++&JXABV-<rdt[ksCEQ]VfTPdQsP^YNaQ(QNYN&*}vNJq]V]_{/OV+GXwWJ!Jf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define('CONCATENATE_SCRIPTS',false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
