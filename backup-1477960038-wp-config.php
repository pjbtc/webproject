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
define('DB_NAME', 'psthingc_ss_dbname249');

/** MySQL database username */
define('DB_USER', 'psthingc_ss_d249');

/** MySQL database password */
define('DB_PASSWORD', 'zpXJ9dCHnnny');

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
define('AUTH_KEY', 'yKI@MTcLO!wPE_Ae[%$cDrqV+sH|g)LVjVtHK{*zL(*o;PzuEzj&PtkFAgJErJXI)%}r=_[{A>hRE?//jNGd$it]u$Fbt>i=BFq&RLoghWNGvL+ZwUU@]oI+b-qp=Tbi');
define('SECURE_AUTH_KEY', 'LPDSE=M/(eVanm[h(UTtu>^GZNfXlCUG<eFvpqIQMICS;=}b=JR<t|qjv^Cbj;V)KOT&EGb<KgP)ib%Bz<nNg$flDT]Mx??>Ma+}lg^+>SuCKDOWl<re|MVcBB/diQUW');
define('LOGGED_IN_KEY', 'NNN!MxXjzhLr_VrZRKrATFWhCd]|m=hZo{[uqRiNma_)Hg;scXbOps$tKf]_{yoWIHdDy(QS(<q<SbzRoTYWmL}|PCdm{saIM)wEkh*pZ?hY+FUbfY[qu-DZtVMy;uKg');
define('NONCE_KEY', 'Y)nGGy|xAuMKm|QBK/))b)bdBs-OQ[Z&-WIp=AFg+sS[E{WjJ^nw?P-q%^f(<Rt$W*ogjDaozzi/%inAkwl<Vvx)z!pjFh^I@EN@sa@o*OI<ZW?kp^zqkdBC>z+cVEZW');
define('AUTH_SALT', 'LL{)|[qz[?Q%PKu@LMvRXr)MK;zr%WmiubS({cyI_CT[/>ONC(<rdM*gAK?bDrga-;vQm_LXF?uoo^)ngmC;(U/wh<+Q^-eq({Vy>O+OsBu(|lrOGEl$!oMdN_r%Zvvw');
define('SECURE_AUTH_SALT', ')}DhZnCetfZX+^QxNj]x-rlaWH_(Ow^*wSEyJ@&V{smeNN};SGZ[BHJ?Ui;SBUvzU!mFbhP<)jR)+)sS&CnjpvVLTS=l<iK_-+XhATTjI$_oB}Y&ztBznxjiRY@DKvJ^');
define('LOGGED_IN_SALT', 'o*QQ;rYB=UWP@MP+o[n+J^rxgh?Y|yUK+$wYRMImiKQF_b)t>iKc<+e]@=Fff<Yok@BLX$JfdFIpZLz!fI=aAR+A(oA+xfEWJ&+Bt[C/dVnFH-o/D_-R*ivdBc=MK}%z');
define('NONCE_SALT', 'dF[aV+%|myb|=s%I)=bIL;UYhIFXpQUyDO^s};V]/-ba>B$iIqtyjjv?fG{giTOKnNi@Bh>(jE]D[^M%RlK^MgH}ITjv{h<gd<aNhGTX!rcRt%P|osml[IVHc+N?|Ze)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_vixg_';

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
