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
define('DB_NAME', 'psthingc_ss_dbname713');

/** MySQL database username */
define('DB_USER', 'psthingc_ss_d713');

/** MySQL database password */
define('DB_PASSWORD', 'tLdh7T8QbcNS');

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
define('AUTH_KEY', 'SzfprT;Ts?zsmgiHLeT^wy>m{L@BJr)_H@b(TzrDi?fA&=H[xJ&^ixQEycaad<$+GM;Lq>Y-q(TZdD[$jM_tWxqEXVn%ROAuSsa+^mOmkf;t}mr&<oO_j<GM!b&O}lvh');
define('SECURE_AUTH_KEY', 'MV}irOEsbhBkpC&tox!N(+QaH_bl{-SSuzzF{MunJmAeUL{A[T^xJZENkkfdLYssL_GjzSQ;pE=Hm)?++mYXAg@/=*sm=yqZ;gzESt$u=wk@azUzxN|u;sAx+Eq_+BD_');
define('LOGGED_IN_KEY', '@[sNqKDm%w&UWU/&<ZJNqn&t_%*?>/pXqq;pD_BC$B--)aRsCAa^H)![CKa{vtIEWjqero@K/KU!XvX)Jf$XIFG]*]+pu(Jrt(bmuRZ<R?S]%qX)r{kl%PK*R{i=|}J[');
define('NONCE_KEY', 'y$[zz|yYkZy$ui;pjAJme^hBx{O=MH/o[tpQ$XBX@y=fey?RvE]<rULTJt%WuG(@KYerKr<nu%;e){UiR/X!BBE!vs$EYhkj*[{z]uS[PH}rpcFl$^m?&)*FuzIXNWU{');
define('AUTH_SALT', ';ktC|FDWXG&rb{ixyVc-R^b%zh+T|[@xJx)[ATjbf?&qj%rwqdSd-Rv$i^l/m*dSR)!=?e+rx&nbdp_I_l/E=do}WbHd>C=JS?[)=Pm+G)]}[bDhzr](AuPEWD{aw@c/');
define('SECURE_AUTH_SALT', 'a=wEt/kOQ*yzM(Y<tlRvXsvfqa|c=Ct<Om?%ClzDBZ|D}vOsk;<vZAptJJFwqJu*uF@*X${N*y_%w(Jv/kxdKzUOr?>]/&mZPd>|fJ]P=HxhT^IkdJ[Mf]kAMnwO]{*}');
define('LOGGED_IN_SALT', 'WBdf$&i$Z]seKD/(SXf[sMiomUIF;(i[Ya[r(aCTjAUFO/B*i]<[=${R<PJRJgEhuMu!!d({Ik+bSbvkAZjZ$xZ/JyApQqDyYWHHBjI!XEjPpOP+cFFZWTNQCjKK]]qb');
define('NONCE_SALT', '++xK$^[=C[XbaTPrPO!jvDkG{BGCFuft*S+evJ-np^KK;s$Qjc>o}Ja?Y@OXf%|)L^XBEdO/n@pRiiTw+^@ab{Ya(o^L+;N{ulY%[kEbh}>E{@BTdJiCHK<%bvYV^|Fk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_kvqx_';

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
