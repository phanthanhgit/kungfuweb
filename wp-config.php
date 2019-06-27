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
define('WP_HOME','http://localhost/kungfuweb');
define('WP_SITEURL','http://localhost/kungfuweb');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_data' );

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
define( 'AUTH_KEY',         '(X7Tt3OEr02Ct?Xp02^odABHqfgO-=sA)Gko^f!4`CH)b+Qnn~f$ajA=SQyGcaS!' );
define( 'SECURE_AUTH_KEY',  '3{.B)gi.?t*Ov m%,ygoNxI-t0/N,.Ee0$&Jx L(RKD.R$7+Y06:NuA&Nc_$,TF}' );
define( 'LOGGED_IN_KEY',    'oZlTZnX5v!qF=#,sufO;2g:AfkUfO.Kz $,C[GiBmYW^YTw@v7TFBvkvX<MQ8$rg' );
define( 'NONCE_KEY',        'o6okQl!.v#Ct#45d8# en<]5sU,Qtx6y%(QYfP2HO0Z^LFd:433A;6I(hW|y?_w0' );
define( 'AUTH_SALT',        'K[$oPCrL7r$g5|HpnYu% :rG j7+ s+4wkXi:p1IN:e&yuxEvvfS>4S3Ms3>xF2V' );
define( 'SECURE_AUTH_SALT', 'u2qwWre;PDZUrl?|$>$O.dw6hl{:q^o}~PRwnk%0TLv |NVlC0Y1O)]ld%s3nYXi' );
define( 'LOGGED_IN_SALT',   'O:;[Afgi-=E!;wAapxY/6~9T7$]kNBYR^l`I|php}<Z)/fKl.gVt58P@vAuT:XS4' );
define( 'NONCE_SALT',       '[c6.]DZW{(OAF}:o[q!20]Ts+G](R6g|5}4Xj7]MciPiO>Ck-zwZGM=CKaIABB^z' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
