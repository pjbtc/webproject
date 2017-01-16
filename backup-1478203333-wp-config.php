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
define('DB_NAME', 'psthingc_ss_dbnameb80');

/** MySQL database username */
define('DB_USER', 'psthingc_ss_db80');

/** MySQL database password */
define('DB_PASSWORD', 'A3FOvotmzf5X');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '@L?C[>vd+n%ANr%=iA$QmHMZx=LuKYxiY>lh$//tFIp->q?zHt@IZCcH}gH]NJqP;+uf+Y_Va?>*lu$vhW]p*}hdauwYo@^^DT^pTBJ&P]p(G>Xj}r{}PpscI]}kw$!T');
define('SECURE_AUTH_KEY', '^XO{t-B!|EI(ug;q&yW<)V+o+^Wl$S)/(=P-=(!HOV>B^&[+Z[}b-dhG<A?GnYytt)GGrixU)gr}y@(n/zXP@AXF}%fLl+*O^slt}^|oPC>^{_}nU%k@)v;W^;yLvX[l');
define('LOGGED_IN_KEY', 'd%p_VFhvjACh>B/uC;rZ|dGV|Y$U-ne;]EGlFn)sp;O/!}WKR^x]npwaTe||z!iAToZjZ>]^tuY!jvQdNSr*wtQm(</)TaBkC^yQaQ/vTViOJ[nG}&>ij)BUOSSFH}ec');
define('NONCE_KEY', '-h;/?@A!Z}sz;+zKnvX?!!w}UhGL*SlMsi/H/u(aHa$h-BlPaek-x%b{Car@Dr<ukL-&rv(pgEfbgBDG%chP?_p-zy/jNY}Zke=}bp&FTtCcckj!Av*LBgaGpyQUV<K-');
define('AUTH_SALT', ']dr[nocwg$fi&xKDQiu|J%qFyvvwlw%-lrX/!PSA]-%RiI]M/=d*go^Y@IEFtva)!&D&yY>Q$lG_l|XF]fzSvIFPn=}<LL&KiM+=E-]Qk^waPWZYRhoe)Sq@<Km{SgJ(');
define('SECURE_AUTH_SALT', 'bn>HhWZr^*T*n[)x^kl^Pc!Sz&tuRXsacTd(+AS@A-gy*;iwGi;eRQH{|+%g*e)oKHp?dz}YqrQUUANDnSRrcBeNpZ|{@xKB<(M{dxK@j[gYpQQnDg{jonVAwjx+vhIT');
define('LOGGED_IN_SALT', '{OiaopI{HRb]{ReQIotN/WQTid<La{Ecwmv_f(}g|*ttN=oGMjz)J*DQau=&rA$WpS*yrLE}W(VCD$$H*y-L/f?gf%-{tL{kQjzJ=_Zr{|qN|Z}yS*)GBXVL]jcQO>?Y');
define('NONCE_SALT', 'ze$xG!)mDWQNudLQ$Kg!OUXTvtSuw!E^Yl]W!sik{?rXqabh_!(SQSuNw^>OCH*|ynel+@=hT?>F^J/|}_fw/=)u*^?/lNAlBM^hN@jfMsG>(dKVf<uuUzSQ;^ZARh*R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cbbz_';

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
