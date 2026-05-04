<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the website, you can copy this file to "wp-config.php"

 * and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * Database settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/

 *

 * @package WordPress

 */



// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'avanta_website' );



/** Database username */

define( 'DB_USER', 'avanta_website' );



/** Database password */

define( 'DB_PASSWORD', 'Q*0[Ysw=}Ogh' );



/** Database hostname */

define( 'DB_HOST', 'localhost' );



/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );



/** The database collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );



/**#@+

 * Authentication unique keys and salts.

 *

 * Change these to different unique phrases! You can generate these using

 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.

 *

 * You can change these at any point in time to invalidate all existing cookies.

 * This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         ')R-Xq);26R%|:u+*g`N=G6(7i{_C+3X4S[#wg ayJ|B_t^T7@lo%?C+hpCY.NzqC' );

define( 'SECURE_AUTH_KEY',  '+m(1,RACm74*li>&3^860bxkuhJFbx]th{MGNg$#jXpXBSi4|/)N9Fd ^uqZ+K|{' );

define( 'LOGGED_IN_KEY',    'Fi`/J75*vy^{u{+_]}/@q.fV/muIOYyV Z.*col?e?uYr)#_wUOO;2Ws.~fi<iS-' );

define( 'NONCE_KEY',        '7l-?N19ZEW<$yW@Cz<*0=>is>GJww45y`!5X&OF+ye=F:*z?s<u8_Fg{_2::^n58' );

define( 'AUTH_SALT',        'EDly1T,cDn.tS-V$Z(*2*:#>b|g~b(K*)Bi^/aFUDx3H.Iy|n<g<X>]_z%#24/O}' );

define( 'SECURE_AUTH_SALT', '9R?B^OW^ziW$i[:uRQSL[CUWT,tQFkUwqT*Q9}fr7P>)9m0P%8I?KPlf=QOyOv@w' );

define( 'LOGGED_IN_SALT',   'T.q{=<#bE5pfdd9+z%UMJn*<VO&th$8QQP8rf@oCl@?^9Q|pDT__9H92r _sX|&a' );

define( 'NONCE_SALT',       'C<P*sS*95o95b0]oVJ;8c}E)T]c/rT)E+}SE1{E4.`H@T%vA]PK5tea}*/*,3@$h' );



/**#@-*/



/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 *

 * At the installation time, database tables are created with the specified prefix.

 * Changing this value after WordPress is installed will make your site think

 * it has not been installed.

 *

 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix

 */

$table_prefix = 'avanta_website_';



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/

 */

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);



/* Add any custom values between this line and the "stop editing" line. */


define('WP_MEMORY_LIMIT', '512M');




/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

