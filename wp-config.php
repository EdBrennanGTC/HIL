<?php
/** 
 * The base configurations of the WordPress.
 *
 **************************************************************************
 * Do not try to create this file manually. Read the README.txt and run the 
 * web installer.
 **************************************************************************
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pigsinth_hil');

/** MySQL database username */
define('DB_USER', 'c3hiladmin');

/** MySQL database password */
define('DB_PASSWORD', 'PLokij123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('VHOST', 'yes'); 
$base = '/';
define('DOMAIN_CURRENT_SITE', 'hopeinloss.org' );
define('PATH_CURRENT_SITE', '/' );
define('SITE_ID_CURRENT_SITE', 1);
define('BLOGID_CURRENT_SITE', '1' );

/* Uncomment to allow blog admins to edit their users. See http://trac.mu.wordpress.org/ticket/1169 */
//define( "EDIT_ANY_USER", true );
/* Uncomment to enable post by email options. See http://trac.mu.wordpress.org/ticket/1084 */
//define( "POST_BY_EMAIL", true );

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/wpmu/salt WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '39b98e47bda22c536d54e72d185856e9f998ec75dde7ff356f1a3f5736eec9d8');
define('SECURE_AUTH_KEY', 'd0631118e8133a82c69f7f245e37f6055af1abca671725c024df817cc9b6a847');
define('LOGGED_IN_KEY', '07fae9819ae875552230ec1848514f755b87e34e5b42f9ca6d908360c82de46c');
define('NONCE_KEY', 'c283898d74ca9d6c5af968201bcd6502c4a1d75827ef292b276a058b5a3a74ff');
define('AUTH_SALT', 'b130ffceebafd4e9eaf89d071701622fc41a2c16c879cf954d0e81ffe92c6619');
define('LOGGED_IN_SALT', 'ae644bb262bc03f8087cecdcc0132aa048c400b4f93ef2e9a138744be3620a08');
define('SECURE_AUTH_SALT', '4b50ac669b97cd74dddf166f02bff70ba1e1d46ac25fcfe4fcbeee075cabb62f');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

// double check $base
if( $base == 'BASE' )
	die( 'Problem in wp-config.php - $base is set to BASE when it should be the path like "/" or "/blogs/"! Please fix it!' );

// uncomment this to enable WP_CONTENT_DIR/sunrise.php support
//define( 'SUNRISE', 'on' );

// uncomment to move wp-content/blogs.dir to another relative path
// remember to change WP_CONTENT too.
// define( "UPLOADBLOGSDIR", "fileserver" );

// If VHOST is 'yes' uncomment and set this to a URL to redirect if a blog does not exist or is a 404 on the main blog. (Useful if signup is disabled)
// For example, the browser will redirect to http://examples.com/ for the following: define( 'NOBLOGREDIRECT', 'http://example.com/' );
// Set this value to %siteurl% to redirect to the root of the site
// define( 'NOBLOGREDIRECT', '' );
// On a directory based install you must use the theme 404 handler.

// Location of mu-plugins
// define( 'WPMU_PLUGIN_DIR', '' );
// define( 'WPMU_PLUGIN_URL', '' );
// define( 'MUPLUGINDIR', 'wp-content/mu-plugins' );

define( "WP_USE_MULTIPLE_DB", false );
define( 'NONCE_SALT', 'rN?FEmriwfC(ffvK?K~,ZAIYC/gNq%.:RjiW+EDn~g2:V)`a9tXM|e*@tkD4uZ~_' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
