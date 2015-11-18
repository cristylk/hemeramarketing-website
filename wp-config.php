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
define('DB_NAME', 'wordpress_c48');

/** MySQL database username */
define('DB_USER', 'wordpress_80d');

/** MySQL database password */
define('DB_PASSWORD', 'YUGd93tr_5');

/** MySQL hostname */
define('DB_HOST', '50.62.209.40:3306');

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
define('AUTH_KEY',       'T6u(meOn0*Dl2@g5ib*5VUZy(Hl4wH3f(#vTFN@RKvd))(Uj5HeJEEGXkrXucWwV');
define('SECURE_AUTH_KEY',       '^0NkqKCK41wq#teGkXZIRZyNivEU!BwSx24n&##uMoXTmnnjpj*p^xaXh2f@Ep1l');
define('LOGGED_IN_KEY',       'srrR)dvC71p49KPT3ieKJtVNYkjkdHrf4zyD#O%fc)KY6DkHhBE0T5H)atv461N4');
define('NONCE_KEY',       'QgUY&6Ko%JZ5*slHaC(3M)1yTc72jedfSq@EgTlPZZ8)EyLp7rLtRdx2N&Q1!1V1');
define('AUTH_SALT',       '28o7O6AfIPkW#pDIahkaors012%Tz4WJubF!4ZN0ULg65aHExHiz7zEzTjTbq%cS');
define('SECURE_AUTH_SALT',       'sg2elyT15Gx7i2Cct!ncGLBF8oxNG9!*)WtRh)U)U8j@IalskCU)cHXFExm7)Ttt');
define('LOGGED_IN_SALT',       'zY@R&K2r%p#vb4iizD%@9r5nak1ER^XbYYe)^U3ejeZSJb13Dq@LVtS!6ZFv4i0o');
define('NONCE_SALT',       'MlPy67y!6E7wE(STCGigXbbAFyDVCwGKYFvQUDl5l8nDfcPbF0hOyGEykuG)6z8Z');
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
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
