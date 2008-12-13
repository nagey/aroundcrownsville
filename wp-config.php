<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db464_aroundcrownsville');

/** MySQL database username */
define('DB_USER', 'db464_crownsv');

/** MySQL database password */
define('DB_PASSWORD', 'gef4upeT');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s464.gridserver.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',        'lszy:a<a0K+%pNqS>7R~Kjj*/vT^~-/&zR-+$?@$aHLXKwK#Hq|J%Lk9En~S:Tk%');
define('SECURE_AUTH_KEY', 'FJ4.@Qv#f5bW{eU}Lw&-:Ai( 8*v Fy}+,P/jbIzJwWN3{Eag%Pi@u@w[%BE*/`<');
define('LOGGED_IN_KEY',   '~^K6V}AL+5m+Q&BLu.%(3.,jR/qVjgzlNn(#m7Sz/M(|db|)/>8xSHt@(qNI`8+3');
define('NONCE_KEY',       ';1sDhv`StU &[`RgAeH1I|FH#%vtn2>)SgQ_ nQ7i=lNDwh!OJud<uzAy>EW @1O');
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

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>
