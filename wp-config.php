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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doctorsl' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '27&MPR.[e^`mBBtJglUXR&&y;9ELLI<s(%>RD/BsFdde@vX.Ceb}@3pQ(_yJN5:S' );
define( 'SECURE_AUTH_KEY',  '0:<0Zr7#cpQ$g>=}XUFD|s%wUn+%57UlU(|N!0R%/DIO8 fI~bg.#<m<8Mk61atc' );
define( 'LOGGED_IN_KEY',    '~#LaYY5p|=PN{un*:}xuj~]Ip/]/,bOyCh@p57q (]]G}l?f=5>JE.>Ry`mNUpwI' );
define( 'NONCE_KEY',        'd|YSu<hy1bMc%5#T~z&n$G36WX3%Jw_;A 7MXt}sGB~1M]J;.Hl[SO#TfbLhCP-%' );
define( 'AUTH_SALT',        'zp%}ZRh}Q4iE_VsF0Zu1)&Z1q|>g?]LEU`rFi6{+cKu{EP4xs,OS9VimTnpxX!nb' );
define( 'SECURE_AUTH_SALT', '|ak{y0@Onq;<B$EH2L>+Xbf6UY(_-B,D!bjnI#jL.zbd[aKR@k/Xy!OvVM/bvd*0' );
define( 'LOGGED_IN_SALT',   'WLu>l(G8p!j%rXd8? gT=8Xtl]oKe}D9% )EK2dM,z}RLRFi0MLw$~AK]w/VW8gP' );
define( 'NONCE_SALT',       '|JhZSk=0;#k#50m+ ~w)KO9{UzZ~` e|M$zbd3,E5KayMG3>E2kKrb%JM_-!F: _' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
