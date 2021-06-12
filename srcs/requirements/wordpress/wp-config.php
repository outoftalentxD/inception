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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'melaena' );

/** MySQL database password */
define( 'DB_PASSWORD', 'melaena' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );
	
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'urX@O}Ta7P[X]<~d-)?+qmGtGWNWG7OIapGLVr|,i(prSiU|R8A|L%|h:`r6RYIo' );
define( 'SECURE_AUTH_KEY',  'B5|ad-t+3L@(Id/T5F|KURcY}(8|O$yA%*@I(oBZ)lIvOAs(o<V7C~$5E]>h;[d,' );
define( 'LOGGED_IN_KEY',    'deA~srD#TXj_2)f0(RWpwSy6t%ez7~S;@ipl%LTGO=t,w#/ML|+tH`.1qRgIg{lJ' );
define( 'NONCE_KEY',        'twXBC>}6zC<H|qYntOJagLv~?s%. %J$wrP#~cC%+th1W<v>%]VM]M?]Wxi,*_4;' );
define( 'AUTH_SALT',        'Pa+>/NJe n t^ns~vQL,dAh79~s*Pr0!/<C!{pm:Wq-qWNpKHO7*Zf-)M6QLt?]?' );
define( 'SECURE_AUTH_SALT', '>OysLS]PE0[}Q_tF,dE&qAyGclh,u Q|XcqH}+q$_vqW~++ey6-Q3#ivB`@cy>pB' );
define( 'LOGGED_IN_SALT',   '[zI?D)c+N%(?J||rxRgm=->SlwIjopKegIy+h+!Y;3-P5a,TR4hkXGO KtF-Xwb<' );
define( 'NONCE_SALT',       '-)+A-X93<(Ui-cI<mHZofYsk:!DxCx!>^cn<@i<q#GRLHG$$R_LAn$k:c)Vc[7@$' );

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
