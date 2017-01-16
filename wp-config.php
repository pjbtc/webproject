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
define('DB_NAME', 'psthingc_ss_dbname018');

/** MySQL database username */
define('DB_USER', 'psthingc_ss_d018');

/** MySQL database password */
define('DB_PASSWORD', 'qr44J9J6KBgr');

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
define('AUTH_KEY', 'HdWDqq[-N|;bBVPUrxG^DM[XnPjMvcz[UF{GDPB>sgo&jit{fajI?P=K@$G=UbBbztPKvg>tvR!PDXzYAt[XFLW$*$V_+;(sceE]p[D%@a!!Ey{GKj[=d(Rc&gWuMK%;');
define('SECURE_AUTH_KEY', 'g/vSM({Czy$xuXMykne+br/>n@NkiqTwF*B}RyMmFzMAI(a%}}$-KSL?[&_%ppHP=K)B|(<<LemaiCyCPulCX[|Glf-nyqnumjmYZY]YzMB(OATuA>>@<o)paE]D&[=e');
define('LOGGED_IN_KEY', '(vsxIt;tpYN-+Al/H@-)RXD?XR(+kXA{aBHutkL-wdwiCH>SfbEij;!|-{c]?xHGJ>wSb<R[ktQe@g/Z[Jw((tYf-vGb%$BNpyCL@{_X*tLh;cHqSu&EhGf>GrBePK(y');
define('NONCE_KEY', '!=g&Abo<*bG)U=Q@(BpGWmbf$jWWklx}BGgkht%-jCx{IwS*N[g/e{TBm{EMu-iJ&OCx;)eJnJ/igQOb$e*Do)NpUTlgRa]_KY)A&G%=n&|[WB=F=OyJ=%=(Hhm+D_|t');
define('AUTH_SALT', 'NYqQm%KLM]{=FXckL&eza/iO&;tKgg!I_NMNuZu$d)jlxevYvKUelHj|CF-ciUf=tWcGV?$LD>Z>eSNzq}JwY-tAXhtx^<yFewF%CM<bQmgDW>?]-=zpVIaY!LEtqoPP');
define('SECURE_AUTH_SALT', 'Smam;s>e^RwktRZe-WrZ$q@(/Mnj>{C@m;/*EUgRioIFWihTE)lJm[d$Uq>sQk$l-<]mmA]LRMEtXAB!hiWwNFWFtCnE]kKqOlaOjG%oXj!LuAOr=XjABNoL|?&r^wzA');
define('LOGGED_IN_SALT', 'GgI]?)%|zb@m<;URkE^a[_jFeCQXJiadtC!g]ZkR/mVky$|I=u|SCERyJt(ZiB}ms}liODVXRSzN;fs(=QX){F)oJbCTxeKkbc%}>vVm^WY|WDYFJusHqDX$T$q=}sw)');
define('NONCE_SALT', ')}sHs_XUQOMv@%+r({=^FfpHxBvg^WqSEbWZDIc+O{fKdrqPHvPyJFLuhnA_<%GDJ{YuHP=}/DxPba!}^x${XzmtmU|%^w<[HGgF+gt}?zj*FFzbno/]]TscCi-@LXyv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cbqj_';

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
