<?php
/** 
 * The base configurations of bbPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys and bbPress Language. You can get the MySQL settings from your
 * web host.
 *
 * This file is used by the installer during installation.
 *
 * @package bbPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for bbPress */
define( 'BBDB_NAME', 'hopeinlo_HIL01' );

/** MySQL database username */
define( 'BBDB_USER', 'hopeinlo_dangero' );

/** MySQL database password */
define( 'BBDB_PASSWORD', 'PLokij123' );

/** MySQL hostname */
define( 'BBDB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'BBDB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'BBDB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/bbpress/ WordPress.org secret-key service}
 *
 * @since 1.0
 */
define( 'BB_AUTH_KEY', '39b98e47bda22c536d54e72d185856e9f998ec75dde7ff356f1a3f5736eec9d8' );
define( 'BB_SECURE_AUTH_KEY', 'd0631118e8133a82c69f7f245e37f6055af1abca671725c024df817cc9b6a847' );
define( 'BB_LOGGED_IN_KEY', '07fae9819ae875552230ec1848514f755b87e34e5b42f9ca6d908360c82de46c' );
define( 'BB_NONCE_KEY', 'c283898d74ca9d6c5af968201bcd6502c4a1d75827ef292b276a058b5a3a74ff' );
/**#@-*/

/**
 * bbPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$bb_table_prefix = 'wp_bb_';

/**
 * bbPress Localized Language, defaults to English.
 *
 * Change this to localize bbPress. A corresponding MO file for the chosen
 * language must be installed to a directory called "my-languages" in the root
 * directory of bbPress. For example, install de.mo to "my-languages" and set
 * BB_LANG to 'de' to enable German language support.
 */
define( 'BB_LANG', '' );

$bb->custom_user_table = "wp_users";
$bb->custom_user_meta_table = "wp_usermeta";

$bb->uri = "http://hopeinloss.org/wp-content/plugins/buddypress/bp-forums/bbpress/";
$bb->name = " Forums";
$bb->wordpress_mu_primary_blog_id = 1;

define('BB_AUTH_SALT', "b130ffceebafd4e9eaf89d071701622fc41a2c16c879cf954d0e81ffe92c6619");
define('BB_LOGGED_IN_SALT', "ae644bb262bc03f8087cecdcc0132aa048c400b4f93ef2e9a138744be3620a08");
define('BB_SECURE_AUTH_SALT', "4b50ac669b97cd74dddf166f02bff70ba1e1d46ac25fcfe4fcbeee075cabb62f");

define('WP_AUTH_COOKIE_VERSION', 2);

?>