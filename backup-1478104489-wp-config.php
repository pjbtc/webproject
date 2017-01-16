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
define('DB_NAME', 'psthingc_ss_dbname1ca');

/** MySQL database username */
define('DB_USER', 'psthingc_ss_d1ca');

/** MySQL database password */
define('DB_PASSWORD', 'MhyuSYwYebrm');

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
define('AUTH_KEY', 'mq>pFqwnLFZWaItXHC}TT&|/r}XN&$A|O-bD/H&bzB*jU*EG$jx_KgM<IPlpm*EZ_>P?ps_Hs?etPWV(+-@IzzSQbkWa[t)uG^BfauX!OBNCRhvO^be;%cY[rmSA^|M|');
define('SECURE_AUTH_KEY', 'pBh/QA?=>PVocH[-O{NVa*^piAOI[PA*{?_ZbZAp_nqx}{m{_%VZn}^%XgBbhjs^pNRy[R>uSt|inYyOM&v$}QhqrZO]!wUqZ{>Pggfqr^Lef$w=XI|-<&QCHaJ?=+Rp');
define('LOGGED_IN_KEY', '(cK=p--LZ[mb<M|u<sv>[EuufXiFZMk>YOjOQzp]dawFW>>NPCJ<m[LpWB$R=gQxb=wv[/wlpXWw>S;BV|G/z@-%L=;>dxUC[/?aY>^N]xY>iy]cLa>j+)aQ-bBv%Fzf');
define('NONCE_KEY', 'TB++&h]]<M)Pj+N{Vox!$FPHP[X+FZIe{wLzP[iemKFTLk/};{nEK/OTIC%;;ERPgdTr}qp}SpBC@-KdygJgge+Jg+}NuyvCZGSM}QRAgwP@{[kc>W*-kaITfqpXVcto');
define('AUTH_SALT', 'j%umyDBsHNwqqyKH!dBBA=xmkOylCllBMUToLMk?Xd}=mVQeAIjzBP*+!/(++DU)[S]i{bO)DK&Bc!Hf[C}wp=%Jx+//oVhSj[C+rn%XnsUsO)AT*C<Xn&[Qh$fIc_uB');
define('SECURE_AUTH_SALT', '>m?g{Zk_)=S%ng_OvVTGU/scYOL{i+y>pL@g@TcqJP%ury_zJwmrxfoF]=db}-;;MVQaX/PwDMvUYNyKfz]drFh(HC*hjhx@u?ccdzGZ/wi{&RJHaB?Y&guQZBumAY_A');
define('LOGGED_IN_SALT', 'NZ>MBb{nO%;CSSe*y|O_N)Y@dv{QjX*BA&GJ[E<D+Twz][GOm!J{^Tp(H*={;am?{ftcb%{sqm|k&eP+NTLlEGtjh[[?Xj)dPXave(bgNzU}|ZdHiQV!<G@qBF&LrWp$');
define('NONCE_SALT', '|_d]JlM?+{FD/qLH=a}efT-dNZkLpfzYwTgM&dfv_C+v-FsWUH]!pN?Ty|iAvbUSCk<@lAPCPqda^Q$+exxDdSpb*$nJAZIDA{)dCm^$i>YQKW-ov)q!Q^Nf<a[iD)tA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_uzlr_';

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
